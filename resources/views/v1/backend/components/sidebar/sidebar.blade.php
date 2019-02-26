<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{route('redirectDashboard')}}" class="brand-link">
    <img src="{{asset('template/fnbeducationalinc/wp-content/uploads/2018/07/fnb_logo_small.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
    <span class="brand-text font-weight-light">FNB CMS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('img/png/man-4.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item {{ Request::is('/dashboard') ? 'has-treeview menu-open' : '' }}">
          <a href="{{route('redirectDashboard')}}" 
            class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fa fa-dashboard"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item has-treeview 
          {{ Request::is('cms/category*') || Request::is('cms/sub-category*') || Request::is('cms/product*') ? 'has-treeview menu-open' : '' }}">
          <a href="#" class="nav-link 
            {{ Request::is('cms/category*') || Request::is('cms/sub-category*') || Request::is('cms/product*') ? 'active' : '' }}">
            <i class="nav-icon fa fa-th"></i>
            <p>Product Management<i class="right fa fa-angle-left"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link {{ Request::is('cms/category*') ? 'active' : '' }}">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('sub-category.index')}}" class="nav-link {{ Request::is('cms/sub-category*') ? 'active' : '' }}">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Sub-Categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('product.index')}}" class="nav-link {{ Request::is('cms/product*') ? 'active' : '' }}">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Products</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>