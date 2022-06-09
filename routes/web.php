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
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/mapel', [MapelController::class, 'index']);
Route::get('/nilai', function() {
    return view('dashboard.nilai.index');
});