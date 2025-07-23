<?php

use App\Http\Controllers\Web\Admin\AboutController;
use App\Http\Controllers\Web\Admin\NavbarController;
use App\Http\Controllers\Web\Admin\ServiceController;
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
    Route::get('/about', [AboutController::class, 'about'])->name('about');
    Route::get('/about/edit/{id}', [AboutController::class, 'aboutEdit'])->name('about.edit');
    Route::post('/about/update/{id}', [AboutController::class, 'aboutUpdate'])->name('about.update');
    Route::get('/about/banner', [AboutController::class, 'aboutBanner'])->name('about.banner');
    Route::get('/about/banner/edit/{id}', [AboutController::class, 'aboutBannerEdit'])->name('about.banner.edit');
    Route::post('/about/banner/update/{id}', [AboutController::class, 'aboutBannerupdate'])->name('about.banner.update');
    Route::get('/about/card/create', [AboutController::class, 'cardCreate'])->name('about.card.create');
    Route::post('/about/card/store', [AboutController::class, 'cardStore'])->name('about.card.store');
    Route::get('/about/card/edit/{id}', [AboutController::class, 'cardEdit'])->name('about.card.edit');
    Route::post('/about/card/update/{id}', [AboutController::class, 'cardUpdate'])->name('about.card.update');
    Route::delete('/about/card/delete/{id}', [AboutController::class, 'cardDestroy'])->name('about.card.destroy');

    Route::get('/about/mission', [AboutController::class, 'mission'])->name('about.mission');
    Route::get('/about/mission/edit/{id}', [AboutController::class, 'missionEdit'])->name('about.mission.edit');
    Route::post('/about/mission/update/{id}', [AboutController::class, 'missionUpdate'])->name('about.mission.update');

    // services
    Route::get('/service/banner', [ServiceController::class, 'serviceBanner'])->name('service.banner');
    Route::get('/services/banner/edit/{id}', [ServiceController::class, 'serviceBannerEdit'])->name('service.banner.edit');
    Route::post('/service/banner/update/{id}', [ServiceController::class, 'serviceBannerUpdate'])->name('service.banner.update');

    // service card
    Route::get('/service/card', [ServiceController::class, 'serviceCard'])->name('service.card');
    Route::get('/service/card/create', [ServiceController::class, 'serviceCardCreate'])->name('service.card.create');
    Route::post('/service/card/store', [ServiceController::class, 'serviceCardStore'])->name('service.card.store');
    Route::get('/service/card/edit/{id}', [ServiceController::class, 'serviceCardEdit'])->name('service.card.edit');
    Route::post('/service/card/update/{id}', [ServiceController::class, 'serviceCardUpdate'])->name('service.card.update');
    Route::delete('/service/card/delete/{id}', [ServiceController::class, 'serviceCardDelete'])->name('service.card.delete');

    // service Trading 
    Route::get('/service/trading', [ServiceController::class, 'serviceTrading'])->name('service.trading');
    Route::get('/service/trading/card/create', [ServiceController::class, 'serviceTradingCreate'])->name('service.trading.create');
    Route::post('/service/trading/store', [ServiceController::class, 'serviceTradingStore'])->name('service.trading.store');
    Route::get('/service/trading/heading/edit/{id}', [ServiceController::class, 'serviceTradingHeddingEdit'])->name('service.trading.heading.edit');
    Route::post('/service/trading/heading/update/{id}', [ServiceController::class, 'serviceTradingHeddingUpdate'])->name('service.trading.heading.update');
    Route::get('/service/trading/edit/{id}', [ServiceController::class, 'serviceTradingEdit'])->name('service.trading.edit');
    Route::post('/service/trading/update/{id}', [ServiceController::class, 'serviceTradingUpdate'])->name('service.trading.update');
    Route::delete('/service/trading/card/delete/{id}', [ServiceController::class, 'serviceTradingDestroy'])->name('service.trading.destroy');

    // service Choose 
    Route::get('/service/choose', [ServiceController::class, 'serviceChoose'])->name('service.choose');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
