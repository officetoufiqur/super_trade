<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\Admin\DashboardController;
use App\Http\Controllers\Web\Frontend\Admin\HomeController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // navbar 
    Route::get('/home/navbar', [HomeController::class, 'navbar'])->name('home.navbar');
    Route::get('/home/navbar/create', [HomeController::class, 'navbarCreate'])->name('home.navbar.create');
    Route::post('/home/navbar/store', [HomeController::class, 'navbarStore'])->name('home.navbar.store');

    // banner
    Route::get('/banner', [HomeController::class, 'banner'])->name('banner');
    Route::get('/banner/edit/{id}', [HomeController::class, 'bannerEdit'])->name('banner.edit');
    Route::post('/banner/update/{id}', [HomeController::class, 'bannerUpdate'])->name('banner.update');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
