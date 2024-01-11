<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PagesController extends Controller
{
    public function getHomePage() {
        return view('home');
    }

    public function projects() {
        return view('projects');
    }

    public function setLocale(Request $request)
    {
        $locale = $request->input('locale');
        App::setLocale($locale);
        return redirect()->back();
    }
}
