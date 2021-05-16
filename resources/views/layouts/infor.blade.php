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
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/icofont/icofont.min.css" rel="stylesheet') }}">
    <link href="{{ asset('user/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/venobox/venobox.css" rel="stylesheet') }}">
    <link href="{{ asset('user/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<body>
    <header id="header" class=" d-flex align-items-center header-transparent" style="background-color:#000000;">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><span>Luxury</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#specials">Specials</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#chefs">Chefs</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{ route('user.products.showProduct') }}">Product</a></li>
                    @if (Auth::check())
                        <li class="dropdown dropdown-right active open ">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown"
                                aria-expanded="true">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" style="background-color: #000000;">
                                <li class=""><a href="{{ route('user.profile.show') }}" class="">My Profile <img
                                            src="https://secure.gravatar.com/avatar/e524b5a519936d173d8dda6b9268af51?s=100&amp;r=g&amp;d=mm"
                                            width="18px" class="pull-right"></a></li>
                                <li class=""><a href="#" class="">Favorited Snippets <span
                                            class="pull-right glyphicon glyphicon-star"></span></a></li>
                                <li class=""><a href="{{ route('user.profile.order') }}" class="">Ordered</a></li>s
                                <li class=""><a href="#" class="">Settings <span
                                            class="pull-right glyphicon glyphicon-cog"></span></a></li>
                                <li><a href="{{ route('logout') }}" class="">Logout <span
                                            class="pull-right glyphicon glyphicon-log-out"></span></a></li>
                            </ul>
                        </li>
                    @else
                        <li class="book-a-table text-center"><a href="{{ route('login') }}">Login</a></li>
                    @endif
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <div class="container bootstrap snippets bootdey">
        <div class="row">
            @yield('avatar')
            <div class="profile-info col-md-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        Your information - our dedicated care
                    </div>

                    <div class="panel-body bio-graph-info">
                        <h1>Edit your profile</h1>
                        <div class="row">

                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('user/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('user/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('user/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('user/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('user/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('user/js/main.js') }}"></script>
</body>
