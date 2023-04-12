<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @push('title')
            <title>LogIn</title>
        @endpush

        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >
        <div >
            <div>
                <a href="/">
                    <x-application-logo />
                </a>
            </div>

            <div >
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
