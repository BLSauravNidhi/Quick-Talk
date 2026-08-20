<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/components.css'])
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <title>@yield('page-title')</title>
    @stack('page-scripts')
</head>
<body>
    @include('components.nav-bar')
    @yield('page-contents')
    {{-- @include('components.bottom-nav') --}}
</body>
</html>