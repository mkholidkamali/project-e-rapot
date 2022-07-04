
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Kelas - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('kelas.index') }}">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="{{ route('kelas.update', $kelas->id) }}" method="post" class="mt-2 px-2">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="d-flex">
                        <label for="kelas" class="form-label">Nama Kelas &nbsp;</label> 
                        <span class="text-muted">- Sebelumnya : {{ $kelas->kelas }}</span>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select" aria-label="Default select example" name="nama-kelas" id="nama-kelas">
                            <option value="Tel 1">Tel 1</option>
                            <option value="Tel 2">Tel 2</option>
                            <option value="Tel 3">Tel 3</option>
                            <option value="Tel 4">Tel 4</option>
                            <option value="Tel 5">Tel 5</option>
                            <option value="Tel 6">Tel 6</option>
                            <option value="Tel 7">Tel 7</option>
                            <option value="Tel 8">Tel 8</option>
                            <option value="Tel 9">Tel 9</option>
                            <option value="Tel 10">Tel 10</option>
                            <option value="Tel 11">Tel 11</option>
                            <option value="Tel 12">Tel 12</option>
                            <option value="Tel 13">Tel 13</option>
                        </select>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="guru_id" class="form-label">Wali Kelas - </label>
                    <span class="text-muted">Sebelumnya : {{ $kelas->guru->name }}</span>
                    <select class="form-select @error('guru_id') is-invalid  @enderror" aria-label="Default select example" name="guru_id" id="guru_id">
                        @foreach ($gurus as $guru)
                            @if ($guru->id == $kelas->guru_id)
                            <option value="{{ $guru->id }}" selected>{{ $guru->name }}</option>
                            @else
                            <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('guru_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <span class="text-muted">Sebelumnya : {{ strtoupper($kelas->jurusan) }}</span>
                    <select class="form-select @error('jurusan') is-invalid @enderror" aria-label="Default select example" name="jurusan" id="jurusan">
                        <option value="tra">TRA</option>
                        <option value="tja">TJA</option>
                        <option value="tkj">TKJ</option>
                        <option value="rpl">RPL</option>
                    </select>
                </div>
                <button class="btn btn-warning mt-2">Edit Kelas</button>
            </form>
        </div>
    </div>

@endsection