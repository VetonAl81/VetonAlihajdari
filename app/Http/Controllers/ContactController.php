<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:200',
            'message'    => 'required|string|max:5000',
        ]);

        // Mail::to('veton@alihajdari.com')->send(new \App\Mail\ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully. Thank you!');
    }
}
