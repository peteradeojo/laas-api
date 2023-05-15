<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('verify-email', [AuthController::class, 'verifyEmailAddress']);
    Route::get('verify-email', [AuthController::class, 'sendEmailVerification'])->middleware('auth:sanctum');
    Route::get('me', [UserController::class, 'me'])->middleware('auth:sanctum');
});

Route::prefix('applications')->middleware(['auth:sanctum'])->group(function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('/{app}', [ApplicationController::class, 'show']);
    Route::post('/', [ApplicationController::class, 'store']);
    Route::middleware(['throttle:5,5'])->post('/{app}/token', [ApplicationController::class, 'generateApiKey']); //->whereAlpha(['app']);
});

Route::prefix('logs')->middleware('auth:sanctum')->group(function () {
    Route::get('/', [LogController::class, 'index']);
    Route::delete('/{app}', [LogController::class, 'clearLogs']);
});

Route::post('/log', [LogController::class, 'store']);
