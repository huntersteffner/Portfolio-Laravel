<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/about', function () {
    return view('about');
});
Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit']);