@extends ('v1/backend/master/master')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Admin Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">{{$totalUsers}}</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-tasks"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Categories</span>
              <span class="info-box-number">{{$totalCategories}}</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-tasks"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Sub-Categories</span>
              <span class="info-box-number">{{$totalSubCategories}}</span>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-tasks"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number">{{$totalProducts}}</span>
            </div>
          </div>
        </div>

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

      </div>
      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->

@stop