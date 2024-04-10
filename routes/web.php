<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('navbar');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/login', [AuthManager::class, 'login'] )->name ('login');

Route::post('/login', [AuthManager::class, 'loginPost'] )->name ('login.post');

Route::get('/registration', [AuthManager::class, 'registration'] )->name ('registration');

Route::post('/registration', [AuthManager::class, 'registrationPost'] )->name ('registration.post');

Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});