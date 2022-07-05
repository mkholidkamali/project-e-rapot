
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Guru - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('guru.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="{{ route('guru.update', $guru->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="no_induk" class="form-label">No Induk</label>
                    <input type="number" class="form-control @error('no_induk') is-invalid @enderror" name="no_induk" id="no_induk" value="{{ $guru->no_induk, old('no_induk') }}">
                    @error('no_induk')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="name" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $guru->name, old('name') }}">
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
                </div>
                <button class="btn btn-warning mt-2">Edit Guru</button>
            </form>
        </div>
    </div>

@endsection