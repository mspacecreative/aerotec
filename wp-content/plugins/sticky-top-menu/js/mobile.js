// STICKY MENU
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
    $('.stickymenu').addClass('reveal');
  } else {
    $('.stickymenu').removeClass('reveal');
  }
});