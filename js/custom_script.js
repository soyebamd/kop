

    $.fn.equalHeights = function(){
        var max_height = 0;
        $(this).each(function(){
            max_height = Math.max($(this).height(), max_height);
        });
        $(this).each(function(){
            $(this).height(max_height);
        });
    };
    

    


jQuery(document).ready(function($) {
    "use strict";

    
//afterBanner

const windowWidth = $(window).width();

if(windowWidth <= 768 ){

$('#afterBanner').insertAfter($('#banner'));

}


    $('.equaHeight').equalHeights();
	
	/*SIDEBAR NAV
	======================================================*/
    if ($('#tl_side-menu-btn, #tl-close-btn').length) {
        $('#tl_side-menu-btn, #tl-close-btn').on('click', function(e) {
            var $navigacia = $('body, #tl_side-menu'),
                val = $navigacia.css('right') === '410px' ? '0px' : '410px';
            $navigacia.animate({
                right: val
            }, 410)
        });
    }

    /*Home Banner
    ======================================================*/
     if ($('#home-slider').length) {
        $('#home-slider').owlCarousel({
            loop:true,
            dots: true,
            nav:true,
            navText:'',
            items:1,
            autoplay: false,
            smartSpeed:2000,

        });
    }


    /* Owl Slider For Featured Section
    ======================================================*/
    if ($('#cp-time-slider').length) {
        $('#cp-time-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:false,
            navText:'',
            items:4,
            smartSpeed:500,
            margin:0,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1199:{
                    items:4,
                }
            }
        });
    }
	
	/* PrettyPhoto Script
    ======================================================*/
    $('a[data-rel]').each(function () {
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
	

});

	
	/* Event Counter
    ======================================================*/
    if ($(".defaultCountdown-event-1").length) {
        var austDay = new Date();
        austDay = new Date(2022, 10 - 10, 19);
        jQuery('.defaultCountdown-event-1').countdown({
            labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Min', 'Sec'],
            until: austDay
        });
        jQuery('#year').text(austDay.getFullYear());
    }
	

