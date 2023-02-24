<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage() {
        return view('home');
    }

    public function getPortfolioPage() {
        return view('projects');
    }
}
