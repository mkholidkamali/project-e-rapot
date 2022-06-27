
@extends('layouts.dashboard.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Kelas</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kelas.store') }}" method="post" class="mt-2 px-2">
                        @csrf
                        <div class="row mb-2">
                            <label for="kelas" class="form-label">Nama Kelas</label>
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
                            <label for="guru_id" class="form-label">Wali Kelas</label>
                            <select class="form-select @error('guru_id') is-invalid  @enderror" aria-label="Default select example" name="guru_id" id="guru_id">
                                @foreach ($gurus as $guru)
                                    <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                                @endforeach
                            </select>
                            @error('guru_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select @error('jurusan') is-invalid @enderror" aria-label="Default select example" name="jurusan" id="jurusan">
                                <option value="tra">TRA</option>
                                <option value="tja">TJA</option>
                                <option value="tkj">TKJ</option>
                                <option value="rpl">RPL</option>
                            </select>
                        </div>
                        <button class="btn btn-dark mt-2">Tambah Kelas</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="justify-content=end col-md-3 ms-auto">
                        <form action="" method="POST">
                            <label for="search">Search</label>
                            <input type="text" name="search" class="form-control">
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Nama Kelas</td>
                                    <td>Jurusan</td>
                                    <td>Wali Kelas</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $kls)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kls->kelas }}</td>
                                    <td>{{ strtoupper($kls->jurusan) }}</td>
                                    <td>{{ $kls->guru->name }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{ route('kelas.edit', $kls->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('kelas.destroy', $kls->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus kelas?')"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection