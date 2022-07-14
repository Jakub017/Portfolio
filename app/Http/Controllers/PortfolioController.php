<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function Index() {
        return view('frontend.portfolio.index');
    }
}
