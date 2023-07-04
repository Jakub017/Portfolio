<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'topic' => 'required',
            'phone' => 'nullable',
            'message' => 'required',
        ]);

        Mail::to('kontakt@lipinskijakub.pl')->send(new ContactMail($attributes));

        return redirect()->back()->with(['success' => 'Dziękuję za wiadomość! Zwykle odpowiadam w ciągu jednego dnia roboczego.']);
    }

}
