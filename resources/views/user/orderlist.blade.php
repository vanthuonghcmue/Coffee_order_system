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

        @foreach ($orderlist as $orders)
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="bio-chart">
                                <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                                        height="100px"></canvas><input class="knob" data-width="100" data-height="100"
                                        data-displayprevious="true" data-thickness=".2" value="{{ $orders->id }}"
                                        data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8"
                                        style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;">
                                </div>
                            </div>
                            <div class="bio-desk">
                                <h4 class="red">Time: {{ $orders->created_at }}</h4>

                                <p>Total Price: {{ $orders->total_price }}</p>
                                <p style="background-color:rgba(234, 253, 164, 0.46)">Status:
                                    {{ $orders->status == 0 ? 'Chưa hoàn thành' : 'Đã hoàn thành' }}</p>
                                <h4 class="" style="color:rgb(18, 119, 174)">Detail</h4>

                                @foreach ($order_item as $item)
                                    @if ($item->id_order == $orders->id)
                                        <p>{{ $item->product_name }} Quantity: {{ $item->quantily }} Size:
                                            {{ $item->size }} Topping:
                                            {{ $item->topping == null ? 'khong' : $item->topping }} Price:
                                            {{ $item->price }} </p>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endforeach

    </div>
@endsection
