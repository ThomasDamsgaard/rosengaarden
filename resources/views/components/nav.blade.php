@if (Route::is('frontpage'))
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
@else
  <nav class="navbar navbar-expand-md navbar-light">
@endif

    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('img/logo.png')}}" alt="" class="img-fluid rounded mx-auto d-block" style="width: 125px; height: 62px;">
        </a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontpage') }}">Forside</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="chiropractor" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kiropraktik
                </a>
                <div class="dropdown-menu animate slideIn" aria-labelledby="chiropractor">
                  <a class="dropdown-item" href="{{ route('symptoms')}}">
                    Symptomer og behandling
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('children')}}">
                    Børnekiropraktik
                  </a>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('physiotherapy') }}">Fysioterapi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('links') }}">Links</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="contact" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kontaktinfo
                </a>
                <div class="dropdown-menu animate slideIn" aria-labelledby="contact">
                  <a class="dropdown-item" href="{{ route('contact')}}">
                    Kontakt
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('who')}}">
                    Hvem er vi
                  </a>
                </div>
              </li>
            </ul>
            <!-- Left Side Of Navbar -->
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> --}}
                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
