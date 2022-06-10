
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Kelas</h1>
    <hr>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Kelas X</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Kelas XI</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Kelas XII</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <form action="" method="post" class="mt-2 px-2">
                                <div class="mb-2">
                                    <label for="kelas" class="form-label">Nama Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                                        <option value="x">X Tel 1</option>
                                        <option value="x">X Tel 2</option>
                                        <option value="x">X Tel 3</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="wali-kelas" class="form-label">Wali Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="wali-kelas" id="kelas">
                                        <option value="">Anthoni</option>
                                        <option value="">Brodi</option>
                                        <option value="">Cahyano</option>
                                    </select>
                                </div>
                                <button class="btn btn-dark mt-2">Tambah Kelas</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <form action="" method="post" class="mt-2 px-2">
                                <div class="mb-2">
                                    <label for="kelas" class="form-label">Nama Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                                        <option value="x">XI Tel 1</option>
                                        <option value="x">XI Tel 2</option>
                                        <option value="x">XI Tel 3</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="wali-kelas" class="form-label">Wali Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="wali-kelas" id="kelas">
                                        <option value="">Anthoni</option>
                                        <option value="">Brodi</option>
                                        <option value="">Cahyano</option>
                                    </select>
                                </div>
                                <button class="btn btn-dark mt-2">Tambah Kelas</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <form action="" method="post" class="mt-2 px-2">
                                <div class="mb-2">
                                    <label for="kelas" class="form-label">Nama Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                                        <option value="x">XII Tel 1</option>
                                        <option value="x">XII Tel 2</option>
                                        <option value="x">XII Tel 3</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="wali-kelas" class="form-label">Wali Kelas</label>
                                    <select class="form-select" aria-label="Default select example" name="wali-kelas" id="kelas">
                                        <option value="">Anthoni</option>
                                        <option value="">Brodi</option>
                                        <option value="">Cahyano</option>
                                    </select>
                                </div>
                                <button class="btn btn-dark mt-2">Tambah Kelas</button>
                            </form>
                        </div>
                    </div>
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
                                    <td>Wali Kelas</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XII Tel 14</td>
                                    <td>Cahyano</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="{{ route('kelas.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
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

@endsection