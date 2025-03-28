<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AHM | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
</head>
<body>
    @include('partial/navbar')
    @yield('main')
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>