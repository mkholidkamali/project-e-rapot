


<?php $__env->startSection('main'); ?>

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Siswa</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>
    </div>
    <hr>

    <a class="btn btn-success" href="<?php echo e(route('siswa.create')); ?>">Tambah Siswa</a>

    <div class="card mt-2">
        <div class="card-body">
            <h5>Data Siswa</h5>
            <div class="justify-content=end col-md-3 ms-auto">
                <form action="" method="POST">
                    <label for="search">Search</label>
                    <input type="text" name="search" class="form-control">
                </form>
            </div>
            <div class="table-responsive mt-4" >
                <table class="table table-hover table-striped" >
                    <thead>
                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
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
                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($sis->nis); ?></td>
                            <td><?php echo e($sis->nama); ?></td>
                            <td><?php echo e(strtoupper($sis->kelas->jurusan)); ?></td>
                            <td><?php echo e($sis->kelas->kelas); ?></td>
                            <td><?php echo e($sis->jenis_kelamin="l" ? "Laki-laki" : "Perempuan"); ?></td>
                            <td><?php echo e(strtoupper($sis->agama)); ?></td>
                            <td><?php echo e($sis->nisn); ?></td>
                            <td>
                                <img src="<?php echo e('storage/' . $sis->foto); ?>" class="" width="50vh"  alt="<?php echo e($sis->foto); ?>">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="<?php echo e(route('siswa.show', $sis->id)); ?>"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning" href="<?php echo e(route('siswa.edit', $sis->id)); ?>"><i class="bi bi-pencil-square"></i></a>
                                <form action="<?php echo e(route('siswa.destroy', $sis->id)); ?>" method="post" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data siswa ini?')"><i class="bi bi-trash-fill"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/siswa/index.blade.php ENDPATH**/ ?>