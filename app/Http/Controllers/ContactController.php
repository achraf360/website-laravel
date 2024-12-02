<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('a.mouissaa@gmail.com')->send(new ContactMail($validated));

        return redirect()->route('contact.index')->with('success', 'Your message has been sent successfully!');
    }
}
