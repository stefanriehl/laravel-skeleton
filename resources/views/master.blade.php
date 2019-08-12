<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name"description" content="">
        <meta name"keywords" content="Stefan Riehl, IT Consulting, Software Development, Laravel Development">

        <title>{{ $title ?? env('APP_NAME') }}</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>
    <body>

        <div class="text-center">
            @yield('content')
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>
