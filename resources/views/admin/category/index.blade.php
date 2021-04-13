@extends('layouts.admin')
@section('content')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
  Category <small>Category listing</small>
</h3>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      <a href="{{route('admin.categories.index')}}">Category</a>
    </li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <!-- Begin: life time stats -->
    <div class="portlet">
      <div class="portlet-title">
        <div class="caption">
          <i class="fa fa-gift"></i>category
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
                  <a href="{{route('admin.categories.create')}}" class="btn green"><i class="fa fa-plus"></i> Add </a>
                </div>
              </div>
              <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="datatable_products" aria-describedby="datatable_products_info" role="grid">
                  <thead>
                    <tr role="row" class="heading">
                      <th width="1%" class="sorting_disabled" rowspan="1" colspan="1">
                        <div class="checker"><span class=""><input type="checkbox" class="group-checkable"></span></div>
                      </th>
                      <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                        ID
                      </th>
                      <th width="15%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                        Category&nbsp;Name
                      </th>
                      <th width="5%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                        Quantity
                      </th>
                      <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                        Status
                      </th>
                      <th width="10%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                        Date&nbsp;Updated
                      </th>
                      <th width="20%" class="sorting" tabindex="0" aria-controls="datatable_products" rowspan="1" colspan="1">
                        Actions
                      </th>
                    </tr>

                  </thead>
                  @foreach($categories as $category)
                  <tr role="row" class="filter">
                    <td rowspan="1" colspan="1">
                    </td>
                    <td rowspan="1" colspan="1">
                      {{$category->id}}
                    </td>

                    <td rowspan="1" colspan="1">
                      {{$category->name}}
                    </td>

                    <td rowspan="1" colspan="1">
                      {{$category->quantity}}

                    </td>

                    <td rowspan="1" colspan="1">
                      {{$category->status== 0 ? 'Ẩn': 'Hiện'}}

                    </td>

                    <td rowspan="1" colspan="1">
                      {{$category->updated_at}}
                    </td>

                    <td rowspan="1" colspan="1">
                      <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm red">
                        edit <i class="fa fa-edit"></i>
                      </a>
                      <a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-sm purple">
                        <i class="fa fa-times"></i> delete </a>
                    </td>
                  </tr>

                  @endforeach
                </table>
              </div>
              <div class="row">
                <div class="col-md-8 col-sm-12">
                  {{ $categories->links() }}
                </div>
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
