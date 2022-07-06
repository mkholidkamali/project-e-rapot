
<style>
    #sidebar ul li a:hover {
        background-color: #848584
    }
</style>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #343A40">
    <div class="position-sticky pt-3" id="sidebar">
        <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('guru/dashboard*') ? 'active' : '' }}" aria-current="page" href="{{ route('gr.dashboard.index') }}">
                    Dashboard
                </a>
            </li>
            <hr class="text-white">
            <li class="nav-item">
                <h5 class="text-white ps-3">Akademik</h5>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('guru/nilai-siswa*') ? 'active' : '' }}" href="{{ route('gr.siswa.index') }}">
                    Wali Kelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('guru/mapel*') ? 'active' : '' }}" href="{{ route('gr.mapel.index') }}">
                    Matpel
                </a>
            </li>
        </ul>
    </div>
</nav>