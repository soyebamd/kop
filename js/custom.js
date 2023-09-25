jQuery(document).ready(function($) {
    "use strict";
    /*Preetyphoto
    ======================================================*/
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
        $(".pretty-gallery a[rel^='prettyPhoto']").prettyPhoto();
    });

    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }

    /*Home Banner
    ======================================================*/
    if ($('.banner-1').length) {
        $('.banner-1').owlCarousel({
            loop: false,
            dots: true,
            nav: false,
            items: 1,
			autoplay: true,
            smartSpeed: 1000,
            animateOut: 'flipOutY',
            animateIn: 'fadeIn',
            URLhashListener: true,
            autoplayHoverPause: false,
        });
    }
	
	/* Event Counter
    ======================================================*/
    if ($(".defaultCountdown-event-1").length) {
        var austDay = new Date();
        austDay = new Date(2021, 12, 18, 14);
        jQuery('.defaultCountdown-event-1').countdown({
            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Min', 'Sec'],
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    }

	
	//EVENT TIMER
    if ($('.countdown236').length) {
        var austDay = new Date();
        austDay = new Date(2022, 11 - 1, 11, 15, 35, 0);
        $('.countdown236').countdown({
            until: austDay,
        });
        $('#year').text(austDay.getFullYear());
    }
	
	
	 //Menu
    if ($('#menu').length) {
        $('#menu').owlCarousel({
            loop: true,
            dots: true,
            nav: true,
            navText: '',
            items: 5,
            smartSpeed: 1000,
            padding: 0,
            margin: 30,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1199: {
                    items: 5,
                }
            }
        });
    }
	
	 /*Mobile Menu Effect
    ======================================================*/
    jQuery(document).ready(function($) {
        "use strict";
        jQuery(".navbar-toggle").on("click", function() {
            jQuery(this).toggleClass("active");
        });

        $('.dropdown-toggle').click(function() {
            $(this).next('.dropdown-menu').slideToggle(500);
        });

        $(document).click(function() {
            $(".dropdown-menu").hide();
        });
    });

    jQuery(document).ready(function($) {
        jQuery(".navbar-toggle").click(function($) {
            if (jQuery(this).parent().hasClass("popped")) {
                jQuery(this).parent().animate({
                    left: '-400px'
                }, {
                    queue: false,
                    duration: 500
                }).removeClass("popped");
                jQuery(".overlay").slideToggle(500);
            } else {
                jQuery(this).parent().animate({
                    left: "0px"
                }, {
                    queue: false,
                    duration: 500
                }).addClass("popped");
                jQuery(".overlay").slideToggle(300);
            }
        });




    });
	
});

