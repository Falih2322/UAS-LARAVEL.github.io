<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\UsersController;

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
    return view('welcome');
});

Route::resource('anggota', AnggotaController::class);
Route::resource('buku', BukuController::class);
Route::resource('peminjam', PeminjamController::class);
Route::get('/login', [UsersController::class, 'index'])->name('login');
Route::post('/login', [UsersController::class, 'login'])->name('users.login');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');
Route::get('/register', [UsersController::class, 'registerIndex'])->name('register');
Route::post('/register', [UsersController::class, 'register'])->name('users.register');
