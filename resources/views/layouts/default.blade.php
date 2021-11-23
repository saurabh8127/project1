<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    {{-- @include('components.preloader')--}}
    {{-- @include('components.header')  --}}

    @yield('content')
{{-- 
    @include('components.footer')
    @include('components.backToTop') --}}

    <!-- Scripts -->
    <script src="{{ asset('/js/vendor/tiny-slider.js') }}" defer></script>
    <script src="{{ asset('/js/vendor/count-up.min.js') }}" defer></script>
    <script src="{{ asset('/js/vendor/wow.min.js') }}" defer></script>
    <script src="{{ asset('/js/vendor/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('/js/vendor/polyfill.js') }}" defer></script>
    <script src="{{ asset('/js/vendor/main.js') }}" defer></script>
</body>
</html>