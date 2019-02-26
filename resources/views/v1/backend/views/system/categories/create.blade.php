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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
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
              <h3 class="card-title">Add Category</h3>
            </div>
            <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                <div class="form-group">
                  <label>Name*</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Category Name" value="{{old('name')}}">
                  @if ($errors->has('name')) 
                    <span class="help-block align-left" style="color:red;">{{ $errors->first('name') }}</span>
                  @endif
                </div>

                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" id="image" placeholder="Enter Category Name">
                </div>

                <!-- <div class="form-group">
                  <label>Description</label>
                  <textarea name="content" id="editor">
                    &lt;p&gt;Here goes the initial content of the editor.&lt;/p&gt;
                  </textarea>
                </div> -->

                <div class="form-group">
                  <label>Custom Slug</label>
                  <input type="text" class="form-control" name="slug" id="slug" placeholder="Ex. grade-1" value="{{old('slug')}}">
                </div>

                <div class="form-group">
                  <label>Sort Order</label>
                  <input type="number" min="0" class="form-control" name="sort_order" id="sort_order" placeholder="{{$count}}" value="{{$count}}">
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