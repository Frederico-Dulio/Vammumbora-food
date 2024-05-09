<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::prefix('client')->name('client.')->group(function () {
    Route::post('/login', [ClienteController::class, 'login_client'])->name('login');
    Route::get('/index', [ClienteController::class, 'index'])->name('dashboard')->middleware('cliente','prevent-back-history');
    Route::get('/logout', [ClienteController::class, 'client_logout'])->name('logout')->middleware('cliente', 'prevent-back-history');
    Route::post('/registrar', [ClienteController::class, 'store'])->name('register');
});
