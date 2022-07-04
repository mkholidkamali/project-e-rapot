


<?php $__env->startSection('main'); ?>

    <h1 class="mt-3">Mapel - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="<?php echo e(route('mapel.index')); ?>">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="<?php echo e(route('mapel.update', $mapel->id)); ?>" method="post" class="mt-2 px-2">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="mb-2">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <input type="text" name="mapel" id="mapel" class="form-control <?php $__errorArgs = ['mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($mapel->mapel, old('mapel')); ?>" autofocus>
                    <?php $__errorArgs = ['mapel'];
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
                    <label for="kelas" class="form-label">Kelas - </label> <small>Sebelumnya : <?php echo e(strtoupper($mapel->kelas)); ?></small>
                    <select class="form-select" aria-label="Default select example" name="kelas" id="kelas">
                        <option value="x">X</option>
                        <option value="xi">XI</option>
                        <option value="xii">XII</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="jurusan" class="form-label">Jurusan - </label> <small>Sebelumnya : <?php echo e(strtoupper($mapel->jurusan)); ?></small>
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
                <div class="mb-2">
                    <label for="guru_id" class="form-label">Guru Pengajar - </label> <small>Sebelumnya : <?php echo e($mapel->guru->name); ?></small>
                    <select class="form-select <?php $__errorArgs = ['guru_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Default select example" name="guru_id" id="guru_id">
                        <?php $__currentLoopData = $gurus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($guru->id); ?>"><?php echo e($guru->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button class="btn btn-warning mt-2">Edit Kelas</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/mapel/edit.blade.php ENDPATH**/ ?>