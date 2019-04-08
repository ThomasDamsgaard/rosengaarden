@extends('layouts.app')

@section('pageTitle', 'Hvem er vi | Rosengårdens Kiropraktik')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mt-md-5 mt-3">

      @foreach($posts as $post)
      <a href="{{ url('/blog/'.$post->slug)}}">
        <h2 class="">
          {{ $post->title }}
        </h2>
      </a>
      <h3 class="">
        {{ $post->subtitle }}
      </h3>
      <p class="">Posted by
        <a href="#">Start Bootstrap</a>
        on September 24, 2018
      </p>
      <hr>
      @endforeach

      {{ $posts->links() }}

      </div>
    </div>
  </div>
</div>
@endsection
