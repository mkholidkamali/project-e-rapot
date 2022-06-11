
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Nilai</h1>
    <hr>

    <div class="card">
        <div class="card-body">

            <h5>Data Nilai</h5>
            <small>Note* : Ini nanti mungkin di select dlu baru muncul datanya</small>
            <div class="col-md-3">
                <form action="" method="post" class="mt-2 px-2">
                    <div class="mb-2">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                            <option value="x">X Tel 1</option>
                            <option value="x">XI Tel 2</option>
                            <option value="x">XII Tel 3</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="mata-pelajaran" class="form-label">Mata Pelajaran</label>
                        <select name="mata-pelajaran" id="mata-pelajaran" class="form-select">
                            <option value="x">MTK</option>
                            <option value="x">Bahasa Indonesia</option>
                            <option value="x">Pemrograman Web</option>
                        </select>
                    </div>
                    <button class="btn btn-dark mt-2 px-4">Pilih</button>
                </form>
            </div>

            <div class="d-flex justify-content-end">
                <div class="d-flex align-items-center me-3">
                    <a class="btn btn-success" href="{{ route('nilai.create') }}">Tambah Nilai</a>
                </div>
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr >
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>Nilai Harian</td>
                            <td>UTS</td>
                            <td>UAS</td>
                            <td>Pengetahuan</td>
                            <td style="width: 4vh">Predikat Pengetahuan</td>
                            <td>Ketrampilan</td>
                            <td style="width: 4vh">Predikat Ketrampilan</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anthonio D Caprio</td>
                            <td>89</td>
                            <td>90</td>
                            <td>89</td>
                            <td>89</td>
                            <td>B</td>
                            <td>95</td>
                            <td>A</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('nilai.show', 1) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning" href="{{ route('nilai.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection