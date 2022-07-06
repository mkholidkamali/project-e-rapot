<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Semester;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Get No_induk from Email - User
        $pattern = "[\d+]";
        $string = Auth::user()->email;
        preg_match($pattern, $string, $noInduk) ;

        // Get Id from Guru where no_induk - Guru
        $guru = Guru::where('no_induk', $noInduk)->first();

        // Get Kelas from Guru_id - Kelas
        $kelas = Kelas::where('guru_id', $guru->id)->get();
        
        // Return if Walas
        if (!$kelas->isEmpty()) {
            $semester = Semester::all();
            return view('guru.siswa.index', [
                'kelas' => $kelas,
                'semester' => $semester,
                'rapots' => [],
                'selected' => '',
                'isWalas' => true,
            ]);
        }

        // Return if not walas
        return view('dashboard.rapot.index', [
            'kelas' => [],
            'semester' => [],
            'rapots' => [],
            'selected' => '',
            'isWalas' => false,
        ]);
    }

    public function select(Request $request)
    {
        // Get Siswa By Kelas
        $siswas = Siswa::where('kelas_id', $request->input('kelas_id'))->orderBy('absen')->get();
        foreach ($siswas as $siswa) {
            $rapots[] = Nilai::where([
                ['semester_id', $request->input('semester_id')],
                ['siswa_id', $siswa->id]
            ])->first();
        }
        array_shift($rapots);

        // Selected Data
        $kelasData = Kelas::where('id', $request->input('kelas_id'))->pluck('kelas');
        $semester = Semester::where('id', $request->input('semester_id'))->pluck('semester');
        $selected = $kelasData[0] . " - " . ucfirst($semester[0]);
        
        // Get No_induk from Email
        $pattern = "[\d+]";
        $string = Auth::user()->email;
        preg_match($pattern, $string, $noInduk) ;
        // Get Id from Guru where no_induk
        $guru = Guru::where('no_induk', $noInduk)->first();
        // Get Kelas from Guru_id
        $kelas = Kelas::where('guru_id', $guru->id)->get();

        $semester = Semester::all();
        return view('guru.siswa.index', [
            'kelas' => $kelas,
            'semester' => $semester,
            'rapots' => $rapots ? $rapots : [],
            'selected' => $selected,
            'isWalas' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
