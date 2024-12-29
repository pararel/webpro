<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
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

        if (Auth::user()->is_admin === 'yes') {
            return redirect()->route('adminCommunity')->with('success', 'Profile updated successfully.');
        } else {
            return redirect()->route('community')->with('success', 'Profile updated successfully.');
        }
    }
}
