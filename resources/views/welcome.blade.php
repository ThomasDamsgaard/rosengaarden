@extends('layouts.app')

@section('pageTitle', 'Forside | Rosengårdens Kiropraktik')

@section('css')
  <style media="screen">
    #app {
      flex: 1 0 auto;
    }

    .masthead {
      height: 100vh;
      min-height: 500px;
      /* background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080'); */
      background: rgb(230,231,225);
      background: -moz-linear-gradient(top, rgba(230,231,225,1) 0%, rgba(238,239,234,1) 100%);
      background: -webkit-linear-gradient(top, rgba(230,231,225,1) 0%,rgba(238,239,234,1) 100%);
      background: linear-gradient(to bottom, rgba(230,231,225,1) 0%,rgba(238,239,234,1) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6e7e1', endColorstr='#eeefea',GradientType=0 );
      /* background-size: cover;
      background-position: center;
      background-repeat: no-repeat; */
    }

    .btn::after {
      background: #F5F8FA;
      content: '';
      height: 100vh;
      left: 50%;
      position: absolute;
      top: 100%;
      width: 1.5px;
    }

    .btn:hover:after {
      background: rgb(0,0,0,0);
    }

    .fixed-top.scrolled {
      background-color: #fff !important;
      transition: background-color 600ms linear;
    }

    .fixed-bottom {
      opacity: 0;
    }

    .fixed-bottom.scrolled {
      opacity: 1;
      transition: opacity 600ms linear;
    }

    .navbar-light .navbar-toggler {
      border-color: transparent;
    }

  </style>

@endsection

@section('content')
  <header class="masthead mb-3">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <div class="col-sm-4 offset-sm-4">
          <h4 class="font-weight-light" style="margin: 0px;">Rosengårdens</h4>
          <hr style="background-color: #C75B3A; height: 1px; margin: 0.25rem;">
          <h1>Kiropraktik</h1>
        </div>

        <p class="lead">Velkommen hos kiropraktorer og fysioterapeuter ved Rosengårdscenteret</p>
        <a href="#content" class="btn btn-light" role="button">Læs mere</a>
      </div>
    </div>
  </div>
</header>
<div class="container" id="content">
  <div class="row mb-md-5 mb-3">
    <div class="col-md-8 offset-md-2">
      <p class="lead">Vores mål er at hjælpe dig med at optimere dit helbred og velbefindende.</p>
      <p>Som kiropraktorer og fysioterapeuter er vi specialister i kroppens bevægeapparat og uddannede til at få led og muskler til at fungere, bedst muligt. Vi er et tværfagligt team, som er parat til at hjælpe dig, uanset om problemet allerede er opstået og du har behov for behandling, eller blot ønsker en undersøgelse eller gode råd og vejledning.</p>
      <p>Du behøver ingen henvisning ved kiropraktorbesøg, vi har overenskomst med sygesikringen og der ydes tilskud fra Sygeforsikringen Danmark.</p>
      <p style="margin-bottom: 0px;">Vi tilbyder desuden røntgenundersøgelser og stabilitetstræning.</p>
    </div>
  </div>
  <hr>
    <div class="row mt-md-5 mt-3">
      <div class="col-md-4 mb-3">
        <p class="lead" style="margin-bottom: 0px;">Telefontider:</p>
        <ul style="list-style: none; padding: 0;">
          <li>Mandag 8.00 - 18.00</li>
          <li>Tirsdag 7.30 - 18.00</li>
          <li>Onsdag 7.30 - 14.00</li>
          <li>Torsdag 8.00 - 18.00</li>
          <li>Fredag 7.30 - 15.00</li>
        </ul>
        <p>Med forbehold for ændringer ved kurser, under ferier og lignende.</p>
      </div>
      <div class="col-md-4 mb-3">
        <p class="lead" style="margin-bottom: 0px;">Kiropraktorvagt</p>
        <p>
          I weekender og helligdage kan vagthavende kiropraktor i region syd kontaktes på følgende telefon nr:<br>
          Vagtkreds Fyn: 7020 3642<br>
          Vagtkreds Jylland: 7020 3634<br>
          Der er telefontid mellem kl 9 og 10.<br>
          Mere info på regionens hjemmeside via følgende <a href="https://www.regionsyddanmark.dk/wm362773">link</a>.
        </p>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card">
          <div class="card-header">
            Seneste blogindlæg
          </div>
          <div class="card-body">
            <ul class="list-group">
              @forelse ($posts as $post)
                <a href="{{ url('/blog/' . $post->slug)}}" class="list-group-item list-group-item-action flex-column align-items-start">
                  <h5 class="mb-1">{{ str_limit($post->title, 15) }}</h5>
                  <div class="d-flex w-100 justify-content-between">
                    <p class="mb-1">{{ str_limit($post->subtitle, 10) }}</p>
                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                  </div>
                </a>
              @empty
                <h6>Ingen blogindlæg endnu</h6>
              @endforelse
            </ul>
          </div>
        </div>
      </div>
      {{-- <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                      @endif
                  @endauth
              </div>
          @endif

          <div class="content">
              <div class="title">
                  Laravel
              </div>
          </div>
      </div> --}}
    </div>
</div>
@endsection

@section('javascript')
  <script type="text/javascript">
  (function() {
    'use strict'
    window.onscroll = function() {
      const navbar = document.querySelector('.fixed-top');
      const footer = document.querySelector('.fixed-bottom');
      if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        navbar.classList.add('scrolled');
        footer.classList.add('scrolled')
      } else {
        navbar.classList.remove('scrolled');
        footer.classList.remove('scrolled');
      }
    }
  })();
  </script>
@endsection
