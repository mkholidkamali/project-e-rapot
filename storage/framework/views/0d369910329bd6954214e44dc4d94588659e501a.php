


<?php $__env->startSection('main'); ?>

    <h1 class="mt-3">Kelas - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="<?php echo e(route('kelas.index')); ?>">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="<?php echo e(route('kelas.update', $kelas->id)); ?>" method="post" class="mt-2 px-2">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row mb-2">
                    <div class="d-flex">
                        <label for="kelas" class="form-label">Nama Kelas &nbsp;</label> 
                        <span class="text-muted">- Sebelumnya : <?php echo e($kelas->kelas); ?></span>
                    </div>
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
                    <label for="guru_id" class="form-label">Wali Kelas - </label>
                    <span class="text-muted">Sebelumnya : <?php echo e($kelas->guru->name); ?></span>
                    <select class="form-select <?php $__errorArgs = ['guru_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Default select example" name="guru_id" id="guru_id">
                        <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($guru->id == $kelas->guru_id): ?>
                            <option value="<?php echo e($guru->id); ?>" selected><?php echo e($guru->name); ?></option>
                            <?php else: ?>
                            <option value="<?php echo e($guru->id); ?>"><?php echo e($guru->name); ?></option>
                            <?php endif; ?>
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
                    <span class="text-muted">Sebelumnya : <?php echo e(strtoupper($kelas->jurusan)); ?></span>
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
                <button class="btn btn-warning mt-2">Edit Kelas</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/kelas/edit.blade.php ENDPATH**/ ?>