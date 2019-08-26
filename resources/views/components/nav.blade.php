@if (Route::is('frontpage'))
  <nav class="navbar navbar-expand-md navbar-light fixed-top d-none d-lg-block">
@else
  <nav class="navbar navbar-expand-md navbar-light d-none d-lg-block">
@endif
  <div class="mx-auto d-sm-flex d-block flex-md-nowrap">
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
                  Behandling
                </a>
                <div class="dropdown-menu animate slideIn" aria-labelledby="chiropractor">
                  <a class="dropdown-item" href="{{ route('symptoms')}}">
                    Kiropraktik
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('children')}}">
                    Børnekiropraktik
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('physiotherapy')}}">
                    Fysioterapi og massage
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="contact" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Kontakt
                </a>
                <div class="dropdown-menu animate slideIn" aria-labelledby="contact">
                  <a class="dropdown-item" href="{{ route('contact') }}">
                    Kontaktinformation
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('who') }}">
                    Personale
                  </a>
                </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('info') }}">Info</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('blog') }}">Blog</a>
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
  </div>
</nav>

<!-- Mobile Nav -->
<div class="mobile-nav">
  <header id="header" class="d-lg-none">
    <nav id="toggle">
      <div class="button_container">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>
    </nav>
  </header>
</div>

<!-- Mobile Nav -->
