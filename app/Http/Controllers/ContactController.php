<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function store(Request $req)
    {
        if (RateLimiter::tooManyAttempts('contact-submission:' . $req->ip(), $perMinute = 5)) {
            return response()->json([
                'message' => 'Too many requests. Please try again after ' . RateLimiter::availableIn('contact-submission:' . $req->ip()) . ' seconds.'
            ], 429);
        }

        RateLimiter::hit('contact-submission:' . $req->ip());

        $req->validate([
            'first_name' => 'required|string|min:3|max:20',
            'last_name' => 'nullable|string|min:3|max:20',
            'phone' => 'required|phone:IN',
            'email' => 'nullable|email',
            'message' => 'required|string|min:10|max:500'
        ], [
            'phone.phone' => 'The phone number must be a valid Indian phone number.',
            'phone.required' => 'The phone number is required.',
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
