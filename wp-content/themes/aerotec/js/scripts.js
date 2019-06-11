(function($) {
	function mapOffset() {
		var paddingOffset = $('.approved-centres').prev().css('padding-bottom');
		$('.approved-centres').css('margin-top', '-' + paddingOffset);
		$('#map').css('margin-top', paddingOffset);
	}
	
	function changeHeader() {
		if ( window.location.pathname == '/' ) {
			if ($('.home .stickymenu').hasClass('reveal')) {
				$('.home #logo').css('display', 'none');
				$('.alt-logo').css('display', 'inline-block');
				$('#main-header').css('background-color', '#fff');
				$('.hamburger-inner').addClass('change');
			} else {
				$('.home #logo').css('display', 'inline-block');
				$('.alt-logo').css('display', 'none');
				$('#main-header').css('background-color', 'transparent');
				$('.hamburger-inner').removeClass('change');
			}
		}
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
	
	function checkSize() {
		$('.ps-current li, .ps-list li').each(function () {
		    var $container = $(this),
		        imgUrl = $container.find('img').prop('src');
		    if (imgUrl) {
		      $container
		        .css('backgroundImage', 'url(' + imgUrl + ')')
		        .addClass('compat-object-fit');
		    }
		});
	}
	
	$(document).ready(function() {
		sliderHeight();
		mapOffset();
		bgImageContainer();
		pageContainerClear();
		pgwGallery();
		checkSize();
		
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
		checkSize();
	});
	
	$(window).load(function() {
		$('.hero-slider,.testimonials-slider, .photo-gallery').slick({
		    //autoplay: true,
			dots: true,
			adaptiveHeight: true,
		});
	});
	
	$(window).scroll(function () {
		changeHeader();
	});
})(jQuery);
