
<style>
    #sidebar ul li a:hover {
        background-color: #848584
    }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #343A40">
    <div class="position-sticky pt-3" id="sidebar">
        <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('dashboard*') ? 'active' : ''); ?>" aria-current="page" href="/">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('guru*') ? 'active' : ''); ?>" href="<?php echo e(route('guru.index')); ?>">
                    Guru
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('siswa*') ? 'active' : ''); ?>" href="<?php echo e(route('siswa.index')); ?>">
                    Siswa
                </a>
                <hr class="text-white">
            </li>
            <li class="nav-item">
                <h5 class="text-white ps-3">Akademik</h5>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('kelas*') ? 'active' : ''); ?>" href="<?php echo e(route('kelas.index')); ?>">
                    Kelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('mapel*') ? 'active' : ''); ?>" href="<?php echo e(route('mapel.index')); ?>">
                    Matpel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('nilai*') ? 'active' : ''); ?>" href="<?php echo e(route('nilai.index')); ?>">
                    Nilai
                </a>
            <li class="nav-item">
                <a class="nav-link text-white <?php echo e(Request::is('rapot*') ? 'active' : ''); ?>" href="<?php echo e(route('rapot.index')); ?>">
                    Rapot
                </a>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\wamp64\www\Project\TelkomSchool\projek-raport\resources\views/layouts/dashboard/sidebar.blade.php ENDPATH**/ ?>