<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Semester;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GrMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Guru
        $pattern = "[\d+]";
        $string = Auth::user()->email;
        preg_match($pattern, $string, $noInduk) ;
        $guru = Guru::where('no_induk', $noInduk)->first();

        // MAPEL
        $mapels = Mapel::where('guru_id', $guru->id)->get();

        // KELAS
        $kelas = Kelas::where('guru_id', $guru->id)->get();

        // SEMESTER
        $semester = Semester::all();

        // Return Mapel Option
        if (!$mapels->isEmpty()) {
            return view('guru.mapel.index', [
                'mapels' => $mapels,
                'kelas' => $kelas,
                'semester' => $semester,
                'rapots' => [],
                'selected' => '',
                'isGuruMapel' => true,
            ]);
        }

        // Return Nothing
        return view('guru.mapel.index', [
            'mapels' => [],
            'kelas' => [],
            'semester' => [],
            'rapots' => [],
            'selected' => '',
            'isGuruMapel' => false,
        ]);
    }

    public function select(Request $request)
    {
        // Get Siswa By Kelas
        $siswas = Siswa::where('kelas_id', $request->input('kelas_id'))->orderBy('absen')->get();
        foreach ($siswas as $siswa) {
            $rapots[] = Nilai::where([
                ['mapel_id',  $request->input('mapel_id')],
                ['semester_id', $request->input('semester_id')],
                ['siswa_id', $siswa->id]
            ])->first();
        }
        array_shift($rapots);

        // Selected Data
        $mapelData = Mapel::where('id', $request->input('mapel_id'))->pluck('mapel');
        $kelasData = Kelas::where('id', $request->input('kelas_id'))->pluck('kelas');
        $semester = Semester::where('id', $request->input('semester_id'))->pluck('semester');
        $selected = $mapelData[0] . ' - ' . $kelasData[0] . " - " . ucfirst($semester[0]);
        
        // GURU
        $pattern = "[\d+]";
        $string = Auth::user()->email;
        preg_match($pattern, $string, $noInduk) ;
        $guru = Guru::where('no_induk', $noInduk)->first();
        // MAPEL
        $mapels = Mapel::where('guru_id', $guru->id)->get();
        // KELAS
        $kelas = Kelas::where('guru_id', $guru->id)->get();
        // SEMESTER
        $semester = Semester::all();

        return view('guru.mapel.index', [
            'mapels' => $mapels,
            'kelas' => $kelas,
            'semester' => $semester,
            'rapots' => $rapots ? $rapots : [],
            'selected' => $selected,
            'isGuruMapel' => true,
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
