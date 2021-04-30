     @foreach ($products as $prd)
         <div class="col-sm-4">
             <div class="product-image-wrapper">
                 <div class="single-products">
                     <div class="productinfo text-center">
                         <img src="{{ $prd->Img }}" alt="" />
                         <h2>{{ number_format($prd->Price) }} VNĐ</h2>
                         <h3><del>{{ number_format($prd->PromotionalPrice) }} VNĐ</del></h3>
                         <h1>{{ $prd->name }}<h1>
                                 <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                     to
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
                                         <img src="{{ '../../../storage/app/product/' . $prd->Img }}" alt="" />
                                     </div>
                                 </div>
                                 <div class="col-sm-7">
                                     <div class="product-information">
                                         <!--/product-information-->


                                         <h1>{{ $prd->name }}</h1>
                                         <h2>ID: {{ $prd->id }}</h2>

                                         <span>
                                             <span>US $59</span>
                                             <label>Quantity:</label>
                                             <input type="number" value="1" name="quantity" />
                                         </span>

                                         <table class="table">

                                             <tbody>
                                                 <tr><label>Size:</label></tr>
                                                 <tr>
                                                     <select class="form-select" name="size">
                                                         <option value="1">S</option>
                                                         <option value="2">M</option>
                                                         <option value="3">L</option>
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
                                                     <td><input type="checkbox" name="topping" value="1"></td>
                                                     <td><input type="checkbox" name="topping" value="2"></td>
                                                     <td><input type="checkbox" name="topping" value="3"></td>
                                                 </tr>
                                         </table>
                                         <table class="table">
                                             <tr><label>Đường :</label></tr>
                                             <tr>
                                                 <select class="form-select" aria-label="Disabled select example"
                                                     name="sugar">
                                                     <option selected value="0">0%</option>
                                                     <option value="25">25%</option>
                                                     <option value="50">50%</option>
                                                     <option value="75">75%</option>
                                                     <option value="100">100%</option>
                                                 </select>
                                             </tr>
                                             <tr><label>Đá: </label></tr>
                                             <tr>
                                                 <select class="form-select" aria-label="Disabled select example"
                                                     name="ice">
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
