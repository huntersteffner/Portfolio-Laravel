<?php

namespace App\Http\Controllers;

use App\Mail\ContactConfirmationMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'message' => 'required'
        ]);

        Mail::to('huntersteffner@gmail.com')->
        send(new ContactMail(
            $validated['name'],
            $validated['email'],
            $validated['website'],
            $validated['message']
        ));

        Mail::to($validated['email'])->
        send(new ContactConfirmationMail(
            $validated['name'],
            $validated['email']
        ));

        // Send email
        return ['success' => true];
    }
}
