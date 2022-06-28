<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Rapot;
use App\Models\Semester;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        $mapels = Mapel::all();
        $semesters = Semester::all();
        $dataNilai = [];
        $selected = '';
        return view('dashboard.nilai.index', [
            'kelas' => $kelas,
            'mapels' => $mapels,
            'semesters' => $semesters,
            'dataNilai' => $dataNilai,
            'selected' => ''
        ]);
    }

    public function select(Request $request)
    {
        // Get Mapel
        $mapels = Mapel::where('id', $request->input('mapel_id'))->get();
        $mapel = $mapels[0];
        
        // Get Semester
        $semesters = Semester::where('id', $request->input('semester_id'))->get();
        $semester = $semesters[0];
        
        // Get Siswa
        $siswas = Siswa::where('kelas_id', $request->input('kelas_id'))->get();
        foreach ($siswas as $siswa) {
            $nilais[] = Nilai::where([
                ['mapel_id', $mapel->id],
                ['semester_id', $semester->id],
                ['siswa_id', $siswa->id],
            ])->get();
        }
        array_shift($nilais);

        // Get Data Nilai
        $dataNilai = [];
        foreach ($nilais as $nilai ) {
            foreach ($nilai as $n) {
                $dataNilai[] = $n;
            }
        }

        // Get Nilai Selected
        $kelasArray = Kelas::where('id', $request->input('kelas_id'))->get()->toArray();
        $selected = $kelasArray[0]['kelas'] . " - $mapel->mapel - " .  ucfirst($semester->semester);

        $kelas = Kelas::all();
        $mapels = Mapel::all();
        $semesters = Semester::all();
        return view('dashboard.nilai.index', [
            'kelas' => $kelas,
            'mapels' => $mapels,
            'semesters' => $semesters,
            'dataNilai' => $nilais ? $dataNilai : [],
            'selected' => $selected,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.nilai.create');
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
        return view('dashboard.nilai.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('dashboard.nilai.edit', [
            'nilai' => $nilai
        ]);
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
        $data = $request->validate([
            'pengetahuan' => ['required', 'max:3'],
            'ketrampilan' => ['required', 'max:3']
        ]);
        $data['nilai_akhir'] = ($data['pengetahuan'] + $data['ketrampilan']) / 2;
        if ($data['nilai_akhir'] >= 85 && $data['nilai_akhir'] <= 100) {
            $data['predikat'] = 'A';
        } else if ($data['nilai_akhir'] >= 75 && $data['nilai_akhir'] <= 84) {
            $data['predikat'] = 'B';
        } else if ($data['nilai_akhir'] >= 60 && $data['nilai_akhir'] <= 74) {
            $data['predikat'] = 'C';
        } else {
            $data['predikat'] = 'D';
        }

        Nilai::where('id', $id)->update($data);

        return redirect(route('nilai.index'))->with('success', 'Berhasil mengubah nilai');
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
