<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Rapot;
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

        $mapels = [];
        $kelas = [];
        $semester = [];
        if ($guru) {
            // MAPEL
            $mapels = Mapel::where('guru_id', $guru->id)->get();
            // KELAS
            $kelasData = Kelas::where('guru_id', $guru->id)->first();
            $kelasKata = explode(" ", $kelasData->kelas);
            $kelas = Kelas::where([
                ['kelas', 'like', "$kelasKata[0] Tel%"],
                ['jurusan', $kelasData->jurusan]
            ])->get();
            // SEMESTER
            $semester = Semester::all();
        }
        

        // Return Mapel Option
        if ($mapels) {
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
        $kelasData = Kelas::where('guru_id', $guru->id)->first();
        $kelasKata = explode(" ", $kelasData->kelas);
        $kelas = Kelas::where([
            ['kelas', 'like', "$kelasKata[0] Tel%"],
            ['jurusan', $kelasData->jurusan]
        ])->get();
        // SEMESTER
        $semester = Semester::all();

        return view('guru.mapel.index', [
            'mapels' => $mapels,
            'kelas' => $kelas,
            'semester' => $semester,
            'rapots' => $rapots ? $rapots : [],
            'selected' => $selected,
            'isGuruMapel' => true,
            'kelas_id' => $request->input('kelas_id'),
            'mapel_id' => $request->input('mapel_id'),
            'semester_id' => $request->input('semester_id'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kelas, $mapel, $semester)
    {
        // Get Siswa By Kelas
        $siswas = Siswa::where('kelas_id', $kelas)->orderBy('absen')->get();
        foreach ($siswas as $siswa) {
            $rapots[] = Nilai::where([
                ['mapel_id',  $mapel],
                ['semester_id', $semester],
                ['siswa_id', $siswa->id]
            ])->first();
        }
        // array_shift($rapots);

        // Selected Data
        $mapelData = Mapel::where('id', $mapel)->pluck('mapel');
        $kelasData = Kelas::where('id', $kelas)->pluck('kelas');
        $semester = Semester::where('id', $semester)->pluck('semester');
        $selected = $mapelData[0] . ' - ' . $kelasData[0] . " - " . ucfirst($semester[0]);
        
        return view('guru.mapel.edit', [
            'rapots' => $rapots ? $rapots : [],
            'selected' => $selected
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

        // Predikat
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

        // Get ID Rapot from ID Nilai
        $dataRapot = Nilai::where('id', $id)->first();
        // Select All nilai by ID Rapot
        $rapots = Nilai::where([
            ['siswa_id', $dataRapot->siswa_id],
            ['rapot_id', $dataRapot->rapot_id]
        ])->get();

        // Count Average
        foreach ($rapots as $rapot) {
            $nilaiPengetahuan[] = $rapot->pengetahuan;
            $nilaiKetrampilan[] = $rapot->ketrampilan;
            $nilaiAkhir[] = $rapot->nilai_akhir;
        }
        // Pengetahuan
        $hasilPengetahuan = 0;
        foreach ($nilaiPengetahuan as $pengetahuan) {
            $hasilPengetahuan += $pengetahuan;
        }
        $rataPengetahuan = round($hasilPengetahuan / count($nilaiPengetahuan));
        // Ketrampilan
        $hasilKetrampilan = 0;
        foreach ($nilaiKetrampilan as $ketrampilan) {
            $hasilKetrampilan += $ketrampilan;
        }
        $rataKetrampilan = round($hasilKetrampilan / count($nilaiKetrampilan));

        // Nilai Akhir + Min Max
        $hasilAkhir = 0;
        $nilai_mapel_tertinggi = 0;
        $nilai_mapel_terendah = 100;
        foreach ($nilaiAkhir as $akhir) {
            $hasilAkhir += $akhir;
            // Get Min Max
            if ($akhir > $nilai_mapel_tertinggi) {
                $nilai_mapel_tertinggi = $akhir;
            }
            if ($akhir <= $nilai_mapel_terendah) {
                $nilai_mapel_terendah = $akhir;
            }
        }
        $rataAkhir = round($hasilAkhir / count($nilaiAkhir));

        // Get Mapel Min
        $min = Nilai::where([
            ['siswa_id', $dataRapot->siswa_id],
            ['nilai_akhir', $nilai_mapel_terendah]
        ])->first();
        $mapel_terendah = Mapel::where('id', $min->mapel_id)->pluck('mapel')->first();
        // Get Mapel Max
        $max = Nilai::where([
            ['siswa_id', $dataRapot->siswa_id],
            ['nilai_akhir', $nilai_mapel_tertinggi]
        ])->first();
        $mapel_tertinggi = Mapel::where('id', $max->mapel_id)->pluck('mapel')->first();

        // Create Catatan Akademik
        $catatan = "Selamat kepada Ananda " . $dataRapot->siswa->nama . " mendapatkan skor kompetensi pengetahuan dan ketrampilan tertinggi dengan nilai akhir " . $nilai_mapel_tertinggi . " pada mata pelajaran " . $mapel_tertinggi . ". Tingkatkan terus kompetensi pengetahuan dari ketrampilan Ananda pada mata pelajaran tersebut. Tidak lupa pula Ananda " . $dataRapot->siswa->nama . " perlu meningkatkan kompetensi pengetahuan dan ketrampilan mata pelajaran lain seperti " . $mapel_terendah . " yang jika diperhatikan memiliki skor yang sama atau terpaut kurang lebih beberapa point diatas atau dibawah SKM. Jadikan hal ini motivasi belajar Ananda " . $dataRapot->siswa->nama . " untuk meningkatkan prestasi Ananda di semester selanjutnya dengan menambah fokus ananda pada mata pelajar yang menurut ananda sulit.";

        // Predikat
        if ($rataAkhir >= 85 && $rataAkhir <= 100) {
            $predikat = "A";
        } else if ($rataAkhir >= 75 && $rataAkhir <= 84) {
            $predikat = "B";
        } else if ($rataAkhir >= 60 && $rataAkhir <= 74) {
            $predikat = "C";
        } else {
            $predikat = "D";
        }

        // Input Rapot
        $dataHasilRapot = [
            'rata_pengetahuan' => $rataPengetahuan,
            'rata_ketrampilan' => $rataKetrampilan,
            'rata_nilai_akhir' => $rataAkhir,
            'rata_predikat' => $predikat,
            'catatan_akademik' => $catatan,
            'nilai_mapel_terendah' => $nilai_mapel_terendah,
            'mapel_terendah' => $mapel_terendah,
            'nilai_mapel_tertinggi' => $nilai_mapel_tertinggi,
            'mapel_tertinggi' => $mapel_tertinggi,
        ];
        Rapot::where('id', $dataRapot->rapot_id)->update($dataHasilRapot);

        return back();
    }
}
