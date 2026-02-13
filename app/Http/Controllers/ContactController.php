<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $req)
    {
        $req->validate([
            'first_name' => 'required|string|min:3|max:20',
            'last_name' => 'nullable|string|min:3|max:20',
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'email' => 'nullable|email',
            'message' => 'required|string|min:10|max:500'
        ]);

        Contact::create([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'phone' => $req->phone,
            'email' => $req->email,
            'message' => $req->message
        ]);

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
