@extends('layouts.app')

@section('pageTitle', 'Blog | Rosengårdens Kiropraktik')

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

    .pagination {
      justify-content: center;
    }
  </style>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-body">
          <div class="col-md-8 offset-md-2 text-center mb-3 mt-3">

            @foreach($posts as $post)
            <a href="{{ url('/blog/'. $post->slug)}}">
              <h2>
                {{ $post->title }}
              </h2>
            </a>
            <h5 class="text-muted">
              {{ $post->subtitle }}
            </h5>
            <p class="text-muted">
              {{ $post->created_at->formatLocalized('%d') }}
              {{ ucfirst($post->created_at->formatLocalized('%B')) }}
            </p>
            <hr>
            @endforeach

              {{ $posts->links() }}

            </div>
        </div>

      </div>

    </div>

    </div>
  </div>
</div>
@endsection
