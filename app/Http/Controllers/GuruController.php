<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();
        return view('dashboard.guru.index', [
            'gurus' => $gurus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Input
        $dataGuru = $request->validate([
            'no_induk' => ['required', 'unique:gurus'],
            'name' => ['required'],
            'jenis_kelamin' => ['required'],
            'foto' => ['required', 'mimes:jpg, jpeg']
        ]);

        // Create Guru
        $dataGuru['foto'] = $request->file('foto')->storeAs('profile/guru', $dataGuru['no_induk'] . ".jpg");
        Guru::create($dataGuru);

        // Create Guru Account
        $namaGuru = str_replace(' ', '', $dataGuru['name']);
        $accountGuru = [
            'name' => $dataGuru['name'],
            'email' => $dataGuru['name'] . "@smktelkom-jkt.sch.id",
            'password' => bcrypt($dataGuru['no_induk']),
            'is_admin' => false,
        ];
        User::create($accountGuru);

        return redirect(route('guru.index'))->with('success', 'Berhasil menambah Guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $guru = Guru::where('id', $id)->first();
        return view('dashboard.guru.show', [
            'guru' => $guru
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
        $guru = Guru::where('id', $id)->first();
        return view('dashboard.guru.edit', [
            'guru' => $guru
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
        // Validate Input
        $dataGuru = $request->validate([
            'no_induk' => ['required'],
            'name' => ['required'],
            'jenis_kelamin' => ['required'],
            'foto' => ['required', 'mimes:jpg, jpeg']
        ]);

        // Delete Old Image
        $guru = Guru::where('id', $id)->first();
        if (File::exists(public_path('storage/' . $guru->foto))) {
            File::delete(public_path('storage/' . $guru->foto));
        }

        // Update Guru
        $dataGuru['foto'] = $request->file('foto')->storeAs('profile/guru', $dataGuru['no_induk'] . ".jpg");
        Guru::where('id', $id)->update($dataGuru);

        // Update Guru Account
        $accountGuru = [
            'name' => $dataGuru['name'],
            'email' => $dataGuru['no_induk'] . "@telkom.com",
            'password' => bcrypt($dataGuru['no_induk']),
            'is_admin' => false,
        ];
        User::where('email', $guru->no_induk . '@telkom.com')->update($accountGuru);

        return redirect(route('guru.index'))->with('success', 'Berhasil mengubah Guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete Old Image
        $guru = Guru::where('id', $id)->first();
        if (File::exists(public_path('storage/' . $guru->foto))) {
            File::delete(public_path('storage/' . $guru->foto));
        }

        // Delete Account
        User::where('email', $guru->no_induk . '@telkom.com')->delete();

        // Delete Guru
        Guru::destroy($guru->id);

        return redirect(route('guru.index'))->with('success', 'Berhasil menghapus Guru');
    }
}
