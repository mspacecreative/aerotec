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
	$('.hero-slider').slick({
	    //autoplay: true,
		dots: true,
		adaptiveHeight: true,
	});
	
	//$('.services-section').ClipPath('0 0, 100% 0, 220% 110%, 0 70%');
	
	sliderHeight();
	mapOffset();
	bgImageContainer();
});

$(window).resize(function() {
	sliderHeight();
	mapOffset();
	bgImageContainer();
});
