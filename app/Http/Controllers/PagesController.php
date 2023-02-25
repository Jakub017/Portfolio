<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\Session;

class PagesController extends Controller
{
    public function getHomePage() {
        return view('home');
    }

    public function getPortfolioPage() {
        return view('projects');
    }

    public function languageHandler($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
    }
}
