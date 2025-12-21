<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/service1', function () {
    return view('service1');
})->name('service1');

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\Controller::class, 'index'])->name('home');

Route::get('/login', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest'])
    ->name('login');

Route::post('/login', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest']);

Route::post('/logout', [\Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('logout');
