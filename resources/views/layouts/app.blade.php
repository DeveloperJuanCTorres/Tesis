<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Migraciones') }}</title>
    <?php
            $version = '1993.0.2';
        ?>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logos/favicon.png')}}?v=<?php echo $version ?>">
    <link href="{{asset('assets/css/styles.css')}}?v=<?php echo $version ?>" rel="stylesheet">
    <link href="{{asset('assets/css/styles.min.css')}}?v=<?php echo $version ?>" rel="stylesheet">
    <link href="{{asset('assets/css/mystyles.css')}}?v=<?php echo $version ?>" rel="stylesheet">
    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    <div id="app" class="py-0">
        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{asset('lib/easing/easing.min.js')}}?v=<?php echo $version ?>"></script>

    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}?v=<?php echo $version ?>"></script>
  <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}?v=<?php echo $version ?>"></script>
  <script src="{{asset('assets/js/sidebarmenu.js')}}?v=<?php echo $version ?>"></script>
  <script src="{{asset('assets/js/app.min.js')}}?v=<?php echo $version ?>"></script>
  <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}?v=<?php echo $version ?>"></script>
  <script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}?v=<?php echo $version ?>"></script>
  <script src="{{asset('assets/js/dashboard.js')}}?v=<?php echo $version ?>"></script>
</body>
</html>
