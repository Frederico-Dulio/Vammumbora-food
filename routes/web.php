<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('login');

Route::prefix('admin')->group(function () {
    Route::post('/owner/login', [AdminController::class, 'login_submit'])->name('userlogin');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('Dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'admin_logout'])->name('admin.logout')->middleware('admin');
    Route::post('/register', [AdminController::class, 'store'])->name('admin_register');
});


//Rotas para o cliente
// Route::prefix('client')->group(function () {
//     Route::post('/login/owner', [ClienteController::class, 'login_client'])->name('userlientlogin');
//     Route::get('/index', [ClienteController::class, 'index'])->name('clientdashboard')->middleware('cliente');
//     Route::get('/logout', [ClienteController::class, 'client_logout'])->name('client.logout')->middleware('cliente');
//     Route::post('/registrar', [ClienteController::class, 'store'])->name('client_register');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
