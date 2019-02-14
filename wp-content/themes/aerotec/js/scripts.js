(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		function mapOffset() {
			var paddingOffset = $('.approved-centres').prev().css('padding-bottom');
			$('.approved-centres').css('margin-top', '-' + paddingOffset);
			$('#map').css('margin-top', paddingOffset);
		}
		
		function bgImageContainer() {
			$('.one-half.bg-img').height($('.one-half.bg-img').siblings('.one-half').outerHeight());
		}
		
		function sliderHeight() {
			$('.hero-slider').height($(window).height());
		}
		
		$(document).ready(function() {
			sliderHeight();
			mapOffset();
			bgImageContainer();
		});
		
		$(window).resize(function() {
			sliderHeight();
			mapOffset();
			bgImageContainer();
		});
		
		$(window).load(function() {
			$('.hero-slider,.testimonials-slider').slick({
			    //autoplay: true,
				dots: true,
				adaptiveHeight: true,
			});
		});
		
	});
	
})(jQuery, this);
