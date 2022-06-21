
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Guru</h1>
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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>No Induk</td>
                            <td>Nama Guru</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1827382828</td>
                            <td>John Doe</td>
                            <td>Laki-laki</td>
                            <td>
                                <img src="storage/profile/guru/profile.webp" class="" width="50px">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('guru.show', 1) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning" href="{{ route('guru.edit', 1) }}"><i class="bi bi-pencil-square"></i></a>
                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                        @foreach($guru as $g)
	                	<tr>
			                <td>{{ $g->no_induk }}</td>
			                <td>{{ $g->nama_guru }}</td>
                            <td></td>
                            <td></td>
                            <td></td>
			                
			                <td>
                            <a class="btn btn-primary" href="{{ route('guru.show', $g->id) }}"><i class="bi bi-eye"></i></a>
                            <a class="btn btn-warning" href="{{ route('guru.edit', $g->id) }}"><i class="bi bi-pencil-square"></i></a>
				            <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>   
				
				                
			                </td>
		                </tr>
		                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection