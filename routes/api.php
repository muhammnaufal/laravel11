<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

Route::apiResource('/users', App\Http\Controllers\Api\UserController::class);
