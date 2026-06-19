<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::raw(
            "Name: ".$request->name."\n".
            "Email: ".$request->email."\n".
            "Phone: ".$request->phone."\n\n".
            $request->message,

            function ($mail) use ($request) {
                $mail->to('info@excellentcargofreighters.co.ke')
                     ->subject($request->subject);
            }
        );

        return back()->with('success', 'Message sent successfully!');
    }
}
