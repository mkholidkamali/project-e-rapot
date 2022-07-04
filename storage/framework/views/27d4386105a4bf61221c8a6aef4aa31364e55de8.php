


<?php $__env->startSection('main'); ?>

    <style>
        .table-rapot tbody tr td {
            vertical-align: middle
        }
    </style>

    
    
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
                            <td><b><?php echo e($siswa->nama); ?></b></td>
                        </tr>
                        <tr>
                            <td>Nomor Induk/NISN</td>
                            <td>:</td>
                            <td><b><?php echo e($siswa->nis); ?> / <?php echo e($siswa->nisn); ?></b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3" style="margin-right: 20vh">
                    <table class="table table-borderless">
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?php echo e($siswa->kelas->kelas); ?></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td> : </td>
                            <td><?php echo e($nilaiData->semester_id); ?> / <?php echo e(ucfirst($nilaiData->semester->semester)); ?></td>
                        </tr>
                        <tr>
                            <td>Tahun ajaran</td>
                            <td>:</td>
                            <td><?php echo e($siswa->tahun_ajaran); ?></td>
                        </tr>
                        <tr>
                            <td>No Absen</td>
                            <td>:</td>
                            <td><?php echo e($siswa->absen); ?></td>
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
                            <?php $__currentLoopData = $nilais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td><?php echo e($loop->iteration); ?></td>
                                <td style="padding: 0px 11px;" class="text-start">
                                    <div class="py-2">
                                        <?php echo e($nilai->mapel->mapel); ?>

                                    </div>
                                    <hr style="margin: 0% -11px; border: 1px solid black;">
                                    <div style="margin: 0%;">
                                        <i><?php echo e($nilai->mapel->guru->name); ?></i>
                                    </div>
                                </td>
                                <td><?php echo e($nilai->kkm); ?></td>
                                <td><?php echo e($nilai->pengetahuan); ?></td>
                                <td><?php echo e($nilai->ketrampilan); ?></td>
                                <td><?php echo e($nilai->nilai_akhir); ?></td>
                                <td><?php echo e($nilai->predikat); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center" style="background-color: lightgray">
                                <td colspan="3"><b>RATAAN</b></td>
                                <td><b><?php echo e($nilaiData->rapot->rata_pengetahuan); ?></b></td>
                                <td><b><?php echo e($nilaiData->rapot->rata_ketrampilan); ?></b></td>
                                <td><b><?php echo e($nilaiData->rapot->rata_nilai_akhir); ?></b></td>
                                <td><b><?php echo e($nilaiData->rapot->rata_predikat); ?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <b>B. CATATAN AKADEMIK</b>
                <div style="border: 2px solid black" class="p-3">
                    <p style="text-align: justify">
                        &nbsp;&nbsp; &nbsp;&nbsp;
                        <?php echo e($nilaiData->rapot->catatan_akademik); ?>

                    </p>
                </div>
            </div>

        </div>
    </div>

    <?php $__env->stopSection(); ?>
    
    

<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/rapot/show.blade.php ENDPATH**/ ?>