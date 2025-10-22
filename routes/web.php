<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form-produk', function () {
return view('form-produk');
});

use Illuminate\Http\Request;

Route::post('/simpan-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $stok = $request->input('stok');

    return "Produk <b>$nama</b> dengan harga Rp$harga dan stok $stok telah disimpan!";
});


Route::get('/form-produk', function () {
    return view('form-produk');
});

Route::post('/simpan-produk', function (Request $request) {
    $nama = $request->input('nama');
    $harga = $request->input('harga');
    $stok = $request->input('stok');
    $kategori = $request->input('kategori');
    $deskripsi = $request->input('deskripsi');

    return view('hasil-produk', compact('nama', 'harga', 'stok', 'kategori', 'deskripsi'));
});
Route::get('/produk/edit', function () {
return view('edit-produk');
});
Route::put('/produk/update', function (Request $request) {
    $namaBaru = $request->input('nama');
    $hargaBaru = $request->input('harga');
    $kategoriBaru = $request->input('kategori');

    return view('hasil-update', compact('namaBaru', 'hargaBaru', 'kategoriBaru'));
});

Route::get('/produk/edit-harga', function () {
    return view('edit-harga');
});
Route::patch('/produk/update-harga', function (Request $request) {
    $hargaBaru = $request->input('harga');
    return view('hasil-update-harga', compact('hargaBaru'));
});