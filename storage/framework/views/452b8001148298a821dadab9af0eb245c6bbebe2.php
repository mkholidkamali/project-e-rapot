


<?php $__env->startSection('main'); ?>

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Guru</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>
    </div>
    <hr>

    <a class="btn btn-success" href="<?php echo e(route('guru.create')); ?>">Tambah Guru</a>

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
                <table class="table table-hover table-striped">
                    <thead class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                        <tr>
                            <td>#</td>
                            <td>No Induk</td>
                            <td>Nama Guru</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody style="border: 1px solid rgb(169, 167, 167)" <?php $__errorArgs = ['no_induk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
                        <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($guru->no_induk); ?></td>
                            <td><?php echo e($guru->name); ?></td>
                            <td><?php echo e($guru->jenis_kelamin="l" ? 'Laki-laki' : 'Perempuan'); ?></td>
                            <td>
                                <img src="<?php echo e('storage/' . $guru->foto); ?>" width="50vh">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="<?php echo e(route('guru.show', $guru->id)); ?>"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-warning" href="<?php echo e(route('guru.edit', $guru->id)); ?>"><i class="bi bi-pencil-square"></i></a>
                                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/guru/index.blade.php ENDPATH**/ ?>