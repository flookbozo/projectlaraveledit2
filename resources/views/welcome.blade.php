<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Blood Donate</title>

        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body>
        <div id="app"></div>

        <script>
            var BASE_URL = '{{ URL::to('/') }}';
        </script>

        <script src="{{ secure_asset('js/app.js') }}"></script>
    </body>
</html>
