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
        // GURU
        // $pattern = "[\d+]";
        // preg_match($pattern, $string, $name) ;
        $string = Auth::user()->email;
        $name = explode('@', $string);
        $guru = Guru::where('name', $name[0])->first();

        $kelas = [];
        $semester = [];
        if ($guru) {
            // KELAS
            $kelas = Kelas::where('guru_id', $guru->id)->get();
            // SEMESTER
            $semester = Semester::all();
        }

        // Return if Walas
        if ($kelas->count()) {
            return view('guru.siswa.index', [
                'kelas' => $kelas,
                'semester' => $semester,
                'rapots' => [],
                'selected' => '',
                'isWalas' => true,
            ]);
        }

        // Return if not walas
        return view('guru.siswa.index', [
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
        $rapots = [];
        foreach ($siswas as $siswa) {
            $rapots[] = Nilai::where([
                ['semester_id', $request->input('semester_id')],
                ['siswa_id', $siswa->id]
            ])->first();
        }

        // Selected Data
        $kelasData = Kelas::where('id', $request->input('kelas_id'))->pluck('kelas');
        $semester = Semester::where('id', $request->input('semester_id'))->pluck('semester');
        $selected = $kelasData[0] . " - " . ucfirst($semester[0]);
        
        // Get Name from Email
        $string = Auth::user()->email;
        $name = explode('@', $string);
        $guru = Guru::where('name', $name[0])->first();
        
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
        // Get Siswa Data
        $nilaiData = Nilai::where('id', $id)->first();
        $siswa = Siswa::where('id', $nilaiData->siswa_id)->first();

        // Get Nilai Data
        $nilais = Nilai::where([
            ['siswa_id', $siswa->id],
            ['semester_id', $nilaiData->semester_id],
        ])->get();

        return view('guru.siswa.show', [
            'siswa' => $siswa,
            'nilaiData' => $nilaiData,
            'nilais' => $nilais,
        ]);
    }

}
