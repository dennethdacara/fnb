@extends('v1/website/master/master-products')

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="page-title">Sub-Category Products</h1>
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
          <span itemprop="item"><span itemprop="name">{{$product_category->name}}</span></span><meta itemprop="position" content="2" />
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
                @foreach($productSubCategories as $productSubCategory)
                  <?php $totalProductCount = App\Models\Product::where('category_id', $productSubCategory->id)->count(); ?>
                  <li>
                    <h3><a href="{{route('website.products', ['category' => $product_category->slug, 'sub_category' => $productSubCategory->slug])}}" style="color:#3D3D3D;">{{$productSubCategory->name}}</a> 
                    <small><a href="{{route('website.products', ['category' => $product_category->slug, 'sub_category' => $productSubCategory->slug])}}" style="color:#C00000;font-size:15px;">({{$totalProductCount}})</a></small></h3>
                  </li>
                  <div class="row">
                    @foreach($products as $product)
                      @if($product->category_id == $productSubCategory->id)

                      <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{asset('img/uploads/'.$product->image)}}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">
                              <a href="{{route('website.product', ['slug' => $product->slug])}}" style="color:#3D3D3D;">{{$product->title}}</a>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                              <small class="text-muted">{{$product->created_at->diffForHumans()}}</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      @endif
                    @endforeach
                  </div>
                @endforeach
                <!-- / -->

                <!-- without sub-category parent -->

                <div class="row">
                  @foreach($products1 as $product1)
                    <div class="col-md-3">
                      <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('img/uploads/'.$product1->image)}}" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">
                            <a href="{{route('website.product', ['slug' => $product1->slug])}}" style="color:#3D3D3D;">{{$product1->title}}</a>
                          </p>
                          <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{$product1->created_at->diffForHumans()}}</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                
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