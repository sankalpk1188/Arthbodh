<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <title>@if(!empty($meta_title)){{ $meta_title }} @else {{config('app.name')}} @endif</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(!empty($meta_description))
    <meta name="description" content="{{ $meta_title }}">
    @else
    <meta name="description" content="{{config('app.name')}}"> @endif

    <meta property="og:title" content="{{config('app.name')}}" />
    <meta property="og:type" content="site" />
    <meta property="og:description" content="{{config('app.name')}}" />
    <meta property="og:url" content="{{url('/')}}" />

    <meta name="twitter:title" content="{{config('app.name')}}">
    <meta name="twitter:description" content="{{config('app.name')}}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/aos.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rsmenu-main.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/inc/custom-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/inc/custom-slider/css/preview.css')}}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rsmenu-transitions.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
    <!-- rs animations css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-animations.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    @yield('styles')
</head>

<body class="home-eleven">
    <!-- Preloader area start here -->
    <div id="loader" class="loader">
        <div class="spinner"></div>
    </div>
    <!--End preloader here -->




    <!-- Page Header-->
    @include('layouts/frontLayout/front_header')

    @yield('content')

    <!-- Page Footer-->
    @include('layouts/frontLayout/front_footer')




    <!-- modernizr js -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
    <!-- jquery latest version -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Menu js -->
    <script src="{{asset('assets/js/rsmenu-main.js')}}"></script>
    <!-- op nav js -->
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- Slick js -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- aos js -->
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <!-- Skill bar js -->
    <script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- counter top js -->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <!-- video js -->
    <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- magnific popup js -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nivo slider js -->
    <script src="{{asset('assets/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- parallax-effect js -->
    <script src="{{asset('assets/js/parallax-effect.min.js')}}"></script>
    <!-- contact form js -->
    <script src="{{asset('assets/js/contact.form.js')}}"></script>
    <!-- ProgressBar Js -->
    <script src="{{asset('assets/js/jQuery-plugin-progressbar.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/js/main.js')}}"></script>




    @yield('scripts')

</body>

</html>