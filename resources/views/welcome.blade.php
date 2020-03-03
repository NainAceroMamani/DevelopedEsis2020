<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/882059baa9.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link href="{{ asset('css/Styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                @include('includes.header')
            </div>
            <div class="mh-100" style="height:60px"></div>
            <div class="">
                @include('includes.section')
                <div class="mh-100" style="height:500px"></div>
            </div>
            <div class="content">
                @include('includes.footer')
            </div>
        </div>
    </body>
</html>
