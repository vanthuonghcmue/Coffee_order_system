
    @foreach($products as $prd)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{$prd ->Img}}" alt="" />
                        <h2>{{number_format($prd ->Price) }} VNĐ</h2>
                        <h3><del>{{number_format($prd -> PromotionalPrice)}} VNĐ</del></h3>
                        <h1>{{$prd -> name}}<h1>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                    <div class="product-overlay">
                        <a href="{{$prd -> id}}">
                            <div class="overlay-content">
                                <h1>{{$prd -> name}} </h1>
                                <h2>{{number_format($prd ->Price )}} VNĐ</h2>
                                <h3><del>{{number_format($prd -> PromotionalPrice)}} VNĐ</del></h3>                       
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    @endforeach

    
        
        
   