<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});

// GURU
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::get('/guru/{id}/show', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');

// SISWA
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

// KELAS
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');

Route::get('/mapel', [MapelController::class, 'index'])->name('mapel.index');
Route::get('/nilai', function() {
    return view('dashboard.nilai.index');
});