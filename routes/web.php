<?php

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


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/team', function () {
    return view('teamPage');
})->name('team');

Route::get('/contact', function () {
    return view('contactPage');
})->name('contact');

Route::get('/job', function () {
    return view('JobPage');
})->name('job');

Route::get('/blog', function () {
    return view('blogPage');
})->name('blog');