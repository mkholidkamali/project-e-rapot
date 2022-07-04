<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $guru =  DB::table('guru')->get();
        	return view('dashboard.guru.index',['guru' => $guru]);
=======
        $gurus = Guru::all();
        return view('dashboard.guru.index', [
            'gurus' => $gurus
        ]);
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892
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
<<<<<<< HEAD
        DB::table('guru')->insert([
            'no_induk' => $request->no_induk,
            'nama_guru' => $request->nama_guru
           
        ]);

        return redirect('/guru');
=======
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
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {
        $guru =  DB::table('guru')->where('id',$id)->get();
        	return view('dashboard.guru.show',['guru' => $guru]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
	$guru = DB::table('guru')->where('id',$id)->get();
	    return view('dashboard.guru.edit',['guru' => $guru]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,)
    {
      
        DB::table('guru')->where('id',$request->id)->update([
           
            'no_induk' => $request->no_induk,
            'nama_guru' => $request->nama_guru
            
        ]);
        
        return redirect('/guru');
        
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
