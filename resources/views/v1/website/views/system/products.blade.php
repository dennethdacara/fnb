@extends('v1/website/master/master-products')

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="page-title">Products</h1>
    <!-- <div class="taxonomy-description"><p>List of Products</p></div> -->
    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
      <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
        <meta name="numberOfItems" content="2" /><meta name="itemListOrder" content="Ascending" />
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.home')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.product_categories')}}" rel="home" itemprop="item"><span itemprop="name">Product Categories</span></a>
          <meta itemprop="position" content="1" />
        </li>
        
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <a href="{{route('website.sub_categories', ['category' => $product_category->slug])}}">
            <span itemprop="item"><span itemprop="name">{{$product_category->name}}</span></span>
          </a>
          <meta itemprop="position" content="2" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <a href="{{route('website.products', ['category' => $product_category->slug, 'sub_category' => $sub_category->slug])}}">
            <span itemprop="item"><span itemprop="name">{{$sub_category->name}}</span></span>
          </a>
          <meta itemprop="position" content="2" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <span itemprop="item"><span itemprop="name">Products</span></span><meta itemprop="position" content="2" />
        </li>


      </ul>
    </div>
  </div>
</div>


<div id="content" class="site-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-9 col-lg-9 col-sm-9">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <select name="orderby" class="orderby float-right">
                  <option value="popularity"  selected='selected'>Sort by popularity</option>
                  <option value="rating" >Sort by average rating</option>
                  <option value="date" >Sort by newness</option>
                  <option value="price" >Sort by price: low to high</option>
                  <option value="price-desc" >Sort by price: high to low</option>
                </select>
              </div>
            </div><br>

            <!--Products List-->
            <div class="row">
              <ul style="list-style: none;">
                <li><h2>{{$product_category->name}}</h2></li>

                <!-- with sub-category parent -->
                  <?php $totalProductCount = App\Models\Product::where('category_id', $sub_category->id)->count(); ?>
                  <li>
                    <h3><a href="{{route('website.products', ['category' => $product_category->slug, 'sub_category' => $sub_category->slug])}}" style="color:#3D3D3D;">{{$sub_category->name}}</a> 
                    <small><a href="{{route('website.products', ['category' => $product_category->slug, 'sub_category' => $sub_category->slug])}}" style="color:#C00000;font-size:15px;">({{$totalProductCount}})</a></small></h3>
                  </li>
                  <div class="row">
                    @foreach($products as $product)
                      @if($product->category_id == $sub_category->id)
                        <div class="row col-md-4 col-sm-12 col-xs-12" style="margin-bottom:10px;">
                          <ul style="list-style: none;">
                            <li>
                              <div class="card">
                                <div class="card-img-wrap">
                                  <img class="card-img-top" src="{{asset('img/uploads/'.$product->image)}}" style="height:180px;width:320px;" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                  <h6 class="card-title text-center">
                                    <a href="{{route('website.product', ['slug' => $product->slug])}}" style="color:#3D3D3D;">{{$product->title}}</a>
                                  </h6>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      @endif
                    @endforeach
                  </div>
                <!-- / -->

              </ul>
            </div><br>
          </div>
          
          <!-- Right Sidebar -->
          <div class="col-md-3 col-lg-3 col-sm-3">
            <h4>Product categories</h4>
            <ul style="list-style: none;">
              @foreach($product_categories as $product_category)
                <li><a href="{{route('website.sub_categories', ['slug' => $product_category->slug])}}">{{$product_category->name}}</a></li>
              @endforeach
            </ul>
          </div>
          
        </div>
      </div>
    </div>

  </div>
</div>



@stop