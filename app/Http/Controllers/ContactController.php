<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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

        return back()->with('success', 'Message sent!');
    }
}
