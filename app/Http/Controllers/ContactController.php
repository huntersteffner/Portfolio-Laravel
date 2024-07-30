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
            'website' => '',
            'message' => 'required',
            'source' => ''
        ]);

        Mail::to('hunter@huntersteffnerwebdev.com')->
        bcc('huntersteffner@gmail.com')->
        send(new ContactMail(
            $validated['name'],
            $validated['email'],
            $validated['website'],
            $validated['message'],
            $validated['source']
        ));

        Mail::to($validated['email'])->
        send(new ContactConfirmationMail(
            $validated['name'],
            $validated['email'],
            $validated['website'],
            $validated['message'],
            $validated['source']
        ));

        // Send email
        return ['success' => true];
    }
}
