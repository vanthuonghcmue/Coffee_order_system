<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
        <i class="icofont-phone"></i> +84 345 197 641
        <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="{{ route('home') }}"><span>Luxury</span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#chefs">Chefs</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('user.products.showProduct') }}">Product</a></li>
                <li><a href="{{ route('user.cart.show') }}">Cart</a></li>
                @if (Auth::check())
                    <li class="dropdown dropdown-right active open ">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown"
                            aria-expanded="true">{{ Auth::user()->name }} </a>
                        <ul class="dropdown-menu" role="menu" style="background-color: #000000;">
                            <li class=""><a href="{{ route('user.profile.show') }}" class="">My Profile </a></li>
                            <li class=""><a href="#" class="">Favorited Snippets </a></li>
                            <li class=""><a href="{{ route('user.profile.order') }}" class="">Ordered</a></li>
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
