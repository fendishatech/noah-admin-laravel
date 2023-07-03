<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

// Auth Routes.
Route::post("/login", [AuthController::class, 'login']);
