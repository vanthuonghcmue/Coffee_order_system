@extends('layouts.admin')
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
  Category <small>Edit Category</small>
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="{{route('admin.categories.edit')}}">Edit</a>
    </li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal form-row-seperated" role="form" method="post" enctype="multipart/form-data" action="{{ route('admin.categories.store') }}">
      @csrf
      <div class="portlet">
        <div class="portlet-title">
          @if (session('notice'))
          <div class="alert alert-success" role="alert">
            {{ session('notice') }}
          </div>
          @endif
          <div class="caption">
            <i class="fa fa-shopping-cart"></i>edit Category
          </div>
          <div class="actions btn-set">
            <div class="btn-group">
              <button id="sample_editable_1_new" name="Back" class="btn while" type="button"><i class="fa fa-angle-left"></i><a href="{{ route('admin.categories.index') }}"> Back </a> </button>
            </div>
            <div class="btn-group">
              <button id="sample_editable_1" name="Save" class="btn green" type="submit"><i class="fa fa-check"></i> Save</button>
            </div>
          </div>
        </div>

        <div class="portlet-body">
          <div class="tabbable">
            <div class="tab-content no-space">
              <div class="tab-pane active" id="tab_general">
                <div class="form-body">

                  <div class="form-group">
                    <label class="col-md-2 control-label">Category Name: <span class="required">
                        * </span>
                    </label>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="Name" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Quantity: <span class="required">
                        * </span>
                    </label>
                    <div class="col-md-10">
                      <input class="form-control" name="Quantity"></input>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Status<span class="required">
                        * </span>
                    </label>
                    <div class="col-md-10">
                      <select class="table-group-action-input form-control input-medium" name="Status">
                        <option value="0">Hiện</option>
                        <option value="1">Ẩn</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-2 control-label">Description: <span class="required">
                        * </span>
                    </label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="Description"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
