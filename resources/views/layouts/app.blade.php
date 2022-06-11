<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap-bundle.js') }}" defer></script>
    <script src="{{ asset('js/menu_lateral.js') }}" defer></script>
    <script src="{{ asset('js/admin_role.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/5fcb4a443a.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap-sass.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_role.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_produto.css') }}" rel="stylesheet">
    <style>
        .py-lg-5 {
            padding-top: 5rem!important;
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('menu_lateral')
        @yield('header')
        <main class="py-5">
            @yield('content')
        </main>
        @yield('login')
    </div>

</body>
</html>
