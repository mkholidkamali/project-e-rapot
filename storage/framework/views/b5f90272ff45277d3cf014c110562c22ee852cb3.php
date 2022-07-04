


<?php $__env->startSection('main'); ?>

    <h1 class="mt-3">Nilai - Update</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="<?php echo e(route('nilai.index')); ?>">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="<?php echo e(route('nilai.update', $nilai->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="mb-2">
                    <label for="pengetahuan" class="form-label">Pengetahuan</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['pengetahuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="pengetahuan" id="pengetahuan" value="<?php echo e($nilai->pengetahuan, old('pengetahuan')); ?>">
                    <?php $__errorArgs = ['pengetahuan'];
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
                    <label for="ketrampilan" class="form-label">Ketrampilan</label>
                    <input type="number" class="form-control <?php $__errorArgs = ['ketrampilan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ketrampilan" id="ketrampilan" value="<?php echo e($nilai->ketrampilan, old('ketrampilan')); ?>">
                    <?php $__errorArgs = ['ketrampilan'];
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
                <button class="btn btn-warning mt-2" type="submit">Edit Nilai</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/nilai/edit.blade.php ENDPATH**/ ?>