<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
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
Route::post('/guru/store',[GuruController::class, 'store'])->name('guru.store');
Route::get('/guru/{id}/show', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::post('/guru/update',[GuruController::class, 'update'])->name('guru.update');


// SISWA
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

// KELAS
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');

// MAPEL
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel.index');
Route::get('/mapel/{id}/edit', [MapelController::class, 'edit'])->name('mapel.edit');

// NILAI
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::get('/nilai/{id}/show', [NilaiController::class, 'show'])->name('nilai.show');
Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');