<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




Route::apiResource('homes', HomeController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('about-us', AboutUsController::class);
Route::apiResource('contacts', ContactController::class);
Route::apiResource('services', ServiceController::class);

Route::post('/register', [UserController::class, 'register']);
