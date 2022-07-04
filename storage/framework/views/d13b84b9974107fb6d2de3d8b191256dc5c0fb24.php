


<?php $__env->startSection('main'); ?>

    <div class="d-flex ">
        <h1 class="mt-3 align-items-center">Mapel</h1>
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
                    
                    <form action="<?php echo e(route('mapel.store')); ?>" method="post" class="mt-2 px-2">
                        <?php echo csrf_field(); ?>
                        <div class="mb-2">
                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                            <input type="text" name="mapel" id="mapel" class="form-control <?php $__errorArgs = ['mapel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " value="<?php echo e(old('mapel')); ?>">
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
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-label="Default select example" name="kelas" id="kelas">
                                <option value="x">X</option>
                                <option value="xi">XI</option>
                                <option value="xii">XII</option>
                            </select>
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
                        <div class="mb-2">
                            <label for="guru_id" class="form-label">Guru Pengajar</label>
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
                        <button type="submit" class="btn btn-dark mt-2">Tambah Kelas</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active text-dark" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kelas X</button>
                            <button class="nav-link text-dark" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Kelas XI</button>
                            <button class="nav-link text-dark" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Kelas XII</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="justify-content=end col-md-3 ms-auto">
                                <form action="" method="POST">
                                    <label for="search">Search</label>
                                    <input type="text" name="search" class="form-control">
                                </form>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                                            <td>#</td>
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Jurusan</td>
                                            <td>Guru</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                                        <?php $no=1 ?>
                                        <?php $__currentLoopData = $mapels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($mapel['kelas'] == "x"): ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($mapel->mapel); ?></td>
                                                <td><?php echo e(strtoupper($mapel->kelas)); ?></td>
                                                <td><?php echo e(strtoupper($mapel->jurusan)); ?></td>
                                                <td><?php echo e($mapel->guru->name); ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-warning" href="<?php echo e(route('mapel.edit', $mapel['id'])); ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="<?php echo e(route('mapel.destroy', $mapel['id'])); ?>" method="POST" class="d-inline">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill" onclick="return confirm('Hapus mapel?')"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <div class="justify-content=end col-md-3 ms-auto">
                                <form action="" method="POST">
                                    <label for="search">Search</label>
                                    <input type="text" name="search" class="form-control">
                                </form>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                                            <td>#</td>
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Jurusan</td>
                                            <td>Guru</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                                        <?php $no=1 ?>
                                        <?php $__currentLoopData = $mapels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($mapel['kelas'] == "xi"): ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($mapel->mapel); ?></td>
                                                <td><?php echo e(strtoupper($mapel->kelas)); ?></td>
                                                <td><?php echo e(strtoupper($mapel->jurusan)); ?></td>
                                                <td><?php echo e($mapel->guru->name); ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-warning" href="<?php echo e(route('mapel.edit', $mapel['id'])); ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="<?php echo e(route('mapel.destroy', $mapel['id'])); ?>" method="POST" class="d-inline">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="justify-content=end col-md-3 ms-auto">
                                <form action="" method="POST">
                                    <label for="search">Search</label>
                                    <input type="text" name="search" class="form-control">
                                </form>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr class="bg-danger text-white table-borderless" style="border: 1px solid #DC3545">
                                            <td>#</td>
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Jurusan</td>
                                            <td>Guru</td>
                                            <td>Opsi</td>
                                        </tr>
                                    </thead>
                                    <tbody style="border: 1px solid rgb(169, 167, 167)">
                                        <?php $no=1 ?>
                                        <?php $__currentLoopData = $mapels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($mapel['kelas'] == "xii"): ?>
                                            <tr>
                                                <td><?php echo e($no++); ?></td>
                                                <td><?php echo e($mapel->mapel); ?></td>
                                                <td><?php echo e(strtoupper($mapel->kelas)); ?></td>
                                                <td><?php echo e(strtoupper($mapel->jurusan)); ?></td>
                                                <td><?php echo e($mapel->guru->name); ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-warning" href="<?php echo e(route('mapel.edit', $mapel['id'])); ?>"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="<?php echo e(route('mapel.destroy', $mapel['id'])); ?>" method="POST" class="d-inline">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/dashboard/mapel/index.blade.php ENDPATH**/ ?>