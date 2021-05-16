@extends('layouts.admin')
@section('content')
<h3 class="page-title">
    Category <small>Create Category</small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="{{route('admin.products.index')}}">Edit</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal form-row-seperated" enctype="multipart/form-data" method="post" action="{{route('admin.products.update', $Product->id)}}">
            @csrf
            <div class="portlet">
                <div class="portlet-title">
                    @if (session('notice'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notice') }}
                    </div>
                    @endif
                    <div class="caption">
                        <i class="fa fa-shopping-cart"></i>edit Product
                    </div>
                    
                    <div class="actions btn-set">
                        <div class="btn-group">
                            <button id="sample_editable_1_new" name="Back" class="btn while" type="button"><i class="fa fa-angle-left"></i><a href="{{ route('admin.products.index') }}"> Back </a> </button>
                        </div>
                        <div class="btn-group">
                            <button id="sample_editable_1" name="Save" class="btn green" type="submit"><i class="fa fa-check"></i> Save</button>
                        </div>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_general" data-toggle="tab">
                                    General </a>
                            </li>

                            <li>
                                <a href="#tab_images" data-toggle="tab">
                                    Images </a>
                            </li>
                        </ul>

                        <div class="tab-content no-space">
                            <div class="tab-pane active" id="tab_general">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Name: <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="Name" placeholder="" value="{{$Product->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description: <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="Description">{{$Product->Description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Discount: <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <input class="form-control" name="Discount" value="{{$Product->discount}}"></input>
                                            <span class="help-block">
                                                shown in product listing </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Category: <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select value="{{$Product->IdCategory}}" class="table-group-action-input form-control input-medium" name="idCategory">
                                                @foreach($Categories as $Category)
                                                <option value="{{$Category->id}}" {{$Category->id==$Product->IdCategory ? "selected ='selected'" : ' '}}>{{$Category->name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="help-block">
                                                select one categories </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Status: <span class="required">
                                                * </span>
                                        </label>
                                        <div class="col-md-10">
                                            <select class="table-group-action-input form-control input-medium" name="Status">
                                                <option value="0" {{$Product->status == 0 ? "selected ='selected'" : ' '}}>Ẩn</option>
                                                <option value="1" {{$Product->status == 1 ? "selected ='selected'" : ' '}}>Hiện</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_images">
                                <div class="alert alert-success margin-bottom-10">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified.
                                </div>

                                <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10" style="position: relative;">
                                    <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow" style="position: relative; z-index: 1;">
                                        <i class="fa fa-plus"></i> Select Files </a>
                                    <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
                                        <i class="fa fa-share"></i> Upload Files </a>
                                    <div id="html5_1f2u6doc74k91rbd709duh96o3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 0px; height: 0px; overflow: hidden; z-index: 0;"><input id="html5_1f2u6doc74k91rbd709duh96o3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,image/gif,image/png,application/zip"></div>
                                </div>

                                <div class="row">
                                    <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"></div>
                                </div>

                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr role="row" class="heading">
                                            <th width="10%">
                                                Size
                                            </th>
                                            <th width="30%">
                                                Image
                                            </th>
                                            <th width="30%">
                                                Price
                                            </th>
                                            <th width="30%">
                                                Img
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($sizes as $size)
                                        <tr>
                                            <td>
                                                Size {{$size->Size}}
                                            </td>

                                            <td>
                                                <img src="{{('../../../../storage/app/product/'.$size->image)}}" style="width: 60px; height: 60px;" alert="poto">
                                            </td>

                                            <td>
                                                <input type="text" class="form-control" name="{{'Price'.$size->Size}}" value="{{$size->Price}}">
                                            </td>

                                            <td>
                                                <div class="input-icon right">
                                                    <input type="file" class="form-control" name="{{'image'.$size->Size}}">
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
