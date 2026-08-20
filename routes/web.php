<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::middleware('isLoggedIn')->group(function () {
    // Chat
    Route::resource('chat', ChatController::class);

    Route::get('/settings', [AccountController::class, 'settings'])->name('settings-page');
});

Route::get('/', [PageController::class , 'login'])->name('login');
Route::post('/logging-in',[AccountController::class, 'authenticate'])->name('auth');
Route::get('/register', [PageController::class , 'register'])->name('register');
Route::get('/logout', [AccountController::class , 'logout'])->name('logout');