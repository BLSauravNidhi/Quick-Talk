<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::middleware('isLoggedIn')->group(function () {
    // Chat
    Route::resource('chat', ChatController::class);

    Route::get('/settings', [AccountController::class, 'settings'])->name('settings-page');
    Route::get('/world', [PageController::class, 'world'])->name('world');
    Route::get('/notifications', [PageController::class, 'notifications'])->name('notification-page');
    Route::get('/my-profile', [AccountController::class, 'editProfile'])->name('edit-profile');
});

Route::get('/', [PageController::class , 'login'])->name('login');
Route::post('/logging-in',[AccountController::class, 'authenticate'])->name('auth');
Route::get('/register', [PageController::class , 'register'])->name('register');
Route::get('/logout', [AccountController::class , 'logout'])->name('logout');

/**
 * Google Login
 */
Route::get('/auth/google', [SocialiteController::class, 'googleLogin'])->name('auth.google');
Route::get('/auth/google-callback', [SocialiteController::class, 'googleAuthentication'])->name('auth.google-callback');