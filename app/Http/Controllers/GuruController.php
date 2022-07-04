<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

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
        $accountGuru = [
            'name' => $dataGuru['name'],
            'email' => $dataGuru['no_induk'] . "@telkom.com",
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
        return view('dashboard.guru.edit');
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
