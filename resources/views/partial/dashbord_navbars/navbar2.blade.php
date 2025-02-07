<nav class="navbar-vertical-nav d-none d-xl-block">
    <div class="navbar-vertical">
        <div class="px-4 py-5">
            <a href="{{ url('accueil') }}" class="navbar-brand">
                {{--  <h3>DIGIT-SHOPPING</h3>  --}}
                <img class="cover"
                src=
"{{asset('assets/images/logo.png')}}"
                alt=""
                width="200"
                height="50">
            </a>
        </div>
        <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
            <ul class="navbar-nav flex-column" id="sideNavbar">
              @if(Auth::check() && Auth::user()->role_id == 1)
              <li class="nav-item">
                <a class="nav-link  active " href="{{ route('dashboard') }}">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><i class="bi bi-house"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{ url('articles') }}">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><i class="bi bi-cart"></i></span>
                        <span class="nav-link-text">Parcelles</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('categories') }}">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                        <span class="nav-link-text">Sites</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ url('documents') }}">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                        <span class="nav-link-text">Documents</span>
                    </div>
                </a>
            </li>

              @else



            <li class="nav-item">
                <a class="nav-link " href="{{ url('documents') }}">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><i class="bi bi-list-task"></i></span>
                        <span class="nav-link-text">Documents</span>
                    </div>
                </a>
            </li>


              @endif
            </ul>
        </div>
    </div>
</nav>
