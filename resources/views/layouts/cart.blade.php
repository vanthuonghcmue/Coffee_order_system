<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('user/vendor/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('user/vendor/css/responsive.css') }}" rel="stylesheet">
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
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->


</head>


<body>

    <!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Hinh/td>
                            <td class="description">Tên sp</td>
                            <td class="price">Giá</td>
                            <td class="quantity">số lượng</td>
                            <td class="total">Size</td>
                            <td class="total">Topping</td>
                            <td class="total">Đường</td>
                            <td class="total">Đá</td>

                            <td class="total"></td>

                            <td class="total"></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>

                        @if (session('cart'))
                            @foreach (session('cart') as $id => $product)
                                <td class="cart_product">
                                    <a href=""><img src="" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="">{{ $product['name'] }}</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>{{ $product['price'] }}</p>
                                </td>

                                <td class="cart_quantity">
                                    <input type="number" value="{{ $product['quantity'] }}" disabled>
                                </td>

                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        {{ $product['size'] == 1 ? 'S' : ($product['size'] == 2 ? 'M' : 'L') }}</p>
                                </td>

                                <td class="cart_total">
                                    <p class="cart_total_price">
                                        {{ $product['topping'] == 1 ? 'chân châu' : ($product['topping'] == 2 ? 'thạch' : 'Kem chese') }}

                                    </p>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{ $product['sugar'] }} %</p>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">{{ $product['ice'] }}%</p>
                                </td>
                                <td class="cart_total">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#product{{ $id }}">
                                        Edit
                                    </button>


                                    <!--modal-->
                                    <form action="{{route('user.cart.update',$id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal fade" id="product{{ $id }}">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Thêm sản phẩm vào giỏ hàng</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="product-details">
                                                            <!--product-details-->
                                                            <div class="col-sm-5">
                                                                <div class="view-product">
                                                                    <img src="" alt="" />
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="product-information">
                                                                    <!--/product-information-->


                                                                    <h1>{{ $product['name'] }}</h1>


                                                                    <span>
                                                                        <span>US $59</span>
                                                                        <label>Quantity:</label>
                                                                        <input type="number" value="{{$product['quantity']}}"
                                                                            name="quantity" />
                                                                    </span>

                                                                    <table class="table">

                                                                        <tbody>
                                                                            <tr><label>Size:</label></tr>
                                                                            <tr>
                                                                                <select class="form-select"
                                                                                    aria-label="Disabled select example"
                                                                                    name="size">
                                                                                    <option value="1"
                                                                                        {{ 1 == $product['size'] ? "selected ='selected'" : ' ' }}>
                                                                                        S
                                                                                    </option>
                                                                                    <option value="2"
                                                                                        {{ 2 == $product['size'] ? "selected ='selected'" : ' ' }}>
                                                                                        M</option>
                                                                                    <option value="3"
                                                                                        {{ 3 == $product['size'] ? "selected ='selected'" : ' ' }}>
                                                                                        L</option>
                                                                                </select>
                                                                            </tr>
                                                                    </table>

                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Topping</th>
                                                                                <th scope="col">Chân châu</th>
                                                                                <th scope="col">Thạch </th>
                                                                                <th scope="col">Kem chese</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th></th>
                                                                                <td><input type="checkbox"
                                                                                        name="topping" value="1" {{1 == $product['topping'] ? "checked" : ' '}}></td>
                                                                                <td><input type="checkbox"
                                                                                        name="topping" value="2" {{2 == $product['topping'] ? "checked" : ' '}}></td>
                                                                                <td><input type="checkbox"
                                                                                        name="topping" value="3" {{3 == $product['topping'] ? "checked" : ' '}}></td>
                                                                            </tr>
                                                                    </table>
                                                                    <table class="table">
                                                                        <tr><label>Đường :</label></tr>
                                                                        <tr>
                                                                            <select class="form-select"
                                                                                aria-label="Disabled select example"
                                                                                name="sugar">
                                                                                <option value="0"  {{0 == $product['sugar'] ? "selected" : ' '}} >0%</option>
                                                                                <option value="25" {{25 == $product['sugar'] ? "selected" : ' '}}>25%</option>
                                                                                <option value="50" {{50 == $product['sugar'] ? "selected" : ' '}}>50%</option>
                                                                                <option value="75" {{75 == $product['sugar'] ? "selected" : ' '}}>75%</option>
                                                                                <option value="100" {{100 == $product['sugar'] ? "selected" : ' '}}>100%</option>
                                                                            </select>
                                                                        </tr>
                                                                        <tr><label>Đá: </label></tr>
                                                                        <tr>
                                                                            <select class="form-select"
                                                                                aria-label="Disabled select example"
                                                                                name="ice">
                                                                                <option value="0"  {{0 == $product['ice']? "selected" : ' '}}  >0%</option>
                                                                                <option value="25" {{25 == $product['ice'] ? "selected" : ' '}} >25%</option>
                                                                                <option value="50" {{50 == $product['ice'] ? "selected" : ' '}} >50%</option>
                                                                                <option value="75" {{75 == $product['ice'] ? "selected" : ' '}} >75%</option>
                                                                                <option value="100" {{100 == $product['ice'] ? "selected" : ' '}} >100%</option>
                                                                            </select>
                                                                        </tr>

                                                                    </table>


                                                                </div>
                                                                <!--/product-information-->
                                                            </div>
                                                        </div>
                                                        <!--/product-details-->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="row">
                                                            <button type="submit" class="btn btn-warning"> Thay đổi</button>
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Hủy</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>


                                </td>
                                <td class="cart_total">
                                    <a href="{{route('user.cart.delete',$id)}}" class="btn btn-danger btn-lg active" role="button"
                                        aria-pressed="true">Delete</a>
                                </td>
                                </tr>

                            @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your
                    delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <ul class="user_option">
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>

                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>$59</span></li>
                            <li>Eco Tax <span>$2</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>$61</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Online Help</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Order Status</a></li>
                                <li><a href="">Change Location</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">T-Shirt</a></li>
                                <li><a href="">Mens</a></li>
                                <li><a href="">Womens</a></li>
                                <li><a href="">Gift Cards</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privecy Policy</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href="">Billing System</a></li>
                                <li><a href="">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Company Information</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Store Location</a></li>
                                <li><a href="">Affillate Program</a></li>
                                <li><a href="">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
