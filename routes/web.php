<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\RapotController;
use App\Http\Controllers\SiswaController;
use App\Models\Rapot;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// DASHBOARD
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

// GURU
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
<<<<<<< HEAD
Route::post('/guru/store',[GuruController::class, 'store'])->name('guru.store');
=======
Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892
Route::get('/guru/{id}/show', [GuruController::class, 'show'])->name('guru.show');
Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::post('/guru/update',[GuruController::class, 'update'])->name('guru.update');


// SISWA
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}/show', [SiswaController::class, 'show'])->name('siswa.show');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}/update', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}/delete', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// KELAS
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}/update', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}/delete', [KelasController::class, 'destroy'])->name('kelas.destroy');

// MAPEL
Route::get('/mapel', [MapelController::class, 'index'])->name('mapel.index');
Route::post('/mapel', [MapelController::class, 'store'])->name('mapel.store');
Route::get('/mapel/{id}/edit', [MapelController::class, 'edit'])->name('mapel.edit');
Route::put('/mapel/{id}/update', [MapelController::class, 'update'])->name('mapel.update');
Route::delete('/mapel/{id}/delete', [MapelController::class, 'destroy'])->name('mapel.destroy');

// NILAI
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::post('/nilai', [NilaiController::class, 'select'])->name('nilai.select');
Route::get('/nilai/{id}/show', [NilaiController::class, 'show'])->name('nilai.show');
Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::post('/nilai/{id}/update', [NilaiController::class, 'update'])->name('nilai.update');

// RAPOT
Route::get('/rapot', [RapotController::class, 'index'])->name('rapot.index');
Route::post('/rapot', [RapotController::class, 'select'])->name('rapot.select');
Route::get('/rapot/{id}/show', [RapotController::class, 'show'])->name('rapot.show');