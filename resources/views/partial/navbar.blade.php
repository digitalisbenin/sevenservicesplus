<nav class="navbar navbar-expand-lg navbar-default py-0 py-lg-2" style="background-color:white; ">
    <div class="container px-5" style="width:100%">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuprojet" aria-controls="menuprojet" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="" href="{{ url('accueil') }}">
            <img class="cover" src="{{asset('assets/images/logo.png')}}" alt="" width="230" height="100">
        </a>
        <div class="collapse navbar-collapse" id="menuprojet">
            <ul style="font-weight : bold;" class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-5" href="/accueil" role="button" aria-expanded="false">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/parcelle" role="button" aria-expanded="false">PARCELLES A VENDRE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/location" role="button" aria-expanded="false">CHAMBRES A LOUER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-5" href="/contact" role="button" aria-expanded="false">CONTACT</a>
                </li>

                {{-- @auth
                    @if (\Illuminate\Support\Facades\Auth::user())
                        <li class="nav-item">
                            <a href="{{ url('admin-panel') }}" class="btn btn-dark">Tableau de bord</a>
                        </li>
                    @endif
                @endauth --}}

                @guest
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Tableau de Bord</a></li>
                            {{-- @if($codeParents && $codeParents->codeUser)
                                 <li class="dropdown-item">Code Promo : {{$codeParents->codeUser}}</li>
                            @endif --}}
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest

            </ul>
            <div class="ms-5 mb-2">
                <!-- LIEN WHATSSAP -->
                <a class="" href="https://wa.me/message/UXEX2B6YYAUFK1">
                    <img class="cover mx-3" src="{{asset('assets/images/logo1.png')}}" alt="" width="30" height="30">
                </a>
                
                <!-- LIEN FACEBOOK -->
                <a class="" href="https://www.facebook.com/share/17uUoPN2SY/">
                    <img class="cover mx-3" src="{{asset('assets/images/logo2.png')}}" alt="" width="30" height="30">
                </a>

                <!-- LIEN TIKTOK -->
                <a class="" href="https://www.tiktok.com/@sevenservicesplusimmobil?_t=8sSHGLw7CR4&_r=1">
                    <img class="cover mx-3" src="{{asset('assets/images/tiktok.png')}}" alt="" width="30" height="30">
                </a>
            </div>

        </div>

    </div>
</nav>