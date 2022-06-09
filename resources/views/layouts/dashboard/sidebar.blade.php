
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
                <a class="nav-link text-white" href="/guru">
                    Guru
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/siswa">
                    Siswa
                </a>
                <hr class="text-white">
            </li>
            <li class="nav-item">
                <h5 class="text-white ps-3">Akademik</h5>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/kelas">
                    Kelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/mapel">
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