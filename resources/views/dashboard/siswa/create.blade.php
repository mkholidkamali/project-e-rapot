
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Siswa - Create</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('siswa.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="post" class="" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="absen" class="form-label">No Absen</label>
                    <input type="number" class="form-control @error('absen') is-invalid @enderror" name="absen" id="absen" maxlength="2" value="{{ old('absen') }}">
                    @error('absen')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" maxlength="8" value="{{ old('nis') }}">
                    @error('nis')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" id="nisn" maxlength="10" value="{{ old('nisn') }}">
                    @error('nisn')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas_id" id="kelas_id">
                        @forelse ($kelas as $kls)
                            <option value="{{ $kls->id }}">{{ $kls->kelas }} - {{ strtoupper($kls->jurusan) }}</option>
                        @empty
                            <option value="">Kelas belum ada</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-2">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" aria-label="Default select example" name="agama" id="agama">
                        <option value="islam">Islam</option>
                        <option value="kapro">Kristen Protestan</option>
                        <option value="kakat">Kristen Katholik</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <button type="submit" class="btn btn-success mt-2">Tambah Siswa</button>
            </form>
        </div>
    </div>

@endsection