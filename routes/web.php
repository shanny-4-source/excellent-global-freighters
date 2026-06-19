<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');

Route::get('/quote', function () {
    return view('pages.quote');
});

use App\Http\Controllers\QuoteController;

Route::post('/quote/send', [QuoteController::class, 'send'])
    ->name('quote.send');