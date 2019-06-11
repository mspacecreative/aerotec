(function($) {
	// STICKY MENU
	$(document).scroll(function() {
	  var y = $(this).scrollTop();
	  if (y > 200) {
	    $('.stickymenu, .stickymenu-mobile').addClass('reveal');
	  } else {
	    $('.stickymenu, .stickymenu-mobile').removeClass('reveal');
	  }
	});
});