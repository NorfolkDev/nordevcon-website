<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/schedule', 'schedule');

    Route::get('/volunteer', 'volunteer');
    Route::get('/sponsor', 'sponsor');
    Route::post('/sponsor', 'submitForm');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about');
    Route::get('/conference', 'conference');
    Route::get('/attend', 'attend');
});
