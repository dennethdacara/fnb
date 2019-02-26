<!doctype html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
  @include('v1/website/components/css/bootstrap_assets')
  @include('v1/website/components/css/products_css')
</head>

<body class="archive post-type-archive post-type-archive-product wp-custom-logo woocommerce woocommerce-page woocommerce-no-js hfeed fullwidth-layout header-layout1 es-product-layout1 grid-archive-layout woocommerce-active elementor-default">
  <div id="preloader-background">
    <div class="preloader-wrapper">
      <div class="single4"></div>
    </div>
  </div>

  <div id="page" class="site">

    @include('v1/website/components/header/top_header')
    @include('v1/website/components/header/header')

    @yield('content')

    @include('v1/website/components/footer/footer')

    <div id="es-scrollup" class="animated arrow-hide"><i class="fa fa-chevron-up"></i></div>
  </div>

  <div id="yith-quick-view-modal">
    <div class="yith-quick-view-overlay"></div>
    <div class="yith-wcqv-wrapper">
      <div class="yith-wcqv-main">
        <div class="yith-wcqv-head">
          <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
        </div>
        <div id="yith-quick-view-content" class="woocommerce single-product"></div>
      </div>
    </div>
  </div>
  
  <script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
  </script>
  
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" aria-label="Share"></button>
          <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/template" id="tmpl-variation-template">
    <div class="woocommerce-variation-description">description</div>
    <div class="woocommerce-variation-price">price</div>
    <div class="woocommerce-variation-availability">availability</div>
  </script>

  <script type="text/template" id="tmpl-unavailable-variation-template">
    <p>Sorry, this product is unavailable. Please choose a different combination.</p>
  </script>
  
  
  @include('v1/website/components/js/home_js')
</body>

