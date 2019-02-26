@extends('v1/website/master/master-products')

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="page-title">Product Categories</h1>
    <!-- <div class="taxonomy-description"><p>List of Product Categories</p></div> -->
    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
      <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
        <meta name="numberOfItems" content="2" /><meta name="itemListOrder" content="Ascending" />
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.home')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <span itemprop="item"><span itemprop="name">Product Categories</span></span><meta itemprop="position" content="2" />
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
              <!-- <div class="col-md-6 col-sm-6 col-xs-6">
                <p>Showing 1-16 of 56 results</p>
              </div> -->

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

            <!--Product Category List-->
            <div class="row">
              @foreach($product_categories as $product_category)

                <div class="col-md-4" style="margin-bottom:15px;">
                  <div class="card">
                    <div class="card-img-wrap">
                      <img class="card-img-top" src="{{asset('img/uploads/'.$product_category->image)}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <a href="{{route('website.sub_categories', ['slug' => $product_category->slug])}}" style="color:black;">
                          {{$product_category->name}}
                        </a>
                      </h5>
                    </div>
                  </div>
                </div>

              @endforeach
            </div><br>
            
            <!-- <div class="row">
              <div class="col-lg-12">
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div> -->

          </div>
          
          <!-- Right Sidebar -->
          <div class="col-md-3 col-lg-3 col-sm-3">
              <h4>Product categories</h4>
              <ul style="list-style: none;">
                @foreach($product_categories as $product_category)
                  <li><a href="{{route('website.sub_categories', ['slug' => $product_category->slug])}}">{{$product_category->name}}</a></li>
                  <!-- @foreach($productSubCategories as $productSubCategory)
                    @if($productSubCategory->group_id == $product_category->id)
                      <ul style="list-style: none;">
                        <li><a href="#">> {{$productSubCategory->name}}</a></li>
                      </ul>
                    @endif
                  @endforeach -->
                @endforeach
              </ul>
          </div>
          
        </div>
      </div>
    </div>

  </div>
</div>

@stop