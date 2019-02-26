@extends('v1/website/master/master-products')

@section('content')

<div class="custom-header no-bg-img">
  <div class="mt-container">
    <h1 class="page-title">{{$product->title}}</h1>
    <!-- <div class="taxonomy-description"><p>desc</p></div> -->
    <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
      <ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">
        <meta name="numberOfItems" content="2" /><meta name="itemListOrder" content="Ascending" />
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="{{route('website.home')}}" rel="home" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-begin">
          <a href="#" rel="home" itemprop="item"><span itemprop="name">Products</span></a>
          <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end">
          <span itemprop="item"><span itemprop="name">{{$product->title}}</span></span><meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-9" style="border: 1px solid; border-color:#d3d3d3;padding-top:15px;">
      <div class="row">
        <div class="col-lg-5">
          <img src="{{asset('img/uploads/'.$product->image)}}" alt="No Image" style="padding-top:5px;padding-bottom:5px;">
        </div>

        <div class="col-lg-7">
          <h1>{{$product->title}}</h1>
          <p>Author: {{$product->author}}</p>
          <p>{!! $product->description !!}</p>
        </div>
      </div>

      <hr>

      <!-- related products-->
      <div class="row">
        <div class="col-lg-12" style="padding-bottom:20px;">
          <h2>Related Products</h2>
          <div class="card-deck">
            @foreach($related_products as $related_product)
            <div class="col-lg-3" style="padding-bottom:10px;">
              <div class="card">
                <img class="card-img-top" src="{{asset('img/uploads/'.$related_product->image)}}" style="height:150px;width:150px;" alt="Card image cap">
                <div class="card-body">
                  <h6 class="card-title"><a href="{{route('website.product', ['slug' => $related_product->slug])}}">{{$related_product->title}}</a></h6>
                  <!-- <p class="card-text text-truncate max-width: 100%;">{!! $related_product->description !!}</p> -->
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>        
      </div>

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