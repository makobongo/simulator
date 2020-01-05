<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> --}}
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container-fluid">
                @include('auth.register');
                {{-- <router-view></router-view> --}}
            </div>
        </div>
        <script>
            var BASE_URL = "{{ URL::to('/') }}";
        </script>
        {{-- <script src="/js/app.js"></script> --}}
    </body>
</html>
