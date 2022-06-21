
@extends('layouts.dashboard.main')

@section('main')

    <h1 class="mt-3">Guru - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('guru.index') }}">Back</a>

    

    @foreach($guru as $g)
	
    <form action="/guru/update" method="post">
		{{ csrf_field() }}
		<div class="mb-2">

                    <input type="hidden" class="form-control" name="id" value="{{ $g->id }}"> <br/>

                    <label for="no_induk" class="form-label">No Induk Guru </label>
                    <input type="text" class="form-control" name="no_induk" id="no_induk">
                </div>
                <div class="mb-2">
                    <label for="nama_guru" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" name="nama_guru" id="nama">
                </div>
               
                <button class="btn btn-success mt-2">Tambah Guru</button>
	</form>
    
     @endforeach 
    
    @endsection