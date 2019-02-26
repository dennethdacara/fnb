jQuery(document).ready(function($) {

    "use strict";

    if($('body').hasClass("rtl")) {
        var rtlValue = true;
    } else {
        var rtlValue = false;
    }

    /**
     * Ticker script
     */
    $(".esTicker").lightSlider({
        item: 1,
        vertical: true,
        loop: true,
        verticalHeight: 35,
        pager: false,
        enableTouch: false,
        enableDrag: false,
        auto: true,
        controls: true,
        speed: 3000,
        pause: 10000,
        rtl: rtlValue,
        prevHtml: '<i class="fa fa-arrow-left"></i>',
        nextHtml: '<i class="fa fa-arrow-right"></i>',
        onSliderLoad: function() {
            $('.esTicker').removeClass('cS-hidden');
        }
    });

    /**
     * Slider script
     */
    $('.es-slider').each(function(){

        var Id = $(this).parents('.widget').attr('id');

        var slideAuto    = $(this).parents('.es-section-wrapper').data('auto');
        var slideControl = $(this).parents('.es-section-wrapper').data('control');
        var slidePager   = $(this).parents('.es-section-wrapper').data('pager');
        var slideSpeed   = $(this).parents('.es-section-wrapper').data('speed');
        var slidePause   = $(this).parents('.es-section-wrapper').data('pause');

        $('#'+Id+" .esSlider").lightSlider({
            item: 1,
            pager: slidePager,
            controls: slideControl,
            loop: true,
            auto: slideAuto,
            speed: slideSpeed,
            pause: slidePause,
            enableTouch: false,
            enableDrag: false,
            rtl: rtlValue,
            slideMargin: 0,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            onSliderLoad: function() {
                $('.esSlider').removeClass( 'cS-hidden' );
            }
        });
    });

    /**
     * Slider featured carousel layout (vertically)
     */
    $('.slider-layout2 .es-slider-featured-section').each(function() {
        var Id = $(this).parents('.widget').attr('id');
        var NewId = Id;
        NewId = $('#' + Id + " .sliderFeatured").lightSlider({
            loop: true,
            pager: false,
            slideMargin:25,
            enableTouch: false,
            enableDrag: false,
            item: 2,
            rtl: rtlValue,
            vertical: true,
            verticalHeight:471,
            adaptiveHeight: true,
            vThumbWidth:100,
            prevHtml: '<i class="fa fa-angle-up"></i>',
            nextHtml: '<i class="fa fa-angle-down"></i>',
            onSliderLoad: function() {
                $('.sliderFeatured').removeClass('cS-hidden');
            },
            responsive: [{
                breakpoint: 981,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        item: 1,
                        slideMove: 1,
                         verticalHeight:200,
                    }
                }
            ]
        });
    });

     $('.slider-layout3 .es-slider-featured-section').each(function() {
        var Id = $(this).parents('.widget').attr('id');
        var NewId = Id;
        NewId = $('#' + Id + " .sliderFeatured").lightSlider({
            loop: true,
            pager: false,
            slideMargin:12,
            enableTouch: false,
            enableDrag: false,
            item: 2,
            rtl: rtlValue,
            vertical: true,
            verticalHeight:400,
            adaptiveHeight: true,
            vThumbWidth:100,
            prevHtml: '<i class="fa fa-angle-up"></i>',
            nextHtml: '<i class="fa fa-angle-down"></i>',
            onSliderLoad: function() {
                $('.sliderFeatured').removeClass('cS-hidden');
            },
            responsive: [{
                breakpoint: 981,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        item: 1,
                        slideMove: 1,
                        verticalHeight:200,
                    }
                }
            ]
        });
    });

    /**
     * Featured Products carousel layout
     */
    $('.featured-carousel').each(function() {
        var Id = $(this).parents('.widget').attr('id');
        var NewId = Id;
        NewId = $('#' + Id + " .featuredProducts").lightSlider({
            loop: true,
            pager: false,
            controls: false,
            slideMargin:25,
            enableTouch: false,
            enableDrag: false,
            item: 4,
            rtl: rtlValue,
            onSliderLoad: function() {
                $('.featuredProducts').removeClass('cS-hidden');
            },
            responsive: [{
                breakpoint: 981,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        item: 1,
                        slideMove: 1,
                    }
                }
            ]
        });

        $('#' + Id + ' .es-navPrev').click(function() {
            NewId.goToPrevSlide();
        });
        $('#' + Id + ' .es-navNext').click(function() {
            NewId.goToNextSlide();
        });
    });

    /**
     * Category Products carousel layout
     */
    $('.cat-products-carousel').each(function() {
        var Id = $(this).parents('.widget').attr('id');
        var NewId = Id;
        NewId = $('#' + Id + " .catProductsCarousel").lightSlider({
            loop: true,
            pager: false,
            controls: false,
            slideMargin:25,
            enableTouch: false,
            enableDrag: false,
            item: 4,
            rtl: rtlValue,
            onSliderLoad: function() {
                $('.catProductsCarousel').removeClass('cS-hidden');
            },
            responsive: [{
                breakpoint: 981,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 769,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 601,
                    settings: {
                        item: 1,
                        slideMove: 1,
                    }
                }
            ]
        });

        $('#' + Id + ' .es-navPrev').click(function() {
            NewId.goToPrevSlide();
        });
        $('#' + Id + ' .es-navNext').click(function() {
            NewId.goToNextSlide();
        });
    });


    /**
     * Testimonial slider script
     */
    $('.testimonials-section').each(function() {
        var Id = $(this).parents('.widget').attr('id');
        var NewId = Id;

        var itemCount = $(this).data('item');

        NewId = $('#' + Id + " .testimonialsPosts").lightSlider({
            item: itemCount,
            pager: true,
            loop: true,
            slideMargin:30,
            auto: true,
            speed: 3000,
            pause: 10000,
            enableTouch: false,
            enableDrag: true,
            rtl: rtlValue,
            controls:false,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            onSliderLoad: function() {
                $('.testimonialsPosts').removeClass( 'cS-hidden' );
            },
            responsive: [{
                        breakpoint: 769,
                        settings: {
                            item: 1,
                            slideMove: 1,
                        }
                    }
                ]
        });
    });

    /**
     * Sponsors slider script
     */
    $('.sponsors-layout1').each(function() {
        var Id = $(this).parents('.widget').attr('id');
        var NewId = Id;
        NewId = $('#' + Id + " .sponsorItem").lightSlider({
            item: 4,
            pager: false,
            loop: true,
            slideMargin:50,
            auto: true,
            speed: 3000,
            pause: 10000,
            enableTouch: false,
            enableDrag: true,
            rtl: rtlValue,
            controls:false,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            responsive: [{
                    breakpoint: 981,
                        settings: {
                            item: 4,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 769,
                        settings: {
                            item: 3,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 601,
                        settings: {
                            item: 2,
                            slideMove: 1,
                        }
                    }
                ]
        });
    });

    /**
     * Go to top
     */
    $('#es-scrollup').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });


    /* jquery to increase category Sidebar according to slider */
    $(window).on("load",function(){
        var contentHeight = $('.es-slider-section').outerHeight();
        $('.es-slider-cat-menu').css('height',contentHeight);
    });

     /* jquery to increase category Sidebar according to slider */
    $(window).on("load",function(){
        $(".product-categories").mCustomScrollbar({
            autoHideScrollbar:true,
        });
    });

    /**
     * ajax cal for wishlist count
     */
    $('.add_to_wishlist').on('click', function(){
        
        var counter = $('.es-wishlist-wrap .es-wl-counter');

        $.ajax({
            url: yith_wcwl_l10n.ajax_url,
            data: {
            action: 'easy_store_yith_wcwl_update_wishlist_count'
            },
            dataType: 'json',
            success: function( data ){
            counter.html( '( '+ data.count + ' )' );
            }
        })
    });

    
    //responsive menu toggle
    jQuery('.es-main-menu-wrapper .menu-toggle').click(function(event) {
        jQuery('.es-main-menu-wrapper #site-navigation').slideToggle('slow');
    });

    //responsive sub menu toggle
    jQuery('#site-navigation .menu-item-has-children,#site-navigation .page_item_has_children').append('<span class="sub-toggle"> <i class="fa fa-angle-right"></i> </span>');

    jQuery('#site-navigation .sub-toggle').click(function() {
        jQuery(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        jQuery(this).parent('.page_item_has_children').children('ul.children').first().slideToggle('1000');
        jQuery(this).children('.fa-angle-right').first().toggleClass('fa-angle-down');
    });

    /**
     * Video background
     */
    var mtPlayer;
    mtPlayer = $('.bg-video').YTPlayer({
        containment:'#videoCta',
        showControls:false, 
        loop:true, 
        mute:true, 
        opacity:1, 
        startAt:0,
        quality:'default',
        showYTLogo: false
    });

    /**
     * Preloader
     */
    if($('#preloader-background').length > 0) {
        setTimeout(function(){$('#preloader-background').hide();}, 600);
    }
    
});