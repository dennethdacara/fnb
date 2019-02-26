@extends('v1/website/master/master-home')

@section('content')

<div id="content" class="site-content">
  <div class="mt-container">
    <div id="es-front-page-widgets" class="front-page-widgets-area">
      <section id="easy_store_slider-1" class="widget easy_store_slider">

        <!-- left image slider -->
        <div class="es-section-wrapper slider-layout3 widget-section es-clearfix" style="height:" data-auto="true" data-control="true" data-pager="false" data-speed="2000" data-pause="12000">
          <div class="es-slider-cat-menu es-clearfix">
            <h3 class="categories-title"> <i class="fa fa-bars"> </i> Categories </h3>
            <ul class="product-categories">
              @forelse($product_categories as $product_category)
                <li class="cat-item cat-item-44"><a href="{{route('website.sub_categories', ['category' => $product_category->slug])}}">{{$product_category->name}}</a></li>
              @empty
                <li class="cat-item cat-item-44"><a href="#">No Category Available</a></li>
              @endforelse
            </ul>            
          </div>

          <!-- center image slider -->
          <div class="es-slider-section es-slider es-clearfix">
            <ul class="esSlider cS-hidden">

              <div class="es-single-slide">
                <div class="es-image-holder">
                  <figure><img width="840" height="500" 
                    src="{{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }}" class="attachment-easy-store-slider size-easy-store-slider wp-post-image" alt="" srcset="{{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 840w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 300w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 768w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 504w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 600w" sizes="(max-width: 840px) 100vw, 840px" /></figure>
                </div>
                <div class="es-slide-content-wrap">
                  <!-- <h3 class="es-slide-title">Junior Highschool Books</h3> -->
                  <div class="es-slide-content"></div>
                  <div class="es-slide-btn"><a href="product/learning-management-system/index.html">Add To Cart</a></div>
                </div>
              </div>

              <div class="es-single-slide">
                <div class="es-image-holder">
                  <figure><img width="840" height="500" src="{{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }}"
                      class="attachment-easy-store-slider size-easy-store-slider wp-post-image" alt="" srcset="{{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 840w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 300w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 768w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 504w, {{ asset('template/fnbeducationalinc/wp-content/uploads/2018/07/design-edna.jpg') }} 600w"
                      sizes="(max-width: 840px) 100vw, 840px" /></figure>
                </div>
                <div class="es-slide-content-wrap">
                  <!-- <h3 class="es-slide-title">Senior Highschool Books</h3> -->
                  <div class="es-slide-content"></div>
                  <div class="es-slide-btn"><a href="product/learning-management-system/index.html">Add To Cart</a></div>
                </div>
              </div>

              <div class="es-single-slide">
                <div class="es-image-holder">
                  <figure><img width="840" height="500" src="{{ asset('img/png/design-edna.jpg')}}" class="attachment-easy-store-slider size-easy-store-slider wp-post-image" alt="" srcset="{{ asset('img/png/design-edna.jpg')}} 840w, {{ asset('img/png/design-edna.jpg')}} 300w, {{ asset('img/png/design-edna.jpg')}} 768w, {{ asset('img/png/design-edna.jpg')}} 504w, {{ asset('img/png/design-edna.jpg')}} 600w" sizes="(max-width: 840px) 100vw, 840px" /></figure>
                </div>
                <div class="es-slide-content-wrap">
                  <!-- <h3 class="es-slide-title">Junior Highschool Books1</h3> -->
                  <div class="es-slide-content"></div>
                  <div class="es-slide-btn"><a href="product/learning-management-system/index.html">Add To Cart</a></div>
                </div>
              </div>

            </ul>
          </div>

          <!-- right image slider -->
          <div class="es-slider-featured-section">
            <div class="featured-items-wrap sliderFeatured cS-hidden es-clearfix">
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/40th2.PNG')}}" style="height:200px;" figure>
                  <div class="item-content"></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide1.JPG')}}"></figure>
                  <div class="item-content"><!--<h4 style="color: #fff">E-BOOKS</h4>--></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide2.JPG')}}"></figure>
                  <div class="item-content"></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide3.JPG')}}"></figure>
                  <div class="item-content"></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide4.JPG')}}"></figure>
                  <div class="item-content"></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide6.JPG')}}"></figure>
                  <div class="item-content"></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide7.JPG')}}"></figure>
                  <div class="item-content"></div>
                </a>
              </div>
              <div class="single-item-wrap es-clearfix">
                <a href="#">
                  <figure><img src="{{ asset('img/right-slider-images/Slide8.JPG')}}"></figure>
                  <div class="item-content"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- product categories -->
      <section id="easy_store_categories_collection-1" class="widget easy_store_categories_collection">
        <div class="es-section-wrapper widget-section es-clearfix layout1">
          <div class="es-cat-coll-wrap mt-column-wrapper wow fadeInUp" data-wow-delay="0.7s">
            <div class="row">
              @foreach($product_categories1 as $product_category)
              <div class="col-lg-3">
                <div class="img-holder">
                  <img src="{{ asset('img/uploads/'.$product_category->image)}}"/>
                </div>
                <div class="content-wrap">
                  <h3 class="es-coll-title"><a href="{{route('website.sub_categories', ['category' => $product_category->slug])}}" style="color:#3D3D3D">{{$product_category->name}}</a></h3>
                  <div class="es-coll-info"></div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>

      <!-- testimonials -->
      <section id="easy_store_testimonials-1" class="widget easy_store_testimonials">
        <div class="es-section-wrapper testimonials-section widget-section section-layout1" data-item="2">
          <div class="mt-container">
            <div class="section-title-wrapper has-title">
              <div class="section-title-block-wrap es-clearfix">
                <div class="section-title-block">
                  <h2 class="es-block-title">Testimonials</h2>
                </div>
              </div>
            </div>
            
            <div class="es-testimonials-wrapper testimonialsPosts cS-hidden">                        
              <div class="es-single-wrap">
                <div class="row">
                  <div class="col-lg-12" style="height:132px;">
                    <div class="">
                      <p align="left" style="padding-left:10px;padding-top:10px;padding-right:10px;">
                        "To be entrusted by FNB to write for our learner's truly heartwarming. 
                        <br> Thank you, FNB. Happy 40th anniversary."
                      </p>
                    </div>
                    <br>
                    <span class="post-author">~MRL</span>
                  </div>
                </div>
              </div>
              <div class="es-single-wrap">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="post-content">
                      <p align="left" style="padding-left:10px;padding-top:10px;padding-right:10px;">
                        "I had an awesome experience with FNB. My sales rep knew a lot about the book i was looking and was very helpful in guiding me to my purchase. 
                        He wasn't pushy at all. I would definitely recommend FNB to anyone looking to buy a new book."
                      </p>
                    </div>
                    <span class="post-author">~J.Santos</span>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>

@stop