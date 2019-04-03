@extends('layouts.app')

@section('pageTitle', 'Rosengårdens Kiropraktik')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        
      </div>
      <div class="col-md-4">

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
