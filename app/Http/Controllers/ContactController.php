<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactForm(Request $request) 
    {
         // Form validation
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('oskar.m.bostrom@gmail.com', 'Admin');
        });

        return back()->with('success', 'Message sent!');
    }
}
