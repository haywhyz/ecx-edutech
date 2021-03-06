@extends('admin.layouts.app')

@section('content')   <!-- page content -->
<div class="right_col" role="main">
  @if ($message = Session::get('success'))
  <div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>	
          <strong>{{ $message }}</strong>
  </div>
  @endif
    <div class="">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Resources List</h2>
              <div class="clearfix"></div>
            </div>
            @php($no=0)
            @if(count($resources) > 0)
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>resource Type</th>
                    <th>Post Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <?php  $no=1; ?>
                    @foreach($resources as $resource)
                  <tr>
                  <td>{{$no++}}</td>
                    <td>{{$resource->title}}</td>
                    <td>{{$resource->resource_type_id}}</td>
                    <td>{{$resource->body}}</td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
            @else

          	<div class="alert alert-danger">No record found</div>

          	@endif
          </div>
        </div>
      </div>
          </div>
         @endsection
