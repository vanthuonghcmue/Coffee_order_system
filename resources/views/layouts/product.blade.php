<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{asset('user/vendor/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('user/vendor/css/responsive.css')}}" rel="stylesheet">
    <title>Delicious Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <section id="advertisement">

        <div class="container">
            @include('user.components.header')
            <img src="{{asset('user/img/bar.jpg')}}" alt="" />
        </div>
    </section>

    

    <main id="main">
        <section>
            <div class="container">
                <div class="row">
                    <!--categories-->
                    <div class="col-md-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                @include('productPage.categories')
                            </div>
                            <!--/category-productsr-->
                            <div class="price-range">
                                <!--price-range-->
                                <h2>Price Range</h2>
                                <div class="well">
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2"><br />
                                    <b>$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                            </div>
                            <!--/price-range-->

                            <div class="shipping text-center">
                                <!--shipping-->
                                <img src="{{asset('user/img/gallery/gallery-1.jpg')}}" alt="" />
                            </div>
                            <!--/shipping-->

                        </div>
                    </div>

                    <!--products-->
                    <div class="col-md-9 padding-right">
                        <div class="features_items">
                            <!--features_items-->
                            <h2 class="title text-center">Features Items</h2>
                            @include('productPage.productsInfo')
                            <ul class="pagination">
                                <li class="active"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">&raquo;</a></li>
                            </ul>
                        </div>
                        <!--features_items-->
                    </div>
                    <!--END PRODUCT-->
                </div>
            </div>
        </section>

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
    <script src="{{asset('user/vendor/owl.carousel/owl.carousel.min.js')}}"></script>44
    <!-- Template Main JS File -->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
