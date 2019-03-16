@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                  <a class="btn btn-outline-secondary" href="/blog/create" role="button">
                    Nyt Indlæg
                  </a>
                </div>

                <div class="card-body">
                  <p>Alle Blog Indlæg</p>
                  <hr>

                  @foreach($posts as $post)
                  <div class="row">
                    <div class="col-8">
                      {{ $post->title }}
                    </div>
                    <div class="col-2">
                      <a class="btn btn-outline-dark btn-sm"
                      href="{{ action('Blog\BlogController@edit', $post->id) }}">
                        Ændre Indlæg
                      </a>
                    </div>
                    <div class="col-2">
                      <form onsubmit="return deleteConfirmation()" action="{{ action('Blog\BlogController@destroy', $post->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                          Slet
                        </button>
                      </form>
                    </div>
                  </div>
                  <hr>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')

<script type="text/javascript">
function deleteConfirmation() {
  if (confirm('Er du sikker på du vil slette blog indlægget? Dette kan ikke gøres om!')) {
    return true;
  } else {
    return false;
  }
}
</script>

@endsection
