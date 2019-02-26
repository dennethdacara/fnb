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
  <div class="container-fluid">
    <div class="row justify-content-md-center">
      <div class="col-md-10">
        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ Session::get('message') }}</strong>
          </div>
        @endif

        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Add Product</h3>
          </div>
          <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="card-body">
              <div class="form-group">
                <label>Title*</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Product Title" value="{{old('title')}}">
                @if ($errors->has('title')) 
                  <span class="help-block align-left" style="color:red;">{{ $errors->first('title') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Category*</label>
                <select name="category_id" id="category_id" class="form-control">
                  <option value="" selected disabled>Select Option</option>
                  @foreach($productSubCategories as $productSubCategory)
                    <option value="{{$productSubCategory->id}}">{{$productSubCategory->name}} | Parent: {{$productSubCategory->group_name}}</option>
                  @endforeach
                </select>
                @if ($errors->has('category_id')) 
                  <span class="help-block align-left" style="color:red;">{{ $errors->first('category_id') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" id="image">
              </div>

              <div class="form-group">
                <label>Description*</label>
                <textarea name="description" id="product-create">
                  <!-- &lt;p&gt;Here goes the initial content of the editor.&lt;/p&gt; -->
                </textarea>
                @if ($errors->has('description')) 
                  <span class="help-block align-left" style="color:red;">{{ $errors->first('description') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Enter Author" value="{{old('author')}}">
                @if ($errors->has('author')) 
                  <span class="help-block align-left" style="color:red;">{{ $errors->first('author') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label>Custom Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="Ex. grade-1" value="{{old('slug')}}">
                @if ($errors->has('slug')) 
                  <span class="help-block align-left" style="color:red;">{{ $errors->first('slug') }}</span>
                @endif
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@stop