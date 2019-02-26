<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>FnB Educational, Inc.</title>
  @include('v1/backend/components/css/css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('v1/backend/components/header/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('v1/backend/components/sidebar/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('v1/backend/components/footer/footer')
</div>
<!-- ./wrapper -->

@include('v1/backend/components/js/js')
</body>
</html>
