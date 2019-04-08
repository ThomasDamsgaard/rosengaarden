@extends('layouts.app')

@section('pageTitle', 'Forside | Rosengårdens Kiropraktik')

@section('css')
  <style media="screen">
    #app {
      flex: 1 0 auto;
    }

    #sticky-footer {
      flex-shrink: none;
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
        <a href="#content" class="btn btn-light" role="button">Læs mere</a href="#">
      </div>
    </div>
  </div>
</header>
<div class="container" id="content">
    <div class="row">
      <div class="col-md-8 mb-3">
        <p class="lead">Overskrift</p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="col-md-4 mb-3">
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
      if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }
  })();
  </script>
@endsection
