<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::prefix('client')->name('client.')->group(function () {
    Route::post('/login', [ClienteController::class, 'login_client'])->name('login');
    Route::get('/index', [ClienteController::class, 'index'])->name('dashboard');
    Route::get('/logout', [ClienteController::class, 'logout'])->name('logout');
    Route::post('/registrar', [ClienteController::class, 'store'])->name('register');
});
