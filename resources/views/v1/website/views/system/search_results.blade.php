@extends('v1/website/master/master-home')

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="page-title">Products</h1>
    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
      <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
        <meta name="numberOfItems" content="2" /><meta name="itemListOrder" content="Ascending" />
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.home')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <span itemprop="name">Products</span>
          <meta itemprop="position" content="1" />
        </li>

      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-9" style="border: 1px solid; border-color:#d3d3d3; padding-top:5px;">
      <!-- if there is no category -->
        <h4>Search Results For: "{{$search_text}}"</h4>
        @foreach($productSubCategories as $productSubCategory)
          <?php 
            $totalProductCount = App\Models\Product::where('category_id', $productSubCategory->id)->count();
            $product_category = App\Models\ProductCategory::where('group_id', 0)->get();
          ?>
          <div class="row">
            <ul style="list-style: none;">
              <li>
                @foreach($product_category as $product_category1)
                  @if($product_category1->id == $productSubCategory->group_id)
                    <h3><a href="{{route('website.products', ['category' => $product_category1->slug, 'sub_category' => $productSubCategory->slug])}}" style="color:#3D3D3D;">{{$productSubCategory->name}}</a> 
                    <small><a href="{{route('website.products', ['category' => $product_category1->slug, 'sub_category' => $productSubCategory->slug])}}" style="color:#C00000;font-size:15px;">({{$totalProductCount}})</a></small></h3>
                  @endif
                @endforeach
              </li>

              <div class="row">
                @foreach($products as $product)
                  @if($product->category_id == $productSubCategory->id)

                    <div class="col-md-4">
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
              
            </ul>
          </div>
        @endforeach

    </div>

    <div class="col-lg-3">
      <h4>Product categories</h4>
      <ul style="list-style: none;">
        @foreach($product_categories as $product_category)
          <li><a href="{{route('website.sub_categories', ['slug' => $product_category->slug])}}">{{$product_category->name}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@stop