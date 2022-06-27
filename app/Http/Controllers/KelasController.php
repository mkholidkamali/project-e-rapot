<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        $kelas = Kelas::all();
        return view('dashboard.kelas.index', [
            'gurus' => $gurus,
            'kelas' => $kelas,
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
        $data = $request->validate([
            "kelas" => ['required'],
            'guru_id' => ['required', 'unique:kelas'],
            'jurusan' => ['required'],
        ]);
        $data['kelas'] = $data['kelas'] . " " . $request->input('nama-kelas');
        Kelas::create($data);
        return back()->with('success', 'Berhasil membuat kelas');
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
        $gurus = Guru::all();
        $kelas = Kelas::find($id);
        return view('dashboard.kelas.edit', [
            'gurus' => $gurus,
            'kelas' => $kelas,
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
            "kelas" => ['required'],
            'guru_id' => ['required'],
            'jurusan' => ['required'],
        ]);
        $data['kelas'] = $data['kelas'] . " " . $request->input('nama-kelas');
        Kelas::where('id', $id)->update($data);
        return redirect(route('kelas.index'))->with('success', 'Berhasil mengedit kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::destroy($id);
        return back()->with('success', 'Berhasil menghapus data');
    }
}
