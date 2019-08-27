@extends('layouts.app')

@section('pageTitle', e($slug->title) . ' | Rosengårdens Kiropraktik')

@section('content')
<div class="container mt-md-5 mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8 offset-md-2 mt-6 mt-lg-3">
      <div class="text-center">
        <h2>
          {{ $slug->title }}
        </h2>
        <h5 class="text-muted">
          Af {{ $slug->author }}
        </h5>
        <p class="text-muted" style="font-size: 0.8em;">
          <strong>Skrevet {{ $slug->created_at->format('F Y') }}</strong>
        </p>
      </div>
      <p>
        @php
          echo $slug->body
        @endphp
      </p>
    </div>
    <hr>
  </div>
</div>
@endsection
