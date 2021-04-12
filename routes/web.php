<?php

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

Route::get('/', function () {
    return view('websites.guests');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/webportfolio', function () {
    return view('websites.portfolio');
})->name('websites.portfolio');

Route::get('/games', function () {
    return view('games.guests');
});

Route::get('/gamesportfolio', function () {
    return view('games.portfolio');
})->name('games.portfolio');

Route::get('/digitalmarketing', function () {
    return view('digitalmarketing.guests');
});

Route::get('/digitalmarketingportfolio', function () {
    return view('digitalmarketing.portfolio');
})->name('digitalmarketing.portfolio');

Route::get('/events', function () {
    return view('events.guests');
});

Route::get('/eventsportfolio', function () {
    return view('events.portfolio');
})->name('events.portfolio');

Route::get('/webinquire', function () {
    return view('websites.inquire');
})->name('websites.inquire');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
