
@extends('layouts.dashboard.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Mapel</h1>
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
                    
                    <form action="{{ route('mapel.store') }}" method="post" class="mt-2 px-2">
                        @csrf
                        <div class="mb-2">
                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mapel" id="mapel" class="form-control @error('mapel') is-invalid @enderror " value="{{ old('mapel') }}">
                            @error('mapel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select @error('kelas') is-invalid @enderror" aria-label="Default select example" name="kelas" id="kelas">
                                <option value="x">X</option>
                                <option value="xi">XI</option>
                                <option value="xii">XII</option>
                            </select>
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
                        <button type="submit" class="btn btn-dark mt-2">Tambah Kelas</button>
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
                                            <td>Jurusan</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        @foreach ($mapels as $mapel)
                                            @if ($mapel['kelas'] == "x")
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $mapel->mapel }}</td>
                                                <td>{{ strtoupper($mapel->kelas) }}</td>
                                                <td>{{ strtoupper($mapel->jurusan) }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-warning" href="{{ route('mapel.edit', $mapel['id']) }}"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="{{ route('mapel.destroy', $mapel['id']) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill" onclick="return confirm('Hapus mapel?')"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
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
                                            <td>Jurusan</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        @foreach ($mapels as $mapel)
                                            @if ($mapel['kelas'] == "xi")
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $mapel->mapel }}</td>
                                                <td>{{ strtoupper($mapel->kelas) }}</td>
                                                <td>{{ strtoupper($mapel->jurusan) }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-warning" href="{{ route('mapel.edit', $mapel['id']) }}"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="{{ route('mapel.destroy', $mapel['id']) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
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
                                            <td>Jurusan</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1 ?>
                                        @foreach ($mapels as $mapel)
                                            @if ($mapel['kelas'] == "xii")
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $mapel->mapel }}</td>
                                                <td>{{ strtoupper($mapel->kelas) }}</td>
                                                <td>{{ strtoupper($mapel->jurusan) }}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-warning" href="{{ route('mapel.edit', $mapel['id']) }}"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="{{ route('mapel.destroy', $mapel['id']) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endif
                                        @endforeach
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