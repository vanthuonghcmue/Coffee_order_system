@extends('layouts.infor')
@section('avatar')
<div class="profile-nav col-md-3">
    <div class="panel">
        <div class="user-heading round">
            <a href="#">
                @if(Auth::user()->image)
                <img src="{{('../../storage/app/'.Auth::user()->image )}}" />
                @else
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                @endif
            </a>
            <h1>{{Auth::user()->name }}</h1>
            <p>{{Auth::user()->email }}</p>
        </div>

        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="{{route('user.profile.show')}}"> <i class="fa fa-user"></i> Profile &nbsp&nbsp&nbsp </a></li>
            <li><a href="{{route('user.profile.edit' )}}"> <i class="fa fa-edit"></i> Edit profile </a></li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="panel-body bio-graph-info">
    <h1>Wellcome your profile</h1>
    <div class="row">
        <div class="bio-row">
            <p><span>Name </span>: {{Auth::user()->name }}</p>
        </div>

        <div class="bio-row">
            <p><span>Country </span>: VietNam</p>
        </div>
        <div class="bio-row">
            <p><span>join </span>: {{Auth::user()->created_at }} </p>
        </div>
        <div class="bio-row">
            <p><span>Email </span>: {{Auth::user()->email }} </p>
        </div>

        <div class="bio-row">
            <p><span>Phone </span>:{{Auth::user()->phone }} </p>
        </div>
    </div>
</div>

<div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="bio-chart">
                        <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                    </div>
                    <div class="bio-desk">
                        <h4 class="red">Envato Website</h4>
                        <p>Started : 15 July</p>
                        <p>Deadline : 15 August</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="bio-chart">
                        <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                    </div>
                    <div class="bio-desk">
                        <h4 class="terques">ThemeForest CMS </h4>
                        <p>Started : 15 July</p>
                        <p>Deadline : 15 August</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="bio-chart">
                        <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
                    </div>
                    <div class="bio-desk">
                        <h4 class="green">VectorLab Portfolio</h4>
                        <p>Started : 15 July</p>
                        <p>Deadline : 15 August</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="bio-chart">
                        <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
                    </div>
                    <div class="bio-desk">
                        <h4 class="purple">Adobe Muse Template</h4>
                        <p>Started : 15 July</p>
                        <p>Deadline : 15 August</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
