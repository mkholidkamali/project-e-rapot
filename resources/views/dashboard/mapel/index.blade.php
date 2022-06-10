
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Mapel</h1>
    <hr>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    
                    <form action="" method="post" class="mt-2 px-2">
                        <div class="mb-2">
                            <label for="mata-pelajaran" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mata-pelajaran" id="mata-pelajaran" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                                <option value="x">X</option>
                                <option value="x">XI</option>
                                <option value="x">XI</option>
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

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active text-dark" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kelas X</button>
                            <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kelas XI</button>
                            <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Kelas XII</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
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
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>MTK</td>
                                            <td>X</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{ route('mapel.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
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
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>MTK</td>
                                            <td>XI</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{ route('mapel.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
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
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>MTK</td>
                                            <td>XII</td>
                                            <td class="text-center">
                                                <a class="btn btn-warning" href="{{ route('mapel.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
                                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


@endsection