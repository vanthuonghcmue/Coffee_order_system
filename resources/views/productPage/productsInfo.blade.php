     @foreach ($products as $prd)
         <div class="col-sm-4">
             <div class="product-image-wrapper">
                 <div class="single-products">
                     <div class="productinfo text-center">
                         <img src="{{ $prd->Img }}" alt="" />
                         <h2>{{ number_format($prd->Price) }} VNĐ</h2>
                         <h3><del>{{ number_format($prd->PromotionalPrice) }} VNĐ</del></h3>
                         <h1>{{ $prd->name }}<h1>
                                 <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                     cart</a>
                     </div>
                     <div class="product-overlay">
                         <div class="overlay-content">
                             <h1>{{ $prd->name }} </h1>
                             <h2>{{ number_format($prd->Price) }} VNĐ</h2>
                             <h3><del>{{ number_format($prd->PromotionalPrice) }} VNĐ</del></h3>
                             <button type="button" class="btn btn-primary" data-toggle="modal"
                                 data-target="#product{{ $prd->id }}">
                                 Thêm giỏ hàng
                             </button>

                         </div>

                     </div>
                 </div>
             </div>
         </div>
         <!--modal-->
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
                                     <img src="{{ '../../../storage/app/product/' . $prd->Img }}" alt="" />
                                 </div>
                             </div>
                             <div class="col-sm-7">
                                 <div class="product-information">
                                     <!--/product-information-->
                                     <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                                     <h1>{{ $prd->name }}</h1>
                                     <h2>ID: {{ $prd->id }}</h2>
                                     <img src="images/product-details/rating.png" alt="" />
                                     <span>
                                         <span>US $59</span>
                                         <label>Quantity:</label>
                                         <input type="number" value="1" />

                                     </span>

                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th scope="col"></th>
                                                 <th scope="col">M</th>
                                                 <th scope="col">L</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <th>Size</th>
                                                 <td><input type="radio" name="size" value="M"></td>
                                                 <td><input type="radio" name="size" value="L"></td>
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
                                                 <td><input type="radio" name="topping" value="1"></td>
                                                 <td><input type="radio" name="topping" value="2"></td>
                                                 <td><input type="radio" name="topping" value="3"></td>
                                             </tr>
                                     </table>

                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th scope="col">Tùy chọn</th>
                                                 <th scope="col">0%</th>
                                                 <th scope="col">25%</th>
                                                 <th scope="col">50%</th>
                                                 <th scope="col">75%</th>
                                                 <th scope="col">100%</th>
                                             </tr>
                                         </thead>
                                         <tbody>

                                             <tr>
                                                 <th>Đường</th>
                                                 <td><input type="radio" name="sugar" value="0"></td>
                                                 <td><input type="radio" name="sugar" value="25"></td>
                                                 <td><input type="radio" name="sugar" value="50"></td>
                                                 <td><input type="radio" name="sugar" value="75"></td>
                                                 <td><input type="radio" name="sugar" value="100"></td>
                                             </tr>
                                             <tr>
                                                 <th>Đá</th>
                                                 <td><input type="radio" name="ice" value="0"></td>
                                                 <td><input type="radio" name="ice" value="25"></td>
                                                 <td><input type="radio" name="ice" value="50"></td>
                                                 <td><input type="radio" name="ice" value="75"></td>
                                                 <td><input type="radio" name="ice" value="100"></td>
                                             </tr>

                                         </tbody>
                                     </table>

                                 </div>
                                 <!--/product-information-->
                             </div>
                         </div>
                         <!--/product-details-->
                     </div>
                     <div class="modal-footer">
                         <div class="row">
                             <button type="button" class="btn btn-warning">Thêm giỏ hàng</button>
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     @endforeach
