
<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #DD252B">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-center" href="{{ route('gr.dashboard.index') }}" style="background-color: #B72024">E-Rapot</a>
    <div class="nav-item dropdown me-3">
        <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="">
                Profile
            </a> --}}
            <a class="dropdown-item" href="">
                <a class="dropdown-item" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                > {{ __('Logout') }}
                </a>
    
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </div>
    </div>
    <button class="navbar-toggler  d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>