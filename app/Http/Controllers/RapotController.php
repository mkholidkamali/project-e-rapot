<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Rapot;
use App\Models\Semester;
use App\Models\Siswa;
use Illuminate\Http\Request;

class RapotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        $semester = Semester::all();
        $isNull = false;
        if ($kelas->isEmpty() || $semester->isEmpty()) {
            $isNull = true;
        }
        return view('dashboard.rapot.index', [
            'kelas' => $kelas,
            'semester' => $semester,
            'rapots' => [],
            'selected' => '',
            'isNull' => $isNull,
        ]);
    }

    public function select(Request $request)
    {
        // Get Siswa By Kelas
        $siswas = Siswa::where('kelas_id', $request->input('kelas_id'))->orderBy('nama')->get();
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
        
        $kelas = Kelas::all();
        $semester = Semester::all();
        $isNull = false;
        return view('dashboard.rapot.index', [
            'kelas' => $kelas,
            'semester' => $semester,
            'rapots' => $rapots ? $rapots : [],
            'selected' => $selected,
            'isNull' => $isNull,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

        return view('dashboard.rapot.show', [
            'siswa' => $siswa,
            'nilaiData' => $nilaiData,
            'nilais' => $nilais,
        ]);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
