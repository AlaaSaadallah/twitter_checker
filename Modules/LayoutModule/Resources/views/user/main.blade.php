<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{asset('theme/modules/bootstrap/css/bootstrap.min.css')}}">
        <link rel="shortcut icon" type="image/png" href="{{ url('theme/img/logo.png') }}"/>
  <title>Twitter Checker</title>

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="{{asset('theme/modules/fontawesome/css/all.min.css')}}">

        <link rel="stylesheet" href="{{asset('theme/modules/jqvmap/dist/jqvmap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/summernote/summernote-bs4.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/prism/prism.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/datatables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/izitoast/css/iziToast.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/dropzonejs/dropzone.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/modules/bootstrap-daterangepicker/daterangepicker.css')}}">


        <!-- Template CSS -->
        <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/components.css')}}">

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
        <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                        dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-94034622-3');
        </script>
        <!-- /END GA -->
        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="{{asset('theme/css/custom.css')}}">

</head>

<body>
        <div id="app">
                <div class="main-wrapper main-wrapper-1">
                        <!-- @include('layoutmodule::user.sidebar') -->

                        @yield('content')
                        <!-- Main Content -->
                        <div class="main-content">
                                <section class="section">
                                </section>
                        </div>
                        @include('layoutmodule::user.footer')
                </div>
        </div>

        <!-- General JS Scripts -->
        <script src="{{asset('theme/modules/jquery.min.js')}}"></script>
        <script src="{{asset('theme/modules/popper.js')}}"></script>
        <script src="{{asset('theme/modules/tooltip.js')}}"></script>
        <script src="{{asset('theme/modules/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('theme/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('theme/modules/moment.min.js')}}"></script>
        <script src="{{asset('theme/js/stisla.js')}}"></script>

        <!-- JS Libraies -->
        <script src="{{asset('theme/modules/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('theme/modules/chart.min.js')}}"></script>
        <script src="{{asset('theme/modules/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
        <script src="{{asset('theme/modules/summernote/summernote-bs4.js')}}"></script>
        <script src="{{asset('theme/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
        <script src="{{asset('theme/modules/prism/prism.js')}}"></script>
        <script src="{{asset('theme/modules/sweetalert/sweetalert.min.js')}}"></script>
        <script src="{{asset('theme/modules/izitoast/js/iziToast.min.js')}}"></script>
        <!-- <script src="{{asset('theme/modules/cleave-js/dist/cleave.min.js')}}"></script> -->
        <!-- <script src="{{asset('theme/modules/cleave-js/dist/addons/cleave-phone.us.js')}}"></script> -->
        <script src="{{asset('theme/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('theme/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>


        <!-- DATATABLE   -->
        <script src="{{asset('theme/modules/datatables/datatables.min.js')}}"></script>
        <script src="{{asset('theme/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('theme/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>
        <script src="{{asset('theme/modules/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->

        <!-- Page Specific JS File -->
        <script src="{{asset('theme/js/page/index.js')}}"></script>
        <script src="{{asset('theme/js/page/bootstrap-modal.js')}}"></script>
        <script src="{{asset('theme/js/page/modules-datatables.js')}}"></script>
        <script src="{{asset('theme/js/page/modules-sweetalert.js')}}"></script>
        <!-- <script src="{{asset('theme/js/page/forms-advanced-forms.js')}}"></script> -->

        <!-- Template JS File -->
        <script src="{{asset('theme/js/scripts.js')}}"></script>
        <script src="{{asset('theme/js/custom.js')}}"></script>
        @stack('scripts')
</body>

</html>

