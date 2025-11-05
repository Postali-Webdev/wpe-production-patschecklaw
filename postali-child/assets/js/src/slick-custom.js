/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

// Testimonial Slider
jQuery( function ( $ ) {
	"use strict";

	$('#testimonial-slider .slider-for').slick({
		dots: false,
		infinite: true,
		fade: true,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 500,
		slidesToShow: 1,
		slidesToScroll: 1,
    	swipeToSlide: true,
	});
	
	$('#award-slider .slider-for').slick({
		dots: false,
		infinite: true,
		fade: false,
		autoplay: true,
  		autoplaySpeed: 5000,
  		speed: 1300,
		slidesToShow: 2,
		slidesToScroll: 2,
    	swipeToSlide: true,
		responsive: [
			{
			  breakpoint: 480,
			  settings: {
				  slidesToShow: 1,
			  	slidesToScroll: 1
			  }
			}

		  ]
		
	});

    $('#timeline').slick({
		dots: false,
		infinite: false,
		fade: false,
		autoplay: false,
  		speed: 1300,
		slidesToShow: 4,
		slidesToScroll: 1,
    	swipeToSlide: true,
		responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
			{
                breakpoint: 820,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
			  breakpoint: 480,
			  settings: {
				  slidesToShow: 1,
			  	slidesToScroll: 1
			  }
			}

		  ]
		
	});
	
});

