


<?php $__env->startSection('main'); ?>

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Nilai</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>
    </div>
    <hr>

    <div class="card">
        <div class="card-body">

            <h5>Tentukan data :</h5>
            
            <div class="col-md-8">
                <form action="<?php echo e(route('nilai.select')); ?>" method="post" class="mt-2 px-2">
                    <?php echo csrf_field(); ?>
                    <div class="d-flex">
                        <div class="mb-1 me-2">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select class="form-select" aria-label="Default select example" name="kelas_id" id="kelas_id">
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kls->id); ?>"><?php echo e($kls->kelas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-1 me-2">
                            <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                            <select name="mapel_id" id="mapel_id" class="form-select">
                                <?php $__currentLoopData = $mapels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($mapel->id); ?>"><?php echo e($mapel->mapel); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-1 me-2">
                            <label for="semester_id" class="form-label">Semester</label>
                            <select name="semester_id" id="semester_id" class="form-select">
                                <?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($semester->id); ?>"><?php echo e(ucfirst($semester->semester)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-dark mt-2 px-4">Pilih</button>
                    <a href="<?php echo e(route('nilai.index')); ?>" class="btn btn-dark mt-2 px-4">Refresh</a>
                </form>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <div class="d-flex align-items-center me-3">
                    
                </div>
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="text-center">
                <b class="text-center "><?php echo e($selected); ?></b>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                            <td>#</td>
                            <td>Nama Siswa</td>
                            <td>Pengetahuan</td>
                            <td>Ketrampilan</td>
                            <td>Nilai akhir</td>
                            <td>Predikat</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                        <?php $__empty_1 = true; $__currentLoopData = $dataNilai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nilai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($nilai->siswa->nama); ?></td>
                                <td><?php echo e($nilai->pengetahuan); ?></td>
                                <td><?php echo e($nilai->ketrampilan); ?></td>
                                <td><?php echo e($nilai->nilai_akhir); ?></td>
                                <td><?php echo e($nilai->predikat); ?></td>
                                <td class="text-center">
                                    
                                    <a class="btn btn-warning" href="<?php echo e(route('nilai.edit', $nilai->id)); ?>"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="text-center"><b>Data tidak ada</b></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/nilai/index.blade.php ENDPATH**/ ?>