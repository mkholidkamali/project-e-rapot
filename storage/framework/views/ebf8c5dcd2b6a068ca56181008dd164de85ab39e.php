


<?php $__env->startSection('main'); ?>

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Kelas</h1>
        <?php if(session('success')): ?>
            <div class="alert alert-success my-auto ms-3 py-2 mt-4" role="alert">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>
    </div>
    <hr>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('kelas.store')); ?>" method="post" class="mt-2 px-2">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-2">
                            <label for="kelas" class="form-label">Nama Kelas</label>
                            <div class="col-md-4">
                                <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <select class="form-select" aria-label="Default select example" name="nama-kelas" id="nama-kelas">
                                    <option value="Tel 1">Tel 1</option>
                                    <option value="Tel 2">Tel 2</option>
                                    <option value="Tel 3">Tel 3</option>
                                    <option value="Tel 4">Tel 4</option>
                                    <option value="Tel 5">Tel 5</option>
                                    <option value="Tel 6">Tel 6</option>
                                    <option value="Tel 7">Tel 7</option>
                                    <option value="Tel 8">Tel 8</option>
                                    <option value="Tel 9">Tel 9</option>
                                    <option value="Tel 10">Tel 10</option>
                                    <option value="Tel 11">Tel 11</option>
                                    <option value="Tel 12">Tel 12</option>
                                    <option value="Tel 13">Tel 13</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="guru_id" class="form-label">Wali Kelas</label>
                            <select class="form-select <?php $__errorArgs = ['guru_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Default select example" name="guru_id" id="guru_id">
                                <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($guru->id); ?>"><?php echo e($guru->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['guru_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-2">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Default select example" name="jurusan" id="jurusan">
                                <option value="tra">TRA</option>
                                <option value="tja">TJA</option>
                                <option value="tkj">TKJ</option>
                                <option value="rpl">RPL</option>
                            </select>
                        </div>
                        <button class="btn btn-dark mt-2">Tambah Kelas</button>
                    </form>
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
                        <table class="table table-hover table-striped">
                            <thead class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                                <tr>
                                    <td>#</td>
                                    <td>Nama Kelas</td>
                                    <td>Jurusan</td>
                                    <td>Wali Kelas</td>
                                    <td>Opsi</td>
                                </tr>
                            </thead>
                            <tbody style="border: 1px solid rgb(169, 167, 167)">
                                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($kls->kelas); ?></td>
                                    <td><?php echo e(strtoupper($kls->jurusan)); ?></td>
                                    <td><?php echo e($kls->guru->name); ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="<?php echo e(route('kelas.edit', $kls->id)); ?>"><i class="bi bi-pencil-square"></i></a>
                                        <form action="<?php echo e(route('kelas.destroy', $kls->id)); ?>" method="post" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus kelas?')"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/kelas/index.blade.php ENDPATH**/ ?>