@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="post" action="/blog">
            @csrf

            <div class="form-group">
              <label for="title" class="label">Titel *</label>
              <input class="form-control" type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
              <label for="subtitle" class="label">Undertitel</label>
              <input class="form-control" type="text" id="subtitle" name="subtitle">
            </div>

            <div id="toolbar-container"></div>
            <div class="form-group">
              <label for="body" class="label">Tekst *</label>
              <textarea id="body" class="form-control" name="body"></textarea>
            </div>
            <button class="btn btn-secondary">Udgiv</button>
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
    plugins: 'link code autoresize',
    autoresize_bottom_margin: 5,
    menubar: false
  });
  </script>

@endsection
