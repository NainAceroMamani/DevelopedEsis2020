<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
        <script src="https://kit.fontawesome.com/882059baa9.js" crossorigin="anonymous"></script>
        <!-- ----------Styles------ -->
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('css/niceselect.css') }}">
        <!-- Fancy Box CSS -->
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
        <!-- Fancy Box CSS -->
        <link rel="stylesheet" href="{{ asset('css/cube-portfolio.min.css') }}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <!-- Slick Nav CSS -->
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- owl carousel min css -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

        <!-- Eduland Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <!-- Eduland Colors -->
        <link rel="stylesheet" href="{{ asset('css/colors/color1.css') }}">
        
        @yield('styles')
        
    </head>
<body>

    @include('include.home.header')

    @yield('content')

    @include('include.home.footer')
    
    <!-- Jquery JS-->
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    @yield('scripts')
    
    <!-- Colors JS-->
    <script src="{{ asset('js/colors.js') }}"></script>
    <!-- Popper JS-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel JS-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Jquery Steller JS -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Final Countdown JS not used -->
    <script src="{{ asset('js/finalcountdown.min.js') }}"></script>
    <!-- Fancy Box JS-->
    <script src="{{ asset('js/facnybox.min.js') }}"></script>
    <!-- Magnific Popup JS-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('js/niceselect.js') }}"></script>
    <!-- Jquery Steller JS-->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Jquery Steller JS-->
    <script src="{{ asset('js/cube-portfolio.min.js') }}"></script>
    <!-- Slick Nav JS-->
    <script src="{{ asset('js/slicknav.min.js') }}"></script>
    <!-- Easing JS-->
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <!-- Waypoints JS-->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- Counter Up JS not used-->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Scroll Up JS-->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- Gmaps JS-->
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Video JS-->
    <script src="//vjs.zencdn.net/6.6.3/video.js"></script>
    <!-- Countdown JS-->
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>

</body>

</html>