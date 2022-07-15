
@extends('layouts.dashboard.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Guru</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <a class="btn btn-success" href="{{ route('guru.create') }}">Tambah Guru</a>

    <div class="card mt-2">
        <div class="card-body">
            <h5>Data Guru</h5>
            <div class="justify-content=end col-md-3 ms-auto">
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-hover table-striped">
                    <thead class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                        <tr>
                            <td>#</td>
                            <td>No Induk</td>
                            <td>Nama Guru</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)" @error('no_induk') is-invalid @enderror>
                        @forelse ($gurus as $guru)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $guru->no_induk }}</td>
                            <td>{{ $guru->name }}</td>
                            <td>{{ $guru->jenis_kelamin="l" ? 'Laki-laki' : 'Perempuan' }}</td>
                            <td>
                                <img src="{{ 'storage/' . $guru->foto }}" width="50vh">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('guru.show', $guru->id) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning" href="{{ route('guru.edit', $guru->id) }}"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('guru.destroy', $guru->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data guru?')"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center"><b>Data tidak ada</b></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection