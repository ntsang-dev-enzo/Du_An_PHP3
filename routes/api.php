<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Client\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('categories', CategoryController::class);