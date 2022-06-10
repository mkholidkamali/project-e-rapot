
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Kelas - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('kelas.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="mt-2 px-2">
                <div class="mb-2">
                    <label for="mata-pelajaran" class="form-label">Mata Pelajaran</label>
                    <input type="text" name="mata-pelajaran" id="mata-pelajaran" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                        <option value="x">X</option>
                        <option value="x">XI</option>
                        <option value="x">XI</option>
                    </select>
                </div>
                <button class="btn btn-dark mt-2">Tambah Kelas</button>
            </form>
        </div>
    </div>

@endsection