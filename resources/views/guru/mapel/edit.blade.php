
@extends('layouts.guru.main')

@section('main')

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Edit Nilai</h1>
        @if (session('success'))
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                {!! session('success') !!}
            </div>
        @endif
    </div>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="{{ route('gr.mapel.index') }}">Back</a>

    <div class="card">
        <div class="card-body">

            <div class="text-center mb-3">
                <h4><b class="text-center ">{{ $selected }}</b></h4>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped text-center">
                    <thead>
                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>Pengetahuan</td>
                            <td>Ketrampilan</td>
                            <td>Nilai Akhir</td>
                            <td>Predikat</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                        @forelse ($rapots as $rapot)
                            <tr>
                                <form action="{{ route('gr.mapel.update', $rapot->id) }}" method="POST">
                                    @csrf
                                    <td>{{ $rapot->siswa->absen }}</td>
                                    <td>{{ $rapot->siswa->nama }}</td>
                                    <td><input type="text" value="{{ $rapot->pengetahuan }}" name="pengetahuan" class="text-center"></td>
                                    <td><input type="text" value="{{ $rapot->ketrampilan }}" name="ketrampilan" class="text-center"></td>
                                    <td>{{ $rapot->nilai_akhir }}</td>
                                    <td>{{ $rapot->predikat }}</td>
                                    <td class="text-center">
                                        <button type="submit" class="btn btn-success"><i class="bi bi-check-all"></i></button>
                                    </td>
                                </form>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center"><b>Data tidak ada</b></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection