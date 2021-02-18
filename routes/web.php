<?php

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

// Untuk menampilkan selamat datang
Route::get('/', function () {
    echo "Selamat Datang";
});

// Menampilkan data diri
Route::get('/about', function () {
    $tampil = "";
    $tampil .= "<p>NIM : 1941720168</p>";
    $tampil .= "<p>Nama : Oudessya Balqist Wibowo</p>";
    $tampil .= "<p>Kelas : TI-2A</p>";
    echo $tampil;
});

Route::get('articles/{id}', function ($id) {
    echo "Halaman artikel dengan id " . $id;
});
