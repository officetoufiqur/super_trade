<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\Admin\HomeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/banner', [HomeController::class, 'bannerApi']);
Route::get('/home/navbar', [HomeController::class, 'navbarApi']);