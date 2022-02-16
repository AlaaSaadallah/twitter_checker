<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Adminstration Panel">
    <meta name="keywords" content="Adminstration Panel">
    <meta name="author" content="PIXINVENT">
  <link rel="shortcut icon" type="image/png" href="{{ url('theme/img/logo.png') }}"/>
  <title>Twitter Checker</title>
 

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('theme/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('theme/modules/bootstrap-social/bootstrap-social.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet"> <!-- Start GA -->
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('theme/modules/izitoast/css/iziToast.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/components.css')}}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">


</head>

<!-- <body class="vertical-layout vertical-mmenu 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-mmenu" data-col="1-column"> -->
<body>
    
  
@yield('content')

    <!-- ////////////////////////////////////////////////////////////////////////////-->



    <script src="{{asset('theme/modules/jquery.min.js')}}"></script>
    <script src="{{asset('theme/modules/popper.js')}}"></script>
    <script src="{{asset('theme/modules/tooltip.js')}}"></script>
    <script src="{{asset('theme/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('theme/modules/moment.min.js')}}"></script>
    <script src="{{asset('theme/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('theme/modules/izitoast/js/iziToast.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{asset('theme/js/page/modules-sweetalert.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('theme/js/scripts.js')}}"></script>
    <script src="{{asset('theme/js/custom.js')}}"></script>
    @stack('scripts')

</body>

</html>