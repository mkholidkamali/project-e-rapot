


<?php $__env->startSection('main'); ?>

    <h1 class="mt-3">Nilai - Create</h1>
    <hr>

    <a class="btn btn-primary mb-2 px-3" href="<?php echo e(route('nilai.index')); ?>">Back</a>

    <div class="card col-md-6">
        <div class="card-body">
            <form action="" method="post" class="">
                <div class="mb-2">
                    <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                    <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran">
                </div>
                <div class="mb-2">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="kelas">
                </div>
                <button class="btn btn-success mt-2" type="submit">Tambah Nilai</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/nilai/create.blade.php ENDPATH**/ ?>