<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\UserController;

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

// Halaman Admin
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);

// Halaman Admin 
Route::prefix('admin')->middleware('auth')->group(function(){
Route::post('produk/filter', [ProdukController::class, 'filter']);
Route::resource('produk', ProdukController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);

});


// Halaman Client
Route::get('/', [ClientProdukController::class, 'index']);
Route::post('/filter', [ClientProdukController::class, 'filter']);
Route::get('keranjang/{produk}', [ClientProdukController::class, 'create']);
Route::post('keranjang', [ClientProdukController::class, 'store']);
Route::get('detail/{produk}', [ClientProdukController::class, 'show']);
Route::get('checkout', [ClientProdukController::class, 'checkout']);
Route::get('checkout/ubah/{produk}', [ClientProdukController::class, 'edit']);
Route::put('checkout/{produk}', [ClientProdukController::class, 'update']);
Route::delete('checkout/{produk}', [ClientProdukController::class, 'destroy']);


// Login section
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'prosesLogin']);
Route::get('logout', [AuthController::class, 'logout']);