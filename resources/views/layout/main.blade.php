<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ Vite::asset('public/favicon.ico') }}" type="image/x-icon">
        <title>Laravel Comics | @yield('title')</title>
        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>

<header>
    @include('partials.header')

</header>
<body>
        @include('partials.jumbotron')

        @yield('content')

        @include('partials.footer')

    </body>
</html>
