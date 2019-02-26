<header id="masthead" class="site-header">
  <div class="es-header-logo-wrapper es-clearfix">
    <div class="mt-container"> 
      <div class="site-branding">
        <a href="{{route('website.home')}}" class="custom-logo-link" rel="home" itemprop="url">
          <img width="150" height="112" src="{{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/fnb_logo_small.png')}}" class="custom-logo" alt="FnB Educational, Inc." itemprop="logo" />
        </a>
        <p class="site-title"><a href="{{route('website.home')}}" rel="home">FnB Educational, Inc.</a></p>
      </div>
      <div class="es-header-area-cart-wrapper">
        <section id="easy_store_advanced_product_search-1" class="widget easy_store_advanced_product_search">
          <div class="es-advance-product-search-wrapper">
            <div class="advance-product-search">
              <form role="search" method="GET" class="woocommerce-product-search" action="{{route('website.search')}}">
                <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search Product/s" value="" name="search_text" />
                <button class="fa fa-search searchsubmit" type="submit"></button>
              </form>
            </div>
          </div>
        </section>
        
        <ul id="site-header-cart" class="site-header-cart">
          <a href="{{ route('login') }}" class="btn btn-lg btn-danger" style="color:white;margin-top:12px;">
            @if (Auth::guest())
              Login
            @else
              Access CMS
            @endif
          </a>
        </ul>
      </div>
    </div>
  </div>

  <div class="es-main-menu-wrapper">
    <div class="mt-container">
      <div class="es-home-icon">
        <a href="index.html" rel="home"> <!--<i class="fa fa-home"> </i>--> </a>
      </div>
      <a href="javascript:void(0)" class="menu-toggle hide"> <i class="fa fa-navicon"> </i> </a>
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <div class="menu-main-menu-container">
          <ul id="primary-menu" class="menu">
            <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-144 current_page_item menu-item-242 {{ Request::is('/') ? 'current-menu-item' : '' }}">
              <a href="{{route('website.home')}}">Home</a>
            </li>
            <li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180 {{ Request::is('about') ? 'current-menu-item' : '' }}"><a href="{{route('website.about')}}">About Us</a></li>
            <!-- <li id="menu-item-182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-182 {{ Request::is('product-categories') ? 'current-menu-item' : '' }}"><a href="{{route('website.product_categories')}}">Products</a></li> -->
            <li id="menu-item-180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180 {{ Request::is('product-categories') || Request::is('sub-category*') ? 'current-menu-item' : '' }}"><a href="{{route('website.product_categories')}}">Product Categories</a></li>
            <!-- <li class="nav-item dropdown {{ Request::is('product-categories') || Request::is('sub-category*') ? 'current-menu-item' : '' }}">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="color:black;" href="{{route('website.product_categories')}}">Categories</a>
                <a class="dropdown-item" style="color:black;" href="{{route('website.product_categories')}}">Products</a>
              </div>
            </li> -->

            <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200 {{ Request::is('learning-management-system') ? 'current-menu-item' : '' }}"><a href="{{route('website.lms')}}" onclick="window.open('http://52.38.144.65/kto12/');">Learning Management System</a></li>
            <li id="menu-item-181" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-181 {{ Request::is('contact') ? 'current-menu-item' : '' }}"><a href="{{route('website.contact')}}">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>