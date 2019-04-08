@extends('layouts.app')

@section('pageTitle', 'Hvem er vi | Rosengårdens Kiropraktik')

@section('css')
  <style media="screen">
    a {
      text-decoration: none;
      color: inherit;
    }

    a:hover {
      text-decoration: none;
      color: #333;
    }

    .page-link {
      color: inherit;
    }
  </style>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mt-md-5 mt-3">

      @foreach($posts as $post)
      <a href="{{ url('/blog/'.$post->slug)}}">
        <h2>
          {{ $post->title }}
        </h2>
      </a>
      <h3 class="text-muted">
        {{ $post->subtitle }}
      </h3>
      <p class="">Af Forfatter skrevet {{ $post->created_at->format('F Y') }}
      </p>
      <hr>
      @endforeach

      {{ $posts->links() }}

      </div>
    </div>
  </div>
</div>
@endsection
