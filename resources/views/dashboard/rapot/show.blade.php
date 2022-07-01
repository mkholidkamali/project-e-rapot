
@extends('layouts.dashboard.main')

@section('main')

    <style>
        .table-rapot tbody tr td {
            vertical-align: middle
        }
    </style>

    {{-- <h1 class="mt-3">Laporan Nilai Siswa</h1> --}}
    {{-- <hr> --}}
    <a class="btn btn-primary mb-2 px-3 mt-3" href="javascript:window.open('','_self').close();">Back</a>

    <div class="card">
        <div class="card-body">

            <div class="text-center mb-4">
                <b class="fs-4"><u>LAPORAN NILAI SISWA</u></b>
            </div>

            <div class="row d-flex justify-content-between">
                <div class="col-md-6 ms-5">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Sekolah</td>
                            <td>:</td>
                            <td>SMK Telkom Sandhy Putra</td>
                        </tr>
                        <tr>
                            <td>Alamat Sekolah</td>
                            <td> : </td>
                            <td>Jl. Daan Mogot Km 11 Jakarta Barat</td>
                        </tr>
                        <tr>
                            <td>Nama Peserta Didik</td>
                            <td>:</td>
                            <td><b>Mohamad Kholid Kamali</b></td>
                        </tr>
                        <tr>
                            <td>Nomor Induk/NISN</td>
                            <td>:</td>
                            <td><b>2019855 / 0033949749</b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3" style="margin-right: 20vh">
                    <table class="table table-borderless">
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>X Tel 1</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td> : </td>
                            <td>1 / Ganjil</td>
                        </tr>
                        <tr>
                            <td>Tahun ajaran</td>
                            <td>:</td>
                            <td>2019 / 2020</td>
                        </tr>
                        <tr>
                            <td>ID / No. Absen</td>
                            <td>:</td>
                            <td>024 / 324</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="container">
                <hr style="border: 1px solid black">
    
                <b>A. NILAI AKADEMIK</b>
                <div class="table-responsive">
                    <table class="table table-bordered mt-2 table-rapot" style="border: 2px solid black">
                        <thead>
                            <tr class="text-center" style="background-color: lightgray">
                                <td><b>No</b></td>
                                <td><b>Mata Pelajaran</b></td>
                                <td><b>SKM</b></td>
                                <td><b>Pengetahuan</b></td>
                                <td><b>Ketrampilan</b></td>
                                <td><b>Nilai Akhir</b></td>
                                <td><b>Predikat</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td style="padding: 0px 11px;" class="text-start">
                                    <div class="py-2">
                                        Matematika Terapan
                                    </div>
                                    <hr style="margin: 0% -11px; border: 1px solid black;">
                                    <div style="margin: 0%;">
                                        <i>Anthonio De Caprio</i>
                                    </div>
                                </td>
                                <td>75</td>
                                <td>90</td>
                                <td>91</td>
                                <td>91</td>
                                <td>A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <b>B. CATATAN AKADEMIK</b>
            </div>

        </div>
    </div>

    @endsection
    {{-- <div class="row px-1">
        <div class="col-md-12 py-2">a</div>
        <hr>
        <div class="col-md-12">b</div>
    </div> --}}
    {{-- <table>
        <tr>
            <td>Pendidikan Agama Islam</td>
        </tr>
        <tr>
            <td>Pendidikan Agama Islam</td>
        </tr>
    </table> --}}
