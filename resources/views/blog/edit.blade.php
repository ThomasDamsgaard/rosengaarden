@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
          <form method="post" action="{{ action('Blog\BlogController@update', $id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <div class="form-group">
              <label for="title" class="label">Titel *</label>
              <input class="form-control" type="text" id="title" name="title" value="{{ $post->title }}" required>
            </div>

            <div class="form-group">
              <label for="subtitle" class="label">Undertitel *</label>
              <input class="form-control" type="text" id="subtitle" name="subtitle" value="{{ $post->subtitle }}">
            </div>

            <div id="toolbar-container"></div>
            <div class="form-group">
              <label for="body" class="label">Tekst *</label>
              <textarea id="body" class="form-control body" name="body">{!! old('body', $post->body) !!}</textarea>
            </div>

            <button class="btn btn-secondary">Ændre</button>
          </form>

        </div>
    </div>
</div>
@endsection

@section('javascript')
  <!-- Configure by going to: https://www.tiny.cloud/docs/ -->
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=gz7rhv963gm02yjxt8r92mmm860nq7xa8h7v7i6fdbnokqy2"></script>

  <script type="text/javascript">
    var editor_config = {
    path_absolute : "/",
    selector: "textarea.body",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern autoresize"
    ],
    toolbar: "insertfile undo redo | styleselect | italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
  </script>

@endsection
