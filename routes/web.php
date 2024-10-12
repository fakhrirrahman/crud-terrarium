<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\PesanController;

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
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/detail', [HomeController::class, 'detail'])->name('detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/item', [HomeController::class, 'item'])->name('item');
Route::get('/foto', [HomeController::class, 'foto'])->name('foto');
Route::get('/panduan', [HomeController::class, 'panduan'])->name('panduan');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/detail_med', [HomeController::class, 'detail_med'])->name('detail_med');
Route::get('/detail_prem', [HomeController::class, 'detail_prem'])->name('detail_prem');
Route::get('/detail_stand', [HomeController::class, 'detail_stand'])->name('detail_stand');

Route::get('/galeri', [HomeController::class, 'galeri'])->name('dashboard.galeri');
Route::get('/beli', [HomeController::class, 'beli'])->name('dashboard.beli');
Route::post('/route1', [PesanController::class, 'store1'])->name('pesan.store1');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('auth');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/pesan', PesanController::class);

Route::resource('/buy', BuyController::class);

Route::middleware('auth')->group(function () {
Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
Route::get('/shop', [AdminController::class, 'shop'])->name('admin.shop');
Route::resource('/produk', ProdukController::class);
});

