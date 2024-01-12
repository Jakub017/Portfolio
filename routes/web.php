<?php


use Illuminate\Http\Request;
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

Route::redirect('/', '/pl');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::controller(PagesController::class)->group(function (){
        Route::get('/', 'getHomePage')->name('home');
        Route::get('/projekty', 'projects')->name('projects');
    });
});

Route::controller(ContactController::class)->group(function (){
    Route::post('/', 'send')->name('contact.send');
});





