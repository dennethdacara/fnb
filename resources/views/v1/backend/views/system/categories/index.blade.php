@extends ('v1/backend/master/master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Product Management</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{{ Session::get('message') }}</strong>
        </div>
      @endif
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List of Categories 
            <span class="pull-right">
              <a href="{{route('category.create')}}" class="btn btn-md btn-success">Add Category</a>
            </span>
          </h3>
        </div>
        <div class="card-body">
          <table id="category-table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Sort Order</th>
                <th>Date Added</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
                <tr>
                  <td><img src="{{asset('img/uploads/'.$category->image)}}" style="height:50px;width:50px;"></td>
                  <td>{{$category->name}}</td>
                  <td>{{$category->sort_order}}</td>
                  <td>{{$category->created_at}}</td>
                  <td>
                    <form method="POST" action="{{route('category.destroy', ['id' => $category->id])}}">
                      <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-sm btn-primary">Edit</a>
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" onclick="return confirm('Are you sure you want to delete this category?');" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Date Added</th>
                <th>Actions</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

@stop