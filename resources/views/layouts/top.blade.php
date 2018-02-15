<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <!-- Brand NAV -->
    <a class="navbar-brand tex" href="{{ url('/') }}">
        LY
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse offset-sm-7 offset-md-8 offset-lg-9" id="navbarToggler"    >
        <ul class="navbar-nav mt-0">
            @guest
            <li class="nav-item">
                <a class="nav-link text-light btn btn-outline-warning" href="{{ route('login') }}">S'identifier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light btn btn-outline-warning ml-2" href="{{ route('register') }}">S'enregistrer</a>
            </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                       aria-haspopup="true">
                        <span class="caret btn btn-link text-light deco">{{ Auth::user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}" class="dropdown-item "
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>
