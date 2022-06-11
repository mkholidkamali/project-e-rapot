
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Nilai - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('nilai.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="">
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-2">
                    <label for="nilai_harian" class="form-label">Nilai Harian</label>
                    <input type="number" class="form-control" name="nilai_harian" id="nilai_harian">
                </div>
                <div class="mb-2">
                    <label for="uts" class="form-label">UTS</label>
                    <input type="number" class="form-control" name="uts" id="uts">
                </div>
                <div class="mb-2">
                    <label for="uas" class="form-label">UAS</label>
                    <input type="number" class="form-control" name="uas" id="uas">
                </div>
                <div class="mb-2">
                    <label for="predikat_pengetahuan" class="form-label">Predikat Pengetahuan</label>
                    <input type="text" class="form-control" name="predikat_pengetahuan" id="predikat_pengetahuan">
                </div>
                <div class="mb-2">
                    <label for="ketrampilan" class="form-label">Ketrampilan</label>
                    <input type="number" class="form-control" name="ketrampilan" id="ketrampilan">
                </div>
                <div class="mb-2">
                    <label for="predikat_ketrampilan" class="form-label">Predikat Ketrampilan</label>
                    <input type="text" class="form-control" name="predikat_ketrampilan" id="predikat_ketrampilan">
                </div>
                <button class="btn btn-warning mt-2" type="submit">Edit Nilai</button>
            </form>
        </div>
    </div>

@endsection