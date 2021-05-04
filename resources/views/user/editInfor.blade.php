@extends('layouts.infor')
@section('avatar')
<div class="profile-nav col-md-3">
    <div class="panel">
        <div class="user-heading round">
            <a href="#">
                @if(Auth::user()->image)
                <img src="{{('../../../storage/app/'.Auth::user()->image )}}" />
                @else
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                @endif
            </a>
            <h1>{{Auth::user()->name }}</h1>
            <p>{{Auth::user()->email }}</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
            <li class=""><a href="{{route('user.profile.show')}}"> <i class="fa fa-user"></i> Profile &nbsp&nbsp&nbsp </a></li>
            <li class="active"><a href="{{route('user.profile.edit')}}"> <i class="fa fa-edit"></i> Edit profile</a></li>
        </ul>
    </div>
</div>
@endsection
@section('content')
<div class="panel-body bio-graph-info">
    <h1>Edit your profile</h1>

    <form method="POST" action="{{route('user.profile.update')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{Auth::user()->email }}" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Name</label>
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{Auth::user()->name }}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress2">Phone</label>
            <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="number phone" value="{{Auth::user()->phone}}">
        </div>

        <div class="form-group">
            <label for="inputAddress2"> avatar</label>
            <input type="file" name="avatar" class="form-control" id="inputAddress2">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
