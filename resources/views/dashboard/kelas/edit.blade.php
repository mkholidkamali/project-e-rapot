
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Kelas - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('kelas.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="mt-2 px-2">
                <div class="mb-2">
                    <label for="kelas" class="form-label">Nama Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                        <option value="x">X Tel 1</option>
                        <option value="x">X Tel 2</option>
                        <option value="x">X Tel 3</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="wali-kelas" class="form-label">Wali Kelas</label>
                    <select class="form-select" aria-label="Default select example" name="wali-kelas" id="kelas">
                        <option value="">Anthoni</option>
                        <option value="">Brodi</option>
                        <option value="">Cahyano</option>
                    </select>
                </div>
                <button class="btn btn-warning mt-2">Edit Kelas</button>
            </form>
        </div>
    </div>

@endsection