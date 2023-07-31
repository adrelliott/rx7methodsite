<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Truth Lies & Work') }}</title>

        <!-- Fonts -->
        <link rel="preload" href="/assets/fonts/Hubot-Sans.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="/assets/fonts/Mona-Sans.woff2" as="font" type="font/woff2" crossorigin>
        

        <!-- Scripts & Styles-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
<body class="antialiased font-mona">

    {{ $slot }}
    
</body>
</html>
