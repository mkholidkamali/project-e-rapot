<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $guru = Guru::all()->count();
        $kelasX = Kelas::where('kelas', 'LIKE', 'X%')->count();
        $kelasXI = Kelas::where('kelas', 'LIKE', 'XI%')->count();
        $kelasXII = Kelas::where('kelas', 'LIKE', 'XII%')->count();
        $siswa = Siswa::all()->count();
        return view('index', [
            'guru' => $guru,
            'kelasX' => $kelasX,
            'kelasXI' => $kelasXI,
            'kelasXII' => $kelasXII,
            'siswa' => $siswa,
        ]);
    }
}
