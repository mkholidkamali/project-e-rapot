
@extends('layouts.guru.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Wali Kelas</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-end mb-3">
                <div class="d-flex align-items-center me-3">
                    {{-- <a class="btn btn-success" href="{{ route('nilai.create') }}">Tambah Nilai</a> --}}
                </div>
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="text-center">
                <b class="text-center ">{{ $selected }}</b>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>NIS</td>
                            <td>NISN</td>
                            <td class="text-center">Opsi</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                        @forelse ($rapots as $rapot)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rapot->siswa->nama }}</td>
                                <td>{{ $rapot->siswa->nis }}</td>
                                <td>{{ $rapot->siswa->nisn }}</td>
                                <td class="text-center">
                                    <a class="btn btn-success" href="{{ route('rapot.show', $rapot->id) }}" target="_blank"><i class="bi bi-file-earmark-medical"></i></a>
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