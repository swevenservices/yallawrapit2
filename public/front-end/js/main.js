(function($){
	"use strict";

    // Header Sticky
    $(window).on('scroll',function() {
        if ($(this).scrollTop() > 120){
            $('.navbar-area').addClass("is-sticky");
        }
        else{
            $('.navbar-area').removeClass("is-sticky");
        }
    });

    // Sidebar Modal
    $(".burger-menu").on('click',  function() {
        $('.sidebar-modal').toggleClass('active');
    });
    $(".sidebar-modal-close-btn").on('click',  function() {
        $('.sidebar-modal').removeClass('active');
    });

    // Mean Menu
    jQuery('.mean-menu').meanmenu({
        meanScreenWidth: "991"
    });

    // Button Hover JS
    $(function() {
        $('.default-btn, .optional-btn')
        .on('mouseenter', function(e) {
            var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
        })
        .on('mouseout', function(e) {
            var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
            $(this).find('span').css({top:relY, left:relX})
        });
    });

    // Search Popup JS
    $('.close-btn').on('click',function() {
        $('.search-overlay').fadeOut();
        $('.search-btn').show();
        $('.close-btn').removeClass('active');
    });
    $('.search-btn').on('click',function() {
        $(this).hide();
        $('.search-overlay').fadeIn();
        $('.close-btn').addClass('active');
    });

    // Home Slides
    $('.home-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        animateOut: 'fadeOut',
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 750,
        autoHeight: true,
        items: 1,
        navText: [
            "<i class='flaticon-left-chevron'></i>",
            "<i class='flaticon-right-chevron'></i>"
        ],
    });
    $(".home-slides").on("translate.owl.carousel", function(){
        $(".main-banner-content h1").removeClass("animated fadeInDown").css("opacity", "0");
        $(".main-banner-content p").removeClass("animated zoomIn").css("opacity", "0");
        $(".main-banner-content .btn-box").removeClass("animated fadeInUp").css("opacity", "0");
    });
    $(".home-slides").on("translated.owl.carousel", function(){
        $(".main-banner-content h1").addClass("animated fadeInDown").css("opacity", "1");
        $(".main-banner-content p").addClass("animated zoomIn").css("opacity", "1");
        $(".main-banner-content .btn-box").addClass("animated fadeInUp").css("opacity", "1");
    });

    // Home Slides Two
    $('.home-slides-two').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        animateOut: 'fadeOut',
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 750,
        autoHeight: true,
        items: 1,
        navText: [
            "<i class='flaticon-left-chevron'></i>",
            "<i class='flaticon-right-chevron'></i>"
        ],
    });
    $(".home-slides, .home-slides-two").on("translate.owl.carousel", function(){
        $(".main-banner-content h1").removeClass("animated fadeInDown").css("opacity", "0");
        $(".main-banner-content p").removeClass("animated zoomIn").css("opacity", "0");
        $(".main-banner-content .btn-box").removeClass("animated fadeInUp").css("opacity", "0");
    });
    $(".home-slides, .home-slides-two").on("translated.owl.carousel", function(){
        $(".main-banner-content h1").addClass("animated fadeInDown").css("opacity", "1");
        $(".main-banner-content p").addClass("animated zoomIn").css("opacity", "1");
        $(".main-banner-content .btn-box").addClass("animated fadeInUp").css("opacity", "1");
    });

    // Last Word Color JS
    $(".section-title h2").html(function(){
        var text= $(this).text().trim().split(" ");
        var last = text.pop();
        return text.join(" ") + (text.length > 0 ? " <span>" + last + "</span>" : last);
    });

    // Video Popup JS
    $('.popup-youtube').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    // Odometer JS
    $('.odometer').appear(function(e) {
        var odo = $(".odometer");
        odo.each(function() {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });

    // Services Slides
    $('.services-slides').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        navText: [
            "<i class='flaticon-left-chevron'></i>",
            "<i class='flaticon-right-chevron'></i>"
        ],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 4,
            }
        }
    });

    // Testimonials Slides
    $('.testimonials-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        margin: 30,
        navText: [
            "<i class='flaticon-left-chevron'></i>",
            "<i class='flaticon-right-chevron'></i>"
        ],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 3,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        }
    });



    // Partner Slides
    $('.partner-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        navText: [
            "<i class='flaticon-left-chevron'></i>",
            "<i class='flaticon-right-chevron'></i>"
        ],
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 4,
            },
            1200: {
                items: 6,
            }
        }
    });

    // Instagram Feed Slides
    $('.instagram-feed-slides').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        navText: [
            "<i class='flaticon-left-chevron'></i>",
            "<i class='flaticon-right-chevron'></i>"
        ],
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 4,
            },
            1200: {
                items: 6,
            }
        }
    });


    // Go to Top
    $(function(){
        // Scroll Event
        $(window).on('scroll', function(){
            var scrolled = $(window).scrollTop();
            if (scrolled > 600) $('.go-top').addClass('active');
            if (scrolled < 600) $('.go-top').removeClass('active');
        });
        // Click Event
        $('.go-top').on('click', function() {
            $("html, body").animate({ scrollTop: "0" },  500);
        });
    });

	// WOW JS
	$(window).on ('load', function (){
        if ($(".wow").length) {
            var wow = new WOW({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       20,          // distance to the element when triggering the animation (default is 0)
            mobile:       true, // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
          });
          wow.init();
        }
    });

    // Preloader
	jQuery(window).on('load', function() {
		$('.preloader').fadeOut();
	});

}(jQuery));
