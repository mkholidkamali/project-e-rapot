
<style>
    #sidebar ul li a:hover {
        background-color: #848584
    }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #343A40">
    <div class="position-sticky pt-3" id="sidebar">
        <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('guru.index') }}">
                    Guru
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('siswa.index') }}">
                    Siswa
                </a>
                <hr class="text-white">
            </li>
            <li class="nav-item">
                <h5 class="text-white ps-3">Akademik</h5>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('kelas.index') }}">
                    Kelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('mapel.index') }}">
                    Matpel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/nilai">
                    Nilai
                </a>
            </li>
        </ul>
    </div>
</nav>
{{-- {{ Request::is('dashboard') ? 'active' : '' }} --}}