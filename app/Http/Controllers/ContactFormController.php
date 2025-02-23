<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::to('info@sahabcode.com')->send(new ContactFormMail($validatedData));

        return response()->json(['success' => true, 'message' => 'Your message has been sent successfully!']);
    }
}
