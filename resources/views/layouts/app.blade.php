<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $( '.button_container' ).click(function() {
        $( this ).toggleClass( "active" );
        $( '#overlay' ).toggleClass( "open" );
      });
    });

    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div style="height: 2px; background-color: #C75B3A">
    </div>
    <div id="app">

        @include('components.nav')
        {{-- @include('cookieConsent::index') --}}

        <main>
            @yield('content')
        </main>



        @include('components.footer')

        @include('components.overlay')

    </div>

    @yield('javascript')
</body>
</html>
