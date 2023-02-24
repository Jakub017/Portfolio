<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(PagesController::class)->group(function (){
    Route::get('/', 'getHomePage')->name('get.home');
    Route::get('/projekty', 'getPortfolioPage')->name('get.portfolioPage');
});

Route::controller(PagesController::class)->group(function (){
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});

