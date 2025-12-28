<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;

use App\Http\Controllers\ProfileController;
use App\Models\Service;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
// Home page
Route::get('/', function () {
    $services = Service::all(); // Fetch all services
    return view('welcome', compact('services'));
})->name('home');

// Dashboard (protected)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $services = Service::all(); // Fetch all services if needed in dashboard
        return view('dashboard', compact('services'));
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


// Auth routes
Auth::routes();

// Protected Dashboard
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
});

// Admin Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Services Routes
Route::prefix('services')->group(function () { 

    Route::get('/', [AdminController::class, 'viewService'])
        ->name('services.index');

     Route::post('/', [AdminController::class, 'storeService'])
        ->name('services.store');
    Route::get('/create', [AdminController::class, 'storeServiceForm'])
        ->name('services.create');

    Route::get('/edit/{id}', [AdminController::class, 'editService'])
        ->name('services.edit');

    Route::put('/{id}', [AdminController::class, 'updateService'])
        ->name('services.update');

    Route::delete('/{id}', [AdminController::class, 'deleteService'])
        ->name('services.destroy');

    // ⚠️ MUST BE LAST
    Route::get('/{slug}', [AdminController::class, 'show'])
        ->name('services.show');
});


// Sub-Services Routes
Route::prefix('sub-services')->group(function () {
    Route::get('/', [AdminController::class, 'viewSubService'])->name('subservices.index');
    // Single Sub-Service page
    Route::get('/{id}', [AdminController::class, 'showSubService'])->name('subservices.show');
    Route::get('/create', [AdminController::class, 'storeSubServiceForm'])->name('subservices.create');
    Route::get('/edit/{id}', [AdminController::class, 'editSubService'])->name('subservices.edit');
    Route::put('/{id}', [AdminController::class, 'updateSubService'])->name('subservices.update');
    Route::post('/', [AdminController::class, 'storeSubService'])->name('subservices.store');
    Route::delete('/{id}', [AdminController::class, 'deleteSubService'])->name('subservices.delete');
});




Route::middleware(['auth'])->group(function () {
    Route::post('sub-services/{id}/book', [UserController::class, 'bookSubService'])->name('subservices.book');
});




// Profile Routes
Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
});







/*
|--------------------------------------------------------------------------
| PUBLIC SERVICE PAGE (MUST BE LAST)
|--------------------------------------------------------------------------
*/
