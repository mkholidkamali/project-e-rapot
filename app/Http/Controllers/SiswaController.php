<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Rapot;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::orderBy('kelas_id')->orderBy('nama')->get();
        return view('dashboard.siswa.index', [
            'siswa' => $siswa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('dashboard.siswa.create', [
            'kelas' => $kelas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'absen' => ['required', 'integer'],
            'nis' => ['required', 'integer', 'unique:siswas'],
            'nisn' => ['required', 'integer', 'unique:siswas'],
            'nama' => ['required'],
            'kelas_id' => ['required'],
            'jenis_kelamin' => ['required'],
            'agama' => ['required'],
            'tahun_ajaran' => ['required'],
            'foto' => ['required', 'mimes:jpeg, jpg']
        ]);
        $data['foto'] = $request->file('foto')->storeAs('profile/siswa', $data['nis'] . '.jpg');
        Siswa::create($data);

        // RAPOT
        $siswas = Siswa::where('nis', $data['nis'])->get()->toArray();
        $siswa = $siswas[0];
        Rapot::create([
            'nis' => $siswa['nis'],
            'semester_id' => 1,
        ]);
        Rapot::create([
            'nis' => $siswa['nis'],
            'semester_id' => 2,
        ]);

        // Rapot id
        $rapotGanjil = Rapot::where([
            [ 'nis', $siswa['nis'] ],
            [ 'semester_id', '1' ],
        ])->get()->toArray();
        $rapotGenap = Rapot::where([
            [ 'nis', $siswa['nis'] ],
            [ 'semester_id', '2' ],
        ])->get()->toArray();
        $rapotGanjil = $rapotGanjil[0];
        $rapotGenap = $rapotGenap[0];

        // Kelas id
        $kelass = Kelas::find($siswa['kelas_id'])->get()->toArray();
        $kelas = $kelass[0];
        $kelasArray = explode(' ', trim($kelas['kelas']));

        // Mapel
        $mapels = Mapel::where([
                ['jurusan', $kelas['jurusan']],
            ['kelas', $kelasArray[0]],
        ])->get();

        // NILAI
        // Ganjil
        foreach ($mapels as $mapel) {
            Nilai::create([
                'mapel_id' => $mapel['id'],
                'siswa_id' => $siswa['id'],
                'rapot_id' => $rapotGanjil['id'],
                'semester_id' => 1,
            ]);
        }
        // Genap
        foreach ($mapels as $mapel) {
            Nilai::create([
                'mapel_id' => $mapel['id'],
                'siswa_id' => $siswa['id'],
                'rapot_id' => $rapotGenap['id'],
                'semester_id' => 2,
            ]);
        }

        return redirect(route('siswa.index'))->with('success', 'Berhasil menambah siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('dashboard.siswa.show', [
            'siswa' => $siswa
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
        $kelas = Kelas::all();
        $siswa = Siswa::find($id);
        return view('dashboard.siswa.edit', [
            'kelas' => $kelas,
            'siswa' => $siswa
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
            'absen' => ['required', 'integer'],
            'nis' => ['required', 'integer'], // 'unique:siswas'
            'nisn' => ['required', 'integer'], // 'unique:siswas'
            'nama' => ['required'],
            'kelas_id' => ['required'],
            'jenis_kelamin' => ['required'],
            'agama' => ['required'],
            'foto' => ['required', 'mimes:jpeg, jpg']
        ]);
        Storage::disk('public')->delete($data['nis'] . '.jpg');
        $data['foto'] = $request->file('foto')->storeAs('profile/siswa', $data['nis'] . '.jpg');
        Siswa::where('id', $id)->update($data);

        return redirect(route('siswa.index'))->with('success', 'Berhasil mengubah siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get Data
        $nilais = Nilai::where('siswa_id', $id)->get();
        $foto = Nilai::where('siswa_id', $id)->first();

        // Delete Image
        Storage::disk('public')->delete($foto->siswa->foto);

        // Delete Nilai & Rapot
        foreach ($nilais as $nilai) {
            Rapot::destroy($nilai->rapot_id);
            Nilai::destroy($nilai->id);
        }
        Siswa::destroy($id);
        
        return back()->with('success', 'Berhasil menghapus data siswa');
    }
}
