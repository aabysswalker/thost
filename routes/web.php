<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VideoController;

Route::prefix('api')->group(static function() {
    Route::prefix('auth')->group(static function() {
        Route::get('/login', [LoginController::class, 'show']);
        Route::post('/login', [LoginController::class, 'login']);
    
        Route::get('/register', [RegisterController::class, 'show']);
        Route::post('/register', [RegisterController::class, 'register']);

        Route::post('/logout', [LogoutController::class, 'logout']);
    });
    
    Route::middleware('auth')->group(static function() {
        Route::get('/me', [UserController::class, 'index']);
        Route::get('/user/{id}', [UserController::class, 'show']);

        Route::get('/video/{id}', [VideoController::class, 'show']);
        Route::post('/upload', [VideoController::class, 'store']);
        
        Route::post('/video/{id}', [CommentController::class, 'store']);
    });
});