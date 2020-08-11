<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- BEGIN LARAVEL STYLES -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- END LARAVEL STYLES -->

    <!-- BEGIN BOOTSTRAP STYLES -->
    <!-- <link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- END BOOTSTRAP STYLES -->

    <!-- BEGIN INCLUSION OF FONT AWESOME -->
    <!-- <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('font-awesome-old/css/font-awesome.min.css') }}"> -->
    <!-- END INCLUSION OF FONT AWESOME -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <!-- <link href="{{ URL::asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" /> -->
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- <link href="{{ URL::asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('css/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" /> -->
    <!-- END THEME LAYOUT STYLES -->
    
    <!-- BEGIN CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">
    <!-- END CUSTOM STYLES -->
</head>
<body>
    @yield('content')
</body>
</html>
