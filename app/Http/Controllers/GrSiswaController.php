<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Semester;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GrSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Walas Logic

        // Get Siswa By Kelas
        // $siswas = Siswa::where('kelas_id', $request->input('kelas_id'))->orderBy('nama')->get();
        // foreach ($siswas as $siswa) {
        //     $rapots[] = Nilai::where([
        //         ['semester_id', $request->input('semester_id')],
        //         ['siswa_id', $siswa->id]
        //     ])->first();
        // }
        // array_shift($rapots);

        // Selected Data
        // $kelasData = Kelas::where('id', $request->input('kelas_id'))->pluck('kelas');
        // $semester = Semester::where('id', $request->input('semester_id'))->pluck('semester');
        // $selected = $kelasData[0] . " - " . ucfirst($semester[0]);
        
        $kelas = Kelas::all();
        $semester = Semester::all();
        return view('guru.siswa.index', [
            'kelas' => $kelas,
            'semester' => $semester,
            'rapots' => [],
            'selected' => 'Kelas'
            // 'rapots' => $rapots ? $rapots : [],
            // 'selected' => $selected
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
