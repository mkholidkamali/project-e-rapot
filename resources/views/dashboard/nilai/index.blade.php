
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Nilai</h1>
    <hr>

    <div class="card">
        <div class="card-body">

            <h5>Tentukan data :</h5>
            {{-- <small>Note* : Ini nanti mungkin di select dlu baru muncul datanya</small> --}}
            <div class="col-md-8">
                <form action="{{ route('nilai.select') }}" method="post" class="mt-2 px-2">
                    @csrf
                    <div class="d-flex">
                        <div class="mb-1 me-2">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select class="form-select" aria-label="Default select example" name="kelas_id" id="kelas_id">
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1 me-2">
                            <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                            <select name="mapel_id" id="mapel_id" class="form-select">
                                @foreach ($mapels as $mapel)
                                    <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1 me-2">
                            <label for="semester_id" class="form-label">Semester</label>
                            <select name="semester_id" id="semester_id" class="form-select">
                                @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ ucfirst($semester->semester) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-dark mt-2 px-4">Pilih</button>
                    <a href="{{ route('nilai.index') }}" class="btn btn-dark mt-2 px-4">Refresh</a>
                </form>
            </div>

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
                <table class="table table-bordered">
                    <thead>
                        <tr >
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>Pengetahuan</td>
                            <td>Ketrampilan</td>
                            <td colspan="2">Nilai akhir</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataNilai as $nilai)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $nilai->siswa->nama }}</td>
                                <td>{{ $nilai->pengetahuan }}</td>
                                <td>{{ $nilai->ketrampilan }}</td>
                                <td>{{ $nilai->nilai_akhir }}</td>
                                <td>{{ $nilai->predikat_nilai_akhir }}</td>
                                <td class="text-center">
                                    <a class="btn btn-primary" href="{{ route('nilai.show', 1) }}"><i class="bi bi-eye"></i></a>
                                    <a class="btn btn-warning" href="{{ route('nilai.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
                                    <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
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