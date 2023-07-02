<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\sumbangMakan;

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

Route::get('/', [AccountController::class, 'home']);

Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::post('/login', [AccountController::class, 'login'])->name('login');
Route::get('/home', [AccountController::class, 'home'])->name('home');
Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/signup', [AccountController::class, 'signup'])->name('signup');
Route::get('/submit', [AccountController::class, 'submit'])->name('submit');
Route::post('/submit', [AccountController::class, 'submit'])->name('submit');
Route::get('/sumbangMakan', [sumbangMakan::class, 'sumbangMakan'])->name('sumbangMakan');
Route::get('/mulaiBerbagi', [sumbangMakan::class, 'mulaiBerbagi'])->name('mulaiBerbagi');
Route::post('/mulaiBerbagi', [sumbangMakan::class, 'mulaiBerbagi'])->name('mulaiBerbagi');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
Route::get('/donasi', [sumbangMakan::class, 'donasi'])->name('donasi');
Route::post('/donasi', [AccountController::class, 'mulaiBerbagi'])->name('donasi');
// Route::post('/dashboard', [sumbangMakan::class, ''])->name('dashboard.produk');
Route::get('/dashboard', [sumbangMakan::class, ''])->name('dashboard.produk');
Route::get('/approve/{id}', [sumbangMakan::class, 'approve'])->name('approve');
// Route::get('/Dashboard', [sumbangMakan::class, 'submit'])
Route::post('/admin', [AccountController::class, 'admin'])->name('admin');
Route::get('/berbagi_tuban', [AccountController::class, 'berbagi_tuban'])->name('berbagi_tuban');
Route::get('/berbagi_gresik', [AccountController::class, 'berbagi_gresik'])->name('berbagi_gresik');
Route::get('/berbagi_surabaya', [AccountController::class, 'berbagi_surabaya'])->name('berbagi_surabaya');
Route::get('/detail_makanan/{id}', [AccountController::class, 'detail_makanan'])->name('detail_makanan');
Route::put('/detail_makanan/{id}/min', [AccountController::class, 'min_detail_makanan'])->name('min_makanan');
Route::put('/detail_makanan/{id}/plus', [AccountController::class, 'plus_detail_makanan'])->name('plus_makanan');
Route::get('/edit/{id}',[AccountController::class, 'edit'])->name('edit');
Route::put('/edit/{id}',[AccountController::class, 'edit'])->name('submit_edit');
Route::post('/kontak', [AccountController::class, 'kirim'])->name('kontak-post');
Route::get('/kontak', [AccountController::class, 'kontak'])->name('kontak');
Route::post('/kirim', [AccountController::class, 'kirim'])->name('kirim');

