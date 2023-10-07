<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\Clerk\ClerkHomeController;
use App\Http\Controllers\Clerk\ClerkProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\student\StudentHomeController;
use App\Http\Controllers\student\StudentProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => 'Hello');

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::get('/about', [AboutUsController::class, 'index'])->name('about');



Route::prefix('/admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');
        Route::get('/profile/{id?}/{dob?}', [AdminProfileController::class, 'show'])->name('profile');
        Route::resource('profile',AdminProfileController::class);
    });

    Route::prefix('/clerk')
    ->name('clerk.')
    ->group(function () {

        Route::get('/home', [ClerkHomeController::class, 'index'])->name('home');
        Route::get('/profile/{id?}/{dob?}', [ClerkProfileController::class, 'show'])->name('profile');

    });
    Route::prefix('/student')
    ->name('student.')
    ->group(function () {

        Route::get('/home', [StudentHomeController::class, 'index'])->name('home');
        Route::get('/profile/{id?}/{dob?}', [StudentProfileController::class, 'show'])->name('profile');

    });

// Route::prefix('/clerk')->group(function () {
//     Route::get('profile/{id?}/{name?}', [ProfileController::class, 'profile'])->name('profile');
//     Route::get('/about-us/{name?}/{age?}', [AboutUsController:: class, 'about_us'])->name('about');
// });

// Route::get('/string', function () {
//     return 10;
// });


