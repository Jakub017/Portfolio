<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage() {
        return view('homepage.index');
    }

    // public function getPortfolioPage() {
    //     return view('frontend.portfolio.index');
    // }
}
