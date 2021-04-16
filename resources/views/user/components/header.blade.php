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
      <h1 class="text-light"><a href="index.html"><span>Luxury</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
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
        @if (Auth::check())
        <li class="book-a-table text-center">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
                <a href=""><button type="submit">Logout</button></a>
        </form>
        </li>
        @else
        <li class="book-a-table text-center"><a href="{{route('login')}}">Login</a></li>
        @endif
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->
