<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;

Route::prefix('api')->group(static function() {
    Route::prefix('auth')->group(static function() {
        Route::get('/login', [LoginController::class, 'show'])->name('auth.login');
        Route::post('/login', [LoginController::class, 'login']);
    
        Route::get('/register', [RegisterController::class, 'show']);
        Route::post('/register', [RegisterController::class, 'register']);

        Route::get('/logout', [LogoutController::class, 'index']);
    });
    
    Route::middleware('auth')->group(static function() {
        Route::get('/me', [UserController::class, 'index']);
        Route::get('/user/{id}', [UserController::class, 'show']);

        Route::get('/video/{id}', [VideoController::class, 'show']);
        Route::post('/video/{id}/like', [LikeController::class, 'index']);
        
        Route::get('/upload', [VideoController::class, 'index']);
        Route::post('/upload', [VideoController::class, 'store']);
        
        Route::post('/video/{id}', [CommentController::class, 'store']);
    });
});