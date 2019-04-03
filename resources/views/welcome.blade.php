@extends('layouts.app')

@section('pageTitle', 'Rosengårdens Kiropraktik | Forside')

@section('css')
  <style media="screen">
    #app {
      flex: 1 0 auto;
    }

    #sticky-footer {
      flex-shrink: none;
    }
  </style>

@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <div class="col-md-4">
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

@endsection
