@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 offset-md-2">
      <div class="text-center mb-5">
        <h2>
          {{ $slug->title }}
        </h2>
        <h5 class="text-muted">
          {{ $slug->subtitle }}
        </h5>
        <p class="text-muted" style="font-size: 0.8em;">
          Skrevet {{ $slug->created_at->format('F Y') }}
        </p>
      </div>
      <p>
        {!! $slug->body !!}
      </p>
    </div>
    <hr>
  </div>
</div>
@endsection
