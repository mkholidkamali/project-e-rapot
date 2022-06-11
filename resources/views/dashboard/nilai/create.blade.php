
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Nilai - Create</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('nilai.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="">
                <div class="mb-2">
                    <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                    <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran">
                </div>
                <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas">
                </div>
                <button class="btn btn-success mt-2" type="submit">Tambah Nilai</button>
            </form>
        </div>
    </div>

@endsection