
@extends('layouts.dashboard.main')

@section('main')
    <h1 class="mt-3">Dashboard</h1>
    <hr>

    <div class="row mt-3">

        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-primary">
                    <div class="text-white">
                        <h5>{{ $guru }}</h5>
                        Jumlah Guru
                    </div>
                    <div>
                        <i class="bi bi-person-lines-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-danger">
                    <div class="text-white">
                        <h5>{{ $kelasX }}</h5>
                        Jumlah Kelas X
                    </div>
                    <div>
                        <i class="bi bi-easel2-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-danger">
                    <div class="text-white">
                        <h5>{{ $kelasXI }}</h5>
                        Jumlah Kelas XI
                    </div>
                    <div>
                        <i class="bi bi-easel2-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-danger">
                    <div class="text-white">
                        <h5>{{ $kelasXII }}</h5>
                        Jumlah Kelas XII
                    </div>
                    <div>
                        <i class="bi bi-easel2-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-success">
                    <div class="text-white">
                        <h5>{{ $siswa }}</h5>
                        Jumlah Siswa
                    </div>
                    <div>
                        <i class="bi bi-people-fill fs-1"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between bg-secondary">
                    <div class="text-white">
                        <h5>1</h5>
                        Jumlah Admin
                    </div>
                    <div>
                        <i class="bi bi-person-circle fs-1"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-4" style="border: 2px solid gray">
        <div class="card-body">
            <h1 class="text-center">Admin Role</h1>
            <h5>A. Page Dashboard</h5>
            <p>
                = Halaman info, terkait banyaknya data<br>
            </p>
            <h5>B. Page Guru</h5>
            <p>
                = Halaman pengelola guru<br>
                > 4 aksi : Create, Read, Update, Delete <br>
                > Create : Ketika membuat data guru baru, maka akun Guru dapat digunakan. <br> 
                -> Format akun : username(no_induk@telkom.com) & password(no_induk)<br>
            </p>
            <h5>C. Page Siswa</h5>
            <p>
                = Halaman pengelola siswa<br>
                > 4 aksi : Create, Read, Update, Delete <br>
                !! Pastikan membuat semua : mapel & kelas terlebih dahulu, karena mapel pada rapot siswa tidak bisa ditambahkan / dikurangkan<br>
            </p>
            <h5>D. Page Kelas</h5>
            <p>
                = Halaman pengelola kelas<br>
                > 4 aksi : Create, Read, Update, Delete <br>
            </p>
            <h5>E. Page Matpel</h5>
            <p>
                = Halaman pengelola Mata Pelajaran<br>
                > 4 aksi : Create, Read, Update, Delete <br>
            </p>
            <h5>F. Page Nilai</h5>
            <p>
                = Halaman pengelola Nilai<br>
                > 2 aksi : Read, Update <br>
            </p>
            <h5>G. Page Rapot</h5>
            <p>
                = Halaman pengelola Rapot<br>
                > 2 aksi : Read, Print PDF<br>
            </p>
            <br>
            <h3><b>Note :</b></h3>
            <h5>1. Pastikan buat semua 'Mapel' terlebih dahulu, baru buat 'Siswa'. Karena mapel pada 'Rapot' tidak dapat dirubah</h5>
        </div>
    </div>

@endsection