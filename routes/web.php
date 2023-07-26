<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Auth Routes.
Route::middleware(['alreadyLoggedIn'])->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});
Route::post("/login", [AuthController::class, 'login']);
Route::post("/logout", [AuthController::class, 'logout']);

// Home Routes
Route::middleware(['loginAuth'])->group(function () {
    // Protected routes here
    Route::get("/home", [HomeController::class, "index"]);
    Route::resource("/users", UserController::class);
});
