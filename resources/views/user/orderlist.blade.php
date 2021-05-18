@extends('layouts.infor')
@section('avatar')
    <div class="profile-nav col-md-3">
        <div class="panel">
            <div class="user-heading round">
                <a href="#">
                    @if (Auth::user()->image)
                        <img src="{{ '../../storage/app/' . Auth::user()->image }}" />
                    @else
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                    @endif
                </a>
                <h1>{{ Auth::user()->name }}</h1>
                <p>{{ Auth::user()->email }}</p>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{{ route('user.profile.show') }}"> <i class="fa fa-user"></i> Profile
                        &nbsp&nbsp&nbsp </a></li>
                <li><a href="{{ route('user.profile.edit') }}"> <i class="fa fa-edit"></i> Edit profile </a></li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="panel-body bio-graph-info">
        <h1>Ordered</h1>


    </div>

    @foreach ($orderlist as $orders)
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>
                                    <h3>ID:{{ $orders->id }}</h3>  
                                </td>
                                <td colspan="3">
                                    <h4>Date: {{ $orders->created_at }}</h4>
                                </td>
                                <td>
                                    <h3>Total: </h3>
                                </td>
                                <td class="text-right">
                                    <h3><strong>{{ $orders->total_price }} VNĐ</strong></h3>
                                </td>
                            </tr>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th class="text-center">Size</th>
                                <th class="text-center">Topping</th>
                                <th class="text-center" colspan="2">Price</th>

                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order_item as $item)
                                @if ($item->id_order == $orders->id)
                                    <tr>
                                        <td class="col-md-6">
                                            <div class="media">
                                                <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                        src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png"
                                                        style="width: 72px; height: 72px;"> </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#">{{ $item->product_name }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="col-md-1" style="text-align: center">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="{{ $item->quantily }}">
                                        </td>
                                        <td class="col-md-1 text-center"><strong> {{ $item->size }}</strong></td>
                                        <td class="col-md-1 text-center">
                                            <strong>{{ $item->topping == null ? 'khong' : $item->topping }} </strong>
                                        </td>
                                        <td class="col-md-1 text-center" colspan="2"><strong>{{ $item->price }}
                                                vnđ</strong></td>


                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach


@endsection
