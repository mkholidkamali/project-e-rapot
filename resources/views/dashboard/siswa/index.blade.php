
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Siswa</h1>
    <hr>

    <button class="btn btn-success">Tambah Siswa</button>

    <div class="card mt-2">
        <div class="card-body">
            <h5>Data Siswa</h5>
            <div class="justify-content=end col-md-3 ms-auto">
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>20198634</td>
                            <td>Sandhy Putra</td>
                            <td>RPL</td>
                            <td>XII Tel 14</td>
                            <td>Laki-laki</td>
                            <td>Islam</td>
                            <td>82918574919</td>
                            <td>
                                <img src="storage/profile/guru/profile.webp" class="" width="50px">
                            </td>
                            <td class="text-center">
                                <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection