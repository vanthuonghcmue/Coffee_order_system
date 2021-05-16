@extends('layouts.admin')
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
  Dashboard <small></small>
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="{{route('admin.categories.index')}}">dashboard</a>
    </li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    echo 'xin chao admin'
    </div>
  </div>
  @endsection
