(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		function mapOffset() {
			var paddingOffset = $('.approved-centres').prev().css('padding-bottom');
			$('.approved-centres').css('margin-top', '-' + paddingOffset);
			$('#map').css('margin-top', paddingOffset);
		}
		
		function pageContainerClear() {
			$('#page-container').css('padding-top', $('#main-header').height());
		}
		
		function bgImageContainer() {
			$('.one-half.bg-img').height($('.one-half.bg-img').siblings('.one-half').outerHeight());
		}
		
		function sliderHeight() {
			$('.hero-slider').height($(window).height());
		}
		
		function pgwGallery() {
			$('.pgwSlider').pgwSlider({
				transitionEffect: 'sliding',
				autoSlide: false,
				verticalCentering: true,
			});
		}
		
		$(document).ready(function() {
			sliderHeight();
			mapOffset();
			bgImageContainer();
			pageContainerClear();
			pgwGallery();
			
			/*if ($('body').hasClass('home')) {
				$('.alt-logo').css('display', 'none');
			} else {
				$('.alt-logo').css('display', 'inline-block');
				$('#logo').css('display', 'none');
			}*/
		});
		
		$(window).resize(function() {
			sliderHeight();
			mapOffset();
			bgImageContainer();
			pageContainerClear();
		});
		
		$(window).load(function() {
			$('.hero-slider,.testimonials-slider, .photo-gallery').slick({
			    //autoplay: true,
				dots: true,
				adaptiveHeight: true,
			});
			
			/*$(".ps-current img").each(function(i, elem) {
			  var img = $(elem);
			  var div = $('.ps-current img').parent().css({
			    background: "url(" + img.attr("src") + ") no-repeat"
			  });
			  img.replaceWith(div);
			});*/
			
			$('.ps-current li').each(function () {
			    var $container = $(this),
			        imgUrl = $container.find('img').prop('src');
			    if (imgUrl) {
			      $container
			        .css('backgroundImage', 'url(' + imgUrl + ')')
			        .addClass('compat-object-fit');
			    }
			});
		});
		
	});
	
})(jQuery, this);
