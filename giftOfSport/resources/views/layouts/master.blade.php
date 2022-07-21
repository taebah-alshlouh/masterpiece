<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico')}}" rel="icon"> 
    
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
  
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <!------------- animate ---------->
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  
    <link rel="stylesheet" href="../assets/vendor/fancybox/css/jquery.fancybox.css">
  
    <link rel="stylesheet" href="../assets/css/theme.css">

    <script src="https://kit.fontawesome.com/489a9be180.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.foo')
    @yield('script')
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
    <script src="../assets/vendor/wow/wow.min.js"></script>
  
    <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>
  
    <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
  
    <script src="../assets/js/google-maps.js"></script>
  
    <script src="../assets/js/theme.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>






