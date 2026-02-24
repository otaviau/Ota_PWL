<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'IndexFood']);
    Route::get('/beauty-health', [ProductsController::class, 'IndexBeauty']);
    Route::get('/home-care', [ProductsController::class, 'IndexHomeCare']);
    Route::get('/baby-kid', [ProductsController::class, 'IndexBaby']);
});

Route::get('/user/{id}/name/{name}', [ProfileController::class, 'index']);

Route::get('/sales', [SalesController::class, 'index']);
