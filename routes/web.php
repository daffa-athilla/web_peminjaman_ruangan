<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeminjamanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/admin', AdminController::class);

Route::resource('/form', FormController::class);

Route::resource('/peminjaman', PeminjamanController::class);

Route::fallback(function() {
    return redirect()->intended('/home');
});


Route::get('/old_home', function() {
    return view('old_home', [
        'title' => 'Web Penjualan Kue',
        'header' => 'Web Penjualan Kue',
    ]);
})->name('old_home');