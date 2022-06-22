
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Kelas - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('kelas.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="{{ route('mapel.update', $mapel->id) }}" method="post" class="mt-2 px-2">
                @csrf
                @method('PUT')
                <div class="mb-2">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <input type="text" name="mapel" id="mapel" class="form-control @error('mapel') is-invalid @enderror" value="{{ $mapel->mapel, old('mapel') }}" autofocus>
                    @error('mapel')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas - </label> <small>Sebelumnya kelas {{ strtoupper($mapel->kelas) }}</small>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                        <option value="x">X</option>
                        <option value="xi">XI</option>
                        <option value="xii">XII</option>
                    </select>
                </div>
                <button class="btn btn-warning mt-2">Edit Kelas</button>
            </form>
        </div>
    </div>

@endsection