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
});

require __DIR__ . '/auth.php';



Route::get('sidebar', function () {
    return view('dashboard.sidebar');
});


Route::get('header', function () {
    return view('dashboard.header');
});
