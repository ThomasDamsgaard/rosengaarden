<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animated-dropdown.css') }}" rel="stylesheet">
    <style media="screen">
        html, body {
            background-color: #F5F8FA;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        #footer {
          font-size: 0.6rem;
        }
    </style>
    @yield('css')
</head>
<body>
    <div class="fixed-top" style="height: 2px; background-color: #C75B3A">  
    </div>
    <div id="app">

        @include('components.nav')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

    </div>

    @yield('javascript')
</body>
</html>
