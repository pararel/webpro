<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function showCommunity()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('user.community', compact('posts'));
    }

    public function showAdminCommunity()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('admin.community', compact('posts'));
    }

    public function storePost(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->content = $request->content;
        $post->id_account = Auth::id();
        $post->save();

        $user = Auth::user();
        $user->incrementPosts();
        History::create([
            'message' => 'Anda memngunggah postingan di komunitas.',
            'info' => 'post',
            'id_acc' => Auth::id(),
        ]);
        if (Auth::user()->is_admin === 'yes') {
            return redirect()->route('adminCommunity')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->route('community')->with('success', 'Profile updated successfully.');
        }
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        History::create([
            'message' => 'Anda menghapus unggahan anda.',
            'info' => 'post',
            'id_acc' => Auth::id(),
        ]);
        $posts->delete();

        $user = Auth::user();
        $user->decrementPosts();
        if (Auth::user()->is_admin === 'yes') {
            return redirect()->route('adminCommunity')->with('success', 'Posts deleted successfully.');
        } else {
            return redirect()->route('community')->with('success', 'Posts deleted successfully.');
        }
    }
}
