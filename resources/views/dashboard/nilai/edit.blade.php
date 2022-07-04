
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Nilai - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('nilai.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="{{ route('nilai.update', $nilai->id) }}" method="post">
                @csrf
                <div class="mb-2">
                    <label for="pengetahuan" class="form-label">Pengetahuan</label>
                    <input type="number" class="form-control @error('pengetahuan') is-invalid @enderror" name="pengetahuan" id="pengetahuan" value="{{ $nilai->pengetahuan, old('pengetahuan') }}">
                    @error('pengetahuan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="ketrampilan" class="form-label">Ketrampilan</label>
                    <input type="number" class="form-control @error('ketrampilan') is-invalid @enderror" name="ketrampilan" id="ketrampilan" value="{{ $nilai->ketrampilan, old('ketrampilan') }}">
                    @error('ketrampilan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-warning mt-2" type="submit">Edit Nilai</button>
            </form>
        </div>
    </div>

@endsection