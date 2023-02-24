<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'phone' => 'numeric',
            'subject' => '',
            'message' => 'required',
        ]);

        Contact::create($attributes);

        return redirect()->back()->with(['success' => 'Dziękuję za wiadomość :) Zwykle odpowiadam w ciągu jednego dnia roboczego.']);
    }

}
