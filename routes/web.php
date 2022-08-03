<?php

use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::group([], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about.us');
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact.us');
    Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
    Route::post('/message-us', [HomeController::class, 'message'])->name('message.us');
});
