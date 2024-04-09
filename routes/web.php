<?php

use App\Http\Controllers\Whatsapp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('wathsapp', [Whatsapp::class, 'sendMessage'])->name('wathsapp');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('testimonial', function () {
    return view('testimonial');
})->name('testimonial');
