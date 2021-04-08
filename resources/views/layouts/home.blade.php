<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Delicious Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/icofont/icofont.min.css" rel="stylesheet')}}">
    <link href="{{asset('user/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/venobox/venobox.css" rel="stylesheet')}}">
    <link href="{{asset('user/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Delicious - v2.2.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('user.components.header')

    <main id="main">
        @include('user.components.slide')
        <!-- ======= About Section ======= -->
        @include('user.components.introduce')
        <!-- ======= Whu Us Section ======= -->
        @include('user.components.credibility')
        <!-- ======= Menu Section ======= -->
        @include('user.components.menu')
        <!-- ======= Events Section ======= -->
        @include('user.components.event')
        <!-- ======= Gallery Section ======= -->
        @include('user.components.gallery')
        <!-- ======= bartender Section ======= -->
        @include('user.components.bartender')
        <!-- ======= Testimonials Section ======= -->
        @include('user.components.testimonials')
        <!-- ======= Contact Section ======= -->
        @include('user.components.contact')
        <!-- End Contact Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('user.components.footer')
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('user/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('user/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
    <script src="{{asset('user/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('user/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('user/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>