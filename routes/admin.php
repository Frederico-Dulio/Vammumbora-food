<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::post('/login', [AdminController::class, 'login_submit'])->name('userlogin');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('Dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('logout')->middleware('admin');
    Route::post('/register', [AdminController::class, 'store'])->name('register');
});
