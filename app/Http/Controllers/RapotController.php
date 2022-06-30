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
        return view('dashboard.rapot.index', [
            'kelas' => $kelas,
            'semester' => $semester
        ]);
    }

    public function select(Request $request)
    {
        // Get Semester
        $semester = Nilai::where('semester_id', $request->input('semester_id'))->first();

        // Get Siswa By Kelas
        $siswas = Siswa::where('kelas_id', $request->input('kelas_id'))->get();
        foreach ($siswas as $siswa) {
            $rapots[] = Rapot::where([
                ['semester_id', $semester->id],
                ['siswa']
            ]);
        }
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
