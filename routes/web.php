<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
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

//Praktikum 4 JS 3
Route::get('/level', [LevelController::class, 'index']);

//Praktikum 5 JS 3
// Route::get('/kategori', [KategoriController::class, 'index']);

//Praktikum 6 JS 3
Route::get('/user', [UserController::class, 'index']);

//Praktikum 2.6 JS 4
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
Route::get('/user', [UserController::class, 'index'])->name('user.index'); //Kembali
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');

//Praktikum 3 JS 5
//Kategori
Route::get('/kategori', [KategoriController::class, 'index']);

//Create Kategori
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
Route::post('/kategori', [KategoriController::class, 'store']);
