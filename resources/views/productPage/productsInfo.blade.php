    @foreach ($products as $prd)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    @foreach($sizes as $size)
                        @if($prd->slug == $size->product_name && $size->Size=='S')
                        <img src="{{ ('../../../storage/app/product/'.$size->image) }}"  style=" with: 280px; height : 160px ; object-fit: contain;" alt="" />
                        <h2>{{ $prd->discount > 0 ? number_format($size->Price- $size->Price * $prd->discount / 100) :  number_format($size->Price)   }} VNĐ</h2>
                        <h3><del>{{ number_format($size->Price) }} VNĐ</del></h3>
                        @endif
                    @endforeach
                    <h1>
                        {{ $prd->name }}
                        <h1>
                            <a href="#" class="btn btn-default add-to-cart">
                            </a>
                        </h1>
                    </h1>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                    <h1>{{ $prd->name }} </h1>
                    @foreach($sizes as $size)
                        @if($prd->slug == $size->product_name)
                        <h2> {{$size -> Size}}: {{$prd->discount > 0 ? number_format($size->Price-$size->Price * $prd->discount / 100) :  number_format($size->Price) }} VNĐ</h2>
                        <h3><del>  {{ number_format($size->Price) }} VNĐ</del></h3>
                        @endif
                    @endforeach
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product{{ $prd->id }}">
                            Thêm giỏ hàng
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--modal-->

    <form action="{{ route('user.cart.add', $prd->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="product{{ $prd->id }}">
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
                                    <img src="{{( '../../../storage/app/product/'. $size->image) }}"  style=" object-fit: contain;"alt="" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information">
                                    <!--/product-information-->
                                    <h1>{{ $prd->name }}</h1>
                                    <h2>ID: {{ $prd->id }}</h2>
                                    <span>
                                        <label>Quantity:</label>
                                        <input type="number" value="1" name="quantity" />
                                    </span>

                                    <table class="table">
                                        <tbody>
                                            <tr><label>Size:</label></tr>
                                            <tr>
                                                <select class="form-select" name="size">
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                </select>
                                            </tr>
                                    </table>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Topping</th>
                                                @foreach($toppingoptions as $option)
                                                    @if($option->IdProduct == $prd->id)
                                                        @foreach($toppings as $topping)
                                                            @if($topping->IdTopping == $option->IdTopping)
                                                            <th scope="col">{{$topping->name}}</th>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th></th>
                                                @foreach($toppingoptions as $option)
                                                    @if($option->IdProduct == $prd->id)
                                                        @foreach($toppings as $topping)
                                                            @if($topping->IdTopping == $option->IdTopping)
                                                                <td><input type="checkbox" name="topping" value={{$topping->IdTopping}}></td>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </tr>
                                    </table>
                                    <table class="table">
                                        <tr><label>Đường :</label></tr>
                                        <tr>
                                            <select class="form-select" aria-label="Disabled select example" name="sugar">
                                                <option selected value="0">0%</option>
                                                <option value="25">25%</option>
                                                <option value="50">50%</option>
                                                <option value="75">75%</option>
                                                <option value="100">100%</option>
                                            </select>
                                        </tr>
                                        <tr><label>Đá: </label></tr>
                                        <tr>
                                            <select class="form-select" aria-label="Disabled select example" name="ice">
                                                <option selected value="0">0%</option>
                                                <option value="25">25%</option>
                                                <option value="50">50%</option>
                                                <option value="75">75%</option>
                                                <option value="100">100%</option>
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
                            <button type="submit" class="btn btn-warning"> Thêm giỏ hàng</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
    @endforeach
