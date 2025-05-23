<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminDashboardController::class, 'index'])->name('admin_dashboard');
    Route::get('/profile',[AdminDashboardController::class, 'profile'])->name('admin_profile');
    Route::get('/login', [AdminAuthController::class, 'login'])->named('admin_login');
});