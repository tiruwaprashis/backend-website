<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;

class SubmissionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        // Store the submission data
        $submission = Submission::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'category' => $request->category,
        ]);

        // Send confirmation email
        Mail::to($request->email)->send(new FormSubmissionMail($request->all()));

        return redirect()->back()->with('success', 'Form submitted successfully and email sent.');
    }
}
