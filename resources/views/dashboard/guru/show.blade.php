
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Guru - Show</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('guru.index') }}">Back</a>

    <div class="card col-md-10 mx-auto">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('storage/' . $guru->foto) }}" class="w-100">
                </div>
                <div class="col-md-7 d-flex align-items-center">
                    <table class="fs-3 ">
                        <tr>
                            <td>No Induk</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $guru->no_induk }}</td>
                        </tr>
                        <tr>
                            <td>Nama Guru</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $guru->name }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>&nbsp; : &nbsp;</td>
                            <td>{{ $guru->jenis_kelamin="l" ? 'Laki-laki' : 'perempuan' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection