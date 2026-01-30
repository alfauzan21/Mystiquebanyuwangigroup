<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/destinations', [HomeController::class, 'destinations'])->name('destinations');
Route::get('/destinations-test', function () {
    return 'test';
});
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
