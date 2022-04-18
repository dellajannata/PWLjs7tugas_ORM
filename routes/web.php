<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();  

Route::get('/', [HomeController::class, 'index']);

Route::get('/supplier', [SupplierController::class, 'supplier1']);

Route::get('/pegawai', [PegawaiController::class, 'pegawai1']);

Route::get('/barang', [BarangController::class, 'barang1']);

Route::get('/pelanggan', [PelangganController::class, 'pelanggan1']);

Route::resource('/mahasiswa', MahasiswaController::class);

Route::get('/search', [MahasiswaController::class, 'search1'])->name('search');

Route::get('/mahasiswa/nilai/{mahasiswa}', [MahasiswaController::class, 'mahasiswa_matakuliah1'])->name('nilai');

Route::resource('articles',ArticleController::class);

Route::get('/article/cetak_pdf',[ArticleController::class,'cetak_pdf']);

Route::get('/mahasiswa/cetakpdf/{mahasiswa}', [MahasiswaController::class, 'cetak_pdf'])->name('cetakpdf');