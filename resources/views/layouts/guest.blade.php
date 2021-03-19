<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @if(app('env')=='local')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @endif
        @if(app('env')=='production')
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        @endif

        <!-- Scripts -->
        @if(app('env')=='local')
        <script src="{{ asset('js/app.js') }}" defer></script>
        @endif
        @if(app('env')=='production')
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        @endif
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
