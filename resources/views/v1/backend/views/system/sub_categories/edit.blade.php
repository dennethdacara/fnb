@extends ('v1/backend/master/master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Sub-Categories</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Product Management</a></li>
          <li class="breadcrumb-item active">Sub-Categories</li>
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
            <h3 class="card-title">Edit Sub-Category: <b>{{$sub_category->name}}</b></h3>
          </div>

          <form method="POST" action="{{ route('sub-category.update', ['id' => $sub_category->id]) }}" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{csrf_field()}}

            <div class="card-body">

              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <img src="{{asset('img/uploads/'.$sub_category->image)}}" class="img-thumbnail" alt="No Image" style="height:250px;width:250px;">
                  </div>
                </div>

                <div class="col-lg-8">
                  <div class="form-group">
                    <label>Name*</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Sub-Category Name" value="{{$sub_category->name}}">
                    @if ($errors->has('name')) 
                      <span class="help-block align-left" style="color:red;">{{ $errors->first('name') }}</span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label>Parent Category*</label>
                    <select name="group_id" id="group_id" class="form-control" required>
                      <option value="" selected disabled>Select Option</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $sub_category->group_id ? 'selected' : ''}}>{{$sub_category->name}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                  </div>

                  <div class="form-group">
                    <label>Custom Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Ex. grade-1" value="{{$sub_category->slug}}">
                    @if ($errors->has('slug')) 
                      <span class="help-block align-left" style="color:red;">{{ $errors->first('slug') }}</span>
                    @endif
                  </div>
                </div>
                
              </div>

            </div>
            <div class="card-footer" style="margin-top:-30px;">
              <button type="submit" class="btn btn-primary btn-md">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


@stop