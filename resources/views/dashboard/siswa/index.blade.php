
@extends('layouts.dashboard.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Siswa</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <a class="btn btn-success" href="{{ route('siswa.create') }}">Tambah Siswa</a>

    <div class="card mt-2">
        <div class="card-body">
            <h5>Data Siswa</h5>
            <div class="justify-content=end col-md-3 ms-auto">
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="table-responsive mt-4" >
                <table class="table table-hover table-striped" >
                    <thead>
                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                            <td>#</td>
                            <td>NIS</td>
                            <td>Nama Siswa</td>
                            <td>Jurusan</td>
                            <td>Kelas</td>
                            <td>Jenis Kelamin</td>
                            <td>Agama</td>
                            <td>NISN</td>
                            <td>Foto</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                        @foreach ($siswa as $sis)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $sis->nis }}</td>
                            <td>{{ $sis->nama }}</td>
                            <td>{{ strtoupper($sis->kelas->jurusan) }}</td>
                            <td>{{ $sis->kelas->kelas }}</td>
                            <td>{{ $sis->jenis_kelamin="l" ? "Laki-laki" : "Perempuan" }}</td>
                            <td>{{ strtoupper($sis->agama) }}</td>
                            <td>{{ $sis->nisn }}</td>
                            <td>
                                <img src="{{ 'storage/' . $sis->foto  }}" class="" width="50px">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('siswa.show', $sis->id) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning" href="{{ route('siswa.edit', $sis->id) }}"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('siswa.destroy', $sis->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data siswa ini?')"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection