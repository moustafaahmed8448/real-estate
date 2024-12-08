<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // You can send an email to the support team here
        // For example, using Laravel's Mail facade
        Mail::send('emails.support', [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ], function ($message) {
            $message->to('support@yourwebsite.com')
                ->subject('New Support Request');
        });

        // Redirect back with a success message
        return redirect()->route('support')->with('success', 'Your message has been sent. We will get back to you shortly.');
    }
}
