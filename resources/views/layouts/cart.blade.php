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
    <header id="advertisement">
        @include('user.components.header')
        <img src="{{asset('user/img/bar.jpg')}}" alt="" />
    </header>

    <!--/header-->
   
    <section id="cart_items">
        <div class="container">
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                @if (session('notice'))
                <div class="alert alert-success" role="alert">
                    {{ session('notice') }}
                </div>
                @endif
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Hinh </td>
                            <td class="description">Tên sản phẩm</td>
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
                        <tr>
                        <td class="cart_description">
                            <img src="{{( '../../storage/app/product/'.  $product['image']) }}"style=" with: 100px; height : 40px ; object-fit: contain;" alt="">
                        </td>
                        <td class="cart_description">
                            <h4>{{ $product['name'] }}</h4>
                        </td>
                        <td class="cart_price">
                        <h4>{{ number_format($product['price']) }}</h4>
                        </td>

                        <td class="cart_description">
                            <h4>{{ $product['quantity'] }}</h4>
                        </td>

                        <td class="cart_total">
                            <h4>
                                {{ $product['size'] == 'S' ? 'S' : ($product['size'] == 'M' ? 'M' : 'L') }}
                            </h4>
                        </td>

                        <td class="cart_total">
                            <h4>
                               @foreach($toppings as $topping)
                                   @if( $topping->IdTopping == $product['topping'] )
                                    {{ $topping->name}}
                                    @endif
                                @endforeach
                            <h4>
                            </p>
                        </td>
                        <td class="cart_total">
                            <h4>{{ $product['sugar'] }} %</h4>
                        </td>
                        <td class="cart_total">
                           <h4>{{ $product['ice'] }}% <h4>
                        </td>
                        <td class="cart_total">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product{{ $id }}">
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
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Thêm sản phẩm vào giỏ hàng</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="product-details">
                                                    <!--product-details-->
                                                    <div class="col-sm-5">
                                                        <div class="view-product">
                                                            <img src="{{( '../../storage/app/product/'.$product['image']) }}"style=" with: 280px; height : 160px ; object-fit: contain;" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="product-information">
                                                            <!--/product-information-->
                                                            <h1>{{ $product['name'] }}</h1>
                                                            <span>
                                                                <span></span>
                                                                <label>Quantity:</label>
                                                                <input type="number" value="{{$product['quantity']}}" name="quantity" />
                                                            </span>

                                                            <table class="table">
                                                                <tbody>
                                                                    <tr><label>Size:</label></tr>
                                                                    <tr>
                                                                        <select class="form-select" aria-label="Disabled select example" name="size">
                                                                            <option value="S" {{ 'S' == $product['size'] ? "selected ='selected'" : ' ' }}>
                                                                                S
                                                                            </option>
                                                                            <option value="M" {{ 'M' == $product['size'] ? "selected ='selected'" : ' ' }}>
                                                                                M</option>
                                                                            <option value="L" {{ 'L' == $product['size'] ? "selected ='selected'" : ' ' }}>
                                                                                L</option>
                                                                        </select>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Topping</th>
                                                                        @foreach($toppingoptions as $option)
                                                                            @if($option->IdProduct == $id)
                                                                                @foreach($toppings as $topping)
                                                                                    @if($topping->IdTopping == $option->IdTopping)
                                                                                    <th scope="col">{{$topping->name}}</th>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th></th>
                                                                        @foreach($toppingoptions as $option)
                                                                            @if($option->IdProduct == $id)
                                                                                @foreach($toppings as $topping)
                                                                                    @if($topping->IdTopping == $option->IdTopping)
                                                                                        <td><input type="checkbox" name="topping" value={{$topping->IdTopping}}  {{$topping->IdTopping == $product['topping'] ? "checked" : ' '}}></td>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                        @endforeach
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table">
                                                                <tr><label>Đường :</label></tr>
                                                                <tr>
                                                                    <select class="form-select" aria-label="Disabled select example" name="sugar">
                                                                        <option value="0" {{0 == $product['sugar'] ? "selected" : ' '}}>0%</option>
                                                                        <option value="25" {{25 == $product['sugar'] ? "selected" : ' '}}>25%</option>
                                                                        <option value="50" {{50 == $product['sugar'] ? "selected" : ' '}}>50%</option>
                                                                        <option value="75" {{75 == $product['sugar'] ? "selected" : ' '}}>75%</option>
                                                                        <option value="100" {{100 == $product['sugar'] ? "selected" : ' '}}>100%</option>
                                                                    </select>
                                                                </tr>
                                                                <tr><label>Đá: </label></tr>
                                                                <tr>
                                                                    <select class="form-select" aria-label="Disabled select example" name="ice">
                                                                        <option value="0" {{0 == $product['ice']? "selected" : ' '}}>0%</option>
                                                                        <option value="25" {{25 == $product['ice'] ? "selected" : ' '}}>25%</option>
                                                                        <option value="50" {{50 == $product['ice'] ? "selected" : ' '}}>50%</option>
                                                                        <option value="75" {{75 == $product['ice'] ? "selected" : ' '}}>75%</option>
                                                                        <option value="100" {{100 == $product['ice'] ? "selected" : ' '}}>100%</option>
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
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td class="cart_total">
                            <a href="{{route('user.cart.delete',$id)}}" class="btn btn-danger edit " role="button" aria-pressed="true">Delete</a>
                        </td>
                        @endforeach
                        @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Tổng tiền <span>{{number_format($price)}}</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>{{number_format($price)}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="{{route('user.order.store')}}">Order</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#do_action-->
    @include('user.components.footer')
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
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