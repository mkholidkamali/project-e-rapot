
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Siswa - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('siswa.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="">
                <div class="mb-2">
                    <label for="nis" class="form-label">NIS</label>
                    <input type="number" class="form-control" name="nis" id="nis">
                </div>
                <div class="mb-2">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="number" class="form-control" name="nisn" id="nisn">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-2">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                        <option value="">TRA</option>
                        <option value="">TJA</option>
                        <option value="">TKJ</option>
                        <option value="">RPL</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                        <option value="">X Tel 1</option>
                        <option value="">XI Tel 2</option>
                        <option value="">XII Tel 3</option>
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
                        <option value="">Islam</option>
                        <option value="">Hindu</option>
                        <option value="">Budha</option>
                        <option value="">Kristen</option>
                        <option value="">Kong Hu Cu</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <button class="btn btn-success mt-2">Tambah Guru</button>
            </form>
        </div>
    </div>

@endsection