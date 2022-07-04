
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Guru - Create</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('guru.index') }}">Back</a>

    

    <div class="card col-md-6">
        <div class="card-body">
<<<<<<< HEAD
            <form action="/guru/store" method="post" >
            {{ csrf_field() }}
                <div class="mb-2">
                    <label for="no_induk" class="form-label">No Induk Guru </label>
                    <input type="text" class="form-control" name="no_induk" id="no_induk">
                </div>
                <div class="mb-2">
                    <label for="nama_guru" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" name="nama_guru" id="nama">
=======
            <form action="{{ route('guru.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="no_induk" class="form-label">No Induk</label>
                    <input type="number" class="form-control @error('no_induk') is-invalid @enderror" name="no_induk" id="no_induk">
                    @error('no_induk')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="name" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto">
                    @error('foto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
>>>>>>> e976e12bb39b1f0bbbc8a38c16379ce537bce892
                </div>
               
                <button class="btn btn-success mt-2">Tambah Guru</button>
            </form>
        </div>
    </div>

    @endsection