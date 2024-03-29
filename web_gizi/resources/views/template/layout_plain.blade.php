<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gizi Seimbang Tubuh Sehat</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{url('assets/assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('assets/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('assets/assets/css/style.css')}}" rel="stylesheet">
    @yield('header')
    <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">

    </header><!-- End Header -->

    @yield('corosel')

    <main id="main">
        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">





        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('assets/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{url('assets/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('assets/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{url('assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('assets/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{url('assets/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('assets/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('assets/assets/js/main.js')}}"></script>
    @yield('script')

</body>

</html>