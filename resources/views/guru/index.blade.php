
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
@endsection