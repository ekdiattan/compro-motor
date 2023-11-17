<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;


Route::get('/', [ManagementController::class, 'index']);
Route::get('/contact', [ManagementController::class, 'contact']);
Route::get('/aboutus', [ManagementController::class, 'aboutus']);
Route::get('/visimisi', [ManagementController::class, 'visimisi']);
Route::get('/service', [ManagementController::class, 'service']);
Route::get('/client', [ManagementController::class, 'client']);
Route::get('/galeri', [ManagementController::class, 'galeri']);

Route::post('/store', [ContactController::class, 'storeEmail']);

