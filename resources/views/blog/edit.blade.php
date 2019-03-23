@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="post" action="{{ action('Blog\BlogController@update', $id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <div class="form-group">
              <label for="title" class="label">Titel *</label>
              <input class="form-control" type="text" id="title" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
              <label for="subtitle" class="label">Undertitel</label>
              <input class="form-control" type="text" id="subtitle" name="subtitle" value="{{ $post->subtitle }}">
            </div>

            {{-- <div id="toolbar-container"></div>
            <div class="form-group">
              <label for="body" class="label">Tekst *</label>
              <textarea id="body" class="form-control" name="body">{{ $post->body }}</textarea>
            </div> --}}

            <input id="x" type="hidden" name="body" value="{{ $post->body }}">
            <trix-editor input="x"></trix-editor>

            <button class="btn btn-secondary">Ændre</button>
          </form>

        </div>
    </div>
</div>
@endsection

@section('javascript')
<!-- Configure by going to: https://www.tiny.cloud/docs/ -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gz7rhv963gm02yjxt8r92mmm860nq7xa8h7v7i6fdbnokqy2"></script>

<script>
  tinymce.init({
    selector: '#body',
    plugins: 'link code',
    menubar: false
  });
  </script>

@endsection
