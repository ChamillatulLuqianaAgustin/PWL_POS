<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

//Jobsheet 7
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // Menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // Menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // Menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);          // Menampilkan halaman awal level
    Route::post('/list', [LevelController::class, 'list']);      // Menampilkan data level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);   // Menampilkan halaman form tambah level
    Route::post('/', [LevelController::class, 'store']);         // Menyimpan data level baru
    Route::get('/{id}', [LevelController::class, 'show']);       // Menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);  // Menampilkan halaman form edit level
    Route::put('/{id}', [LevelController::class, 'update']);     // Menyimpan perubahan data level
    Route::delete('/{id}', [LevelController::class, 'destroy']); // Menghapus data level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']);          // Menampilkan halaman awal kategori
    Route::post('/list', [KategoriController::class, 'list']);      // Menampilkan data kategori dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);   // Menampilkan halaman form tambah kategori
    Route::post('/', [KategoriController::class, 'store']);         // Menyimpan data kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']);       // Menampilkan detail kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);  // Menampilkan halaman form edit kategori
    Route::put('/{id}', [KategoriController::class, 'update']);     // Menyimpan perubahan data kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // Menghapus data kategori
});

// Route::get('/', function () {
//     return view('welcome');
// });

// //Praktikum 4 JS 3
// Route::get('/level', [LevelController::class, 'index']);

// //Praktikum 5 JS 3
// // Route::get('/kategori', [KategoriController::class, 'index']);

// //Praktikum 6 JS 3
// Route::get('/user', [UserController::class, 'index']);

// //Praktikum 2.6 JS 4
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::get('/user', [UserController::class, 'index'])->name('user.index'); //Kembali
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('user.hapus');

// //Praktikum 3 JS 5
// //Kategori
// Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

// //Create Kategori
// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
// Route::post('/kategori', [KategoriController::class, 'store']);

// //Edit Kategori
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('/kategori/edit');
// Route::put('/kategori/{id}', [KategoriController::class, 'edit_simpan'])->name('/kategori/edit_simpan');

// //Delete Kategori
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');

// //Manage User
// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
// Route::post('/user', [UserController::class, 'store']);
// Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('/user/edit');
// Route::put('/user/{id}', [UserController::class, 'edit_simpan'])->name('/user/edit_simpan');
// Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');

// //Manage Level
// Route::get('/level', [LevelController::class, 'index'])->name('level.index');
// Route::get('/level/create', [LevelController::class, 'create'])->name('/level/create');
// Route::post('/level', [LevelController::class, 'store']);
// Route::get('/level/edit/{id}', [LevelController::class, 'edit'])->name('/level/edit');
// Route::put('/level/{id}', [LevelController::class, 'edit_simpan'])->name('/level/edit_simpan');
// Route::get('/level/delete/{id}', [LevelController::class, 'delete'])->name('/level/delete');

// //POS
// Route::resource('m_user', POSController::class);