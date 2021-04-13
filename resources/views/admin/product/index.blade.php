@extends('layouts.admin')
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
  Product <small>Product listing</small>
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="#">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="{{route('admin.products.index')}}">Product</a>
    </li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <!-- Begin: life time stats -->
    <div class="portlet">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-gift"></i>Products
        </div>
        <div class="actions">
          <div class="btn-group">
            <a class="btn default yellow-stripe" href="#" data-toggle="dropdown">
              <i class="fa fa-share"></i> Tools <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-right">
              <li>
                <a href="#">
                  Export to Excel </a>
              </li>
              <li>
                <a href="#">
                  Export to CSV </a>
              </li>
              <li>
                <a href="#">
                  Export to XML </a>
              </li>
              <li class="divider">
              </li>
              <li>
                <a href="#">
                  Print Invoices </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="portlet-body">
        <div class="table-container" style="">

          <div id="datatable_products_wrapper" class="dataTables_wrapper dataTables_extended_wrapper no-footer">
            <div class="row">
              <div class="col-md-8 col-sm-12">
                <div class="dataTables_paginate paging_bootstrap_extended" id="datatable_products_paginate">
                  <div class="pagination-panel"> Page <a href="#" class="btn btn-sm default prev disabled" title="Prev"><i class="fa fa-angle-left"></i></a><input type="text" class="pagination-panel-input form-control input-mini input-inline input-sm" maxlenght="5" style="text-align:center; margin: 0 5px;"><a href="#" class="btn btn-sm default next disabled" title="Next"><i class="fa fa-angle-right"></i></a> of <span class="pagination-panel-total"></span></div>
                </div>
                <div class="dataTables_length" id="datatable_products_length"><label><span class="seperator">|</span>View <select name="datatable_products_length" aria-controls="datatable_products" class="form-control input-xsmall input-sm input-inline">
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                      <option value="150">150</option>
                    </select> records</label></div>
                <div class="dataTables_info" id="datatable_products_info" role="status" aria-live="polite"></div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="table-group-actions pull-right">
                  <span></span>
                  <select class="table-group-action-input form-control input-inline input-small input-sm">
                    <option value="">Select...</option>
                    <option value="publish">Publish</option>
                    <option value="unpublished">Un-publish</option>
                    <option value="delete">Delete</option>
                  </select>
                  <a href="{{route('admin.products.create')}}" class="btn green"><i class="fa fa-plus"></i> Add </a>                </div>
              </div>
            </div>
            <div class="table-scrollable">
              <table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_products" aria-describedby="datatable_products_info" role="grid">
                <thead>
                  <tr role="row" class="heading">
                    <th width="10%" class="sorting_disabled" rowspan="1" colspan="1">
                      Image
                  </th>
                    <th width="5%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                      ID
                    </th>
                    <th width="15%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                      Product&nbsp;Name
                    </th>
                    <th width="5%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                      Size
                    </th>
                    <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                    Price
                    </th>
                    <th width="5%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                      Status
                    </th>
                    <th width="20%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                    Describe
                    </th>
                    <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                      Date&nbsp;Updated
                    </th>
                    <th width="20%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                      Actions
                    </th>
                  </tr>
              
                @foreach($products as $product)
                <thead>
                <tr role="row" class="filter">
                  <td rowspan="1" colspan="1">
                  <img src="{{('../../storage/app/product/'.$product->Img)}}" style="width: 60px; height: 60px;" alert="poto">

                  </td>

                  <td rowspan="1" colspan="1">
                  {{$product->id}}
                  </td>

                  <td rowspan="1" colspan="1">
                  {{$product->name}}
                  </td>
                  <td rowspan="1" colspan="1">
                  @foreach($sizes as $size)
                    @if($size->product_name==$product->slug)
                    {{$size->Size}} 
                    @endif
                  @endforeach
                  </td>

                  <td rowspan="1" colspan="1">
                  @foreach($sizes as $size)
                    @if($size->product_name==$product->slug)
                  {{number_format($size->Price)}} đ
                  @endif
                  @endforeach
                  </td>

                  <td rowspan="1" colspan="1">
                    {{$product->status == 0 ? 'ẩn' : 'Hiện'}}
                  </td>
                  
                  <td rowspan="1" colspan="1">
                    {{$product->Description}}
                  </td>

                  <td rowspan="1" colspan="1">
                    {{$product->updated_at}}
                  </td>

                  <td rowspan="1" colspan="1">
                    <a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-sm red">
                       <i class="fa fa-edit">  </i> edit &nbsp;&nbsp;
                    </a>
                    <a href="{{ route('admin.products.destroy', $product->id) }}" class="btn btn-sm purple">
                      <i class="fa fa-times"></i> delete </a>
                  </td>
                </tr>
                </thead>
              @endforeach
              </table>
              
            </div>
            <div class="row">
              {{ $products->links() }}
              <div class="col-md-4 col-sm-12"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: life time stats -->
  </div>
</div>
@endsection
