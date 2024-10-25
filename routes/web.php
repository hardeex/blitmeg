<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // dashboard auth routes
    Route::get('/source', [UserController::class, 'source'])->name('dashboard.source');
    Route::get('/billing', [UserController::class, 'billing'])->name('dashboard.billing');
    Route::get('/connection', [UserController::class, 'connection'])->name('dashboard.connection');
    Route::get('performance', [UserController::class, 'performance'])->name('dashboard.performance');
    Route::get('/user', [UserController::class, 'user'])->name('dashboard.user');
    Route::get('/profile', [UserController::class, 'profile'])->name('dashboard.profile');
    Route::get('/support', [UserController::class, 'support'])->name('dashboard.support');
    Route::get('/settings', [UserController::class, 'settings'])->name('dashboard.settings');
});

require __DIR__ . '/auth.php';



// Google Auth routes
Route::get('auth/google', [UserController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback']);
