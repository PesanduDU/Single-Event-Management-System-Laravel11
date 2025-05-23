<?php

use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'login'])->named('admin_login');
});