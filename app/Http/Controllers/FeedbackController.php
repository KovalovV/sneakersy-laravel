<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function validate_feedback(Request $request)
    {
        $valid = $request->validate([
            'feedback' => 'required|min:4|max:300'
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->stars = $request->input('stars');
        $feedback->feedback = $request->input('feedback');

        $feedback->save();
        
        return redirect()->route('feedback');

    }

    public function index()
    {
        $feedback = new Feedback();
        return view('feedback', ['feedbacks' => $feedback->all()]);
    }
}
