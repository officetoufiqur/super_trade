<?php

use App\Http\Controllers\Api\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\Admin\HomeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/banner', [APIController::class, 'bannerApi']);
Route::get('/home/navbar', [APIController::class, 'navbarApi']);
Route::get('/home/supertrade', [APIController::class, 'supertradeApi']);
Route::get('/home/super-faits', [APIController::class, 'superFaitApi']);
Route::get('/footer', [APIController::class, 'footerApi']);
Route::get('/home/about', [APIController::class, 'aboutApi']);