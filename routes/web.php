<?php

use App\Http\Controllers\Web\Admin\AboutController;
use App\Http\Controllers\Web\Admin\NavbarController;
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
    Route::get('/home/navbar', [NavbarController::class, 'navbar'])->name('home.navbar');
    Route::get('/home/navbar/create', [NavbarController::class, 'navbarCreate'])->name('home.navbar.create');
    Route::get('/home/navbar/edit/{id}', [NavbarController::class, 'navbarEdit'])->name('home.navbar.edit');
    Route::post('/home/navbar/store', [NavbarController::class, 'navbarStore'])->name('home.navbar.store');
    Route::post('/home/navbar/update/{id}', [NavbarController::class, 'navbarUpdate'])->name('home.navbar.update');
    Route::delete('/home/navbar/delete/{id}', [NavbarController::class, 'navbarDestroy'])->name('home.navbar.destroy');

    // banner
    Route::get('/banner', [HomeController::class, 'banner'])->name('banner');
    Route::get('/banner/edit/{id}', [HomeController::class, 'bannerEdit'])->name('banner.edit');
    Route::post('/banner/update/{id}', [HomeController::class, 'bannerUpdate'])->name('banner.update');

    // Supertrade
    Route::get('/home/supertrade', [HomeController::class, 'supertrade'])->name('supertrade');
    Route::get('/home/supertrade/create', [HomeController::class, 'supertradeCreate'])->name('supertrade.create');
    Route::post('/home/supertrade/store', [HomeController::class, 'supertradeStore'])->name('supertrade.store');
    Route::get('/home/supertrade/edit/{id}', [HomeController::class, 'supertradeEdit'])->name('supertrade.edit');
    Route::post('/home/supertrade/update/{id}', [HomeController::class, 'supertradeUpdate'])->name('supertrade.update');
    Route::delete('/home/supertrade/delete/{id}', [HomeController::class, 'supertradeDestroy'])->name('supertrade.destroy');

    // super facts
    Route::get('/home/superfacts', [HomeController::class, 'superfacts'])->name('superfacts');
    Route::get('/home/superfacts/edit/{id}', [HomeController::class, 'superfactsEdit'])->name('superfacts.edit');
    Route::post('/home/superfacts/update/{id}', [HomeController::class, 'superfactsUpdate'])->name('superfacts.update');

    // footer
    Route::get('/home/footer', [HomeController::class, 'footer'])->name('footer');
    Route::get('/home/footer/create', [HomeController::class, 'footerCreate'])->name('footer.create');
    Route::post('/home/footer/store', [HomeController::class, 'footerStore'])->name('footer.store');
    Route::get('/home/footer/edit/{id}', [HomeController::class, 'footerEdit'])->name('footer.edit');
    Route::post('/home/footer/update/{id}', [HomeController::class, 'footerUpdate'])->name('footer.update');
    Route::delete('/home/footer/delete/{id}', [HomeController::class, 'footerDestroy'])->name('footer.destroy');

    // about
    Route::get('/about/banner', [AboutController::class, 'aboutBanner'])->name('about.banner');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
