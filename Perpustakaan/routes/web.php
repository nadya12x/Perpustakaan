<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Buku;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Pinjaman;
use App\Http\Controllers\Pengembalian;
use App\Http\Controllers\Rak;
use App\Http\Controllers\Users;
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

Route::get('/Login', [Login::class, 'index']);
Route::get('/Login/Register', [Login::class, 'Register']);

Route::get('/Dashboard', [Dashboard::class, 'index']);

Route::get('/Buku', [Buku::class, 'index']);
Route::get('/Buku/Tambah', [Buku::class, 'Tambah']);
Route::post('/Buku/Insert', [Buku::class, 'Insert']);
Route::get('/Buku/Edit', [Buku::class, 'Edit']);


Route::get('/Kategori', [Kategori::class, 'index']);
Route::get('/Kategori/Tambah', [Kategori::class, 'Tambah']);
Route::post('/Kategori/Insert', [Kategori::class, 'Insert']);
Route::get('/Kategori/Edit', [Kategori::class, 'Edit']);

Route::get('/Rak', [Rak::class, 'index']);
Route::get('/Rak/Tambah', [Rak::class, 'Tambah']);
Route::post('/Rak/Insert', [Rak::class, 'Insert']);
Route::get('/Rak/Edit', [Rak::class, 'Edit']);

Route::get('/Pinjaman', [Pinjaman::class, 'index']);
Route::get('/Pinjaman/Tambah', [Pinjaman::class, 'Tambah']);
Route::post('/Pinjaman/Insert', [Pinjaman::class, 'Insert']);
Route::get('/Pinjaman/Edit', [Pinjaman::class, 'Edit']);

Route::get('/Pengembalian', [pengembalian::class, 'index']);
Route::get('/Pengembalian/Tambah', [Pengembalian::class, 'Tambah']);
Route::post('/Pengembalian/Insert', [Pengembalian::class, 'Insert']);
Route::get('/Pengembalian/Edit', [Pengembalian::class, 'Edit']);

Route::get('/Users', [Users::class, 'index']);