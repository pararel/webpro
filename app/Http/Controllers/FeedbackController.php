<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function showFaqForm()
    {
        return view('user.faq');
    }

    public function storeFeedback(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $feedback = new Feedback();
        $feedback->id_user = Auth::id();
        $feedback->message = $request->message;
        $feedback->save();

        return redirect()->route('faq')->with('success', 'Feedback submitted successfully.');
    }

    public function showFeedbacks()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('admin.dashboard', compact('feedbacks'));
    }
}
