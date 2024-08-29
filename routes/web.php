<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [RegisteredUserController::class, 'create']);
Route::post('/login', [RegisteredUserController::class, 'store']);
Route::delete('/logout', [RegisteredUserController::class, 'destroy']);

