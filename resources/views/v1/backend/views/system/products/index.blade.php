@extends ('v1/backend/master/master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Products</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Product Management</a></li>
          <li class="breadcrumb-item active">Products</li>
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
          <h3 class="card-title">List of Products
            <span class="pull-right">
              <a href="{{route('product.create')}}" class="btn btn-md btn-success">Add Product</a>
            </span>
          </h3>
        </div>
        <div class="card-body">
          <table id="product-table" class="table table-bordered table-striped table-responsive">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Date Added</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
                <tr>
                  <td><img src="{{asset('img/uploads/'.$product->image)}}" style="height:50px;width:50px;"></td>
                  <td>{{$product->title}}</td>
                  <!-- <td width="5%"><p class="text-truncate" style="max-width: 100px;">{!! $product->description !!}</p></td> -->
                  <td>{{$product->author}}</td>
                  <td>{{$product->slug}}</td>
                  <td>{{$product->category}}</td>
                  <td>{{$product->created_at}}</td>
                  <td>
                    <form method="POST" action="{{route('product.destroy', ['id' => $product->id])}}">
                      <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-sm btn-primary">Edit</a>
                      <input type="hidden" name="_method" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Slug</th>
                <th>Category</th>
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