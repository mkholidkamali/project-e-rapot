
@extends('layouts.guru.main')

@section('main')
    <h1 class="mt-3">Dashboard</h1>
    <hr>

    <div class="row mt-3">
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
    </div>

    <div class="card mt-4" style="border: 2px solid gray">
        <div class="card-body">
            <h1 class="text-center">Guru Role</h1>
            <h5>A. Page Dashboard</h5>
            <p>
                = Halaman info, terkait banyaknya data<br>
            </p>
            <h5>B. Page Wali Kelas</h5>
            <p>
                = Halaman informasi, kelas yang di wali-kan<br>
                > 2 aksi : Read, Print PDF <br>
            </p>
            <h5>C. Page Mapel</h5>
            <p>
                = Halaman pengelola nilai, mata pelajaran yang di ajarkan<br>
                > 2 aksi : Read, Update <br>
            </p>
        </div>
    </div>

@endsection