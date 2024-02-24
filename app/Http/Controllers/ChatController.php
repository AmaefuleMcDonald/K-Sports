<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public function sendChat(Request $request)
    {
        $message = $request->input('message');

        // Send email to the admin
        Mail::raw($message, function ($mail) use ($request) {
            $mail->to('amaefule720@gmail.com') // Replace with the admin's email address
                 ->subject('New Chat Message');
        });

        // Redirect back or to a 'thank you' page
        return back()->with('success', 'Your message has been sent.');
    }
}
