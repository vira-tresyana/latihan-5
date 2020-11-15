<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\ProdukControllers;
use App\Http\Controllers\KategoriControllers;
use App\Http\Controllers\ClientProdukController;
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
    return view('client/index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/template', function () {
    return view('template.base');
});

Route::get('admin/beranda', [HomeControllers::class, 'showBeranda']);
Route::get('admin/login', [AuthControllers::class, 'showLogin']);

Route::get('admin/produk', [ProdukControllers::class, 'index']);
Route::get('admin/produk/create', [ProdukControllers::class, 'create']);
Route::post('admin/produk', [ProdukControllers::class, 'store']);
Route::get('admin/produk/{produk}', [ProdukControllers::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukControllers::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukControllers::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukControllers::class, 'destroy']);


Route::get('admin/kategori', [KategoriControllers::class, 'index']);
Route::get('admin/kategori/create', [KategoriControllers::class, 'create']);
Route::post('admin/kategori', [KategoriControllers::class, 'store']);
Route::get('admin/kategori/{kategori}', [KategoriControllers::class, 'show']);
Route::get('admin/kategori/{kategori}/edit', [KategoriControllers::class, 'edit']);
Route::put('admin/kategori/{kategori}', [KategoriControllers::class, 'update']);
Route::delete('admin/kategori/{kategori}', [KategoriControllers::class, 'destroy']);


Route::get('/', [ClientProdukController::class, 'index']);
Route::get('beli/{produk}', [ClientProdukController::class, 'create']);
Route::post('beli', [ClientProdukController::class, 'store']);
Route::get('keranjang', [ClientProdukController::class, 'show']);
Route::get('keranjang/{produk}/edit', [ClientProdukController::class, 'edit']);
Route::put('keranjang/{produk}', [ClientProdukController::class, 'update']);
Route::delete('keranjang/{produk}', [ClientProdukController::class, 'destroy']);

