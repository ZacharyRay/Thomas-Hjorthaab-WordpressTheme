jQuery(document).ready(function($) {

  // scroll handler

$(document).ready(function() {
  $('#fullpage').fullpage({
    licenseKey: '77C8EC50-E0BD4142-A53D6306-FE07789F',
    navigation: true,
    navigationPosition: 'right',
    showActiveTooltip: true,
    slidesNavigation: true,
    slidesNavPosition: 'bottom',
    scrollingSpeed: (700),
  });
  //methods
  $.fn.fullpage.setAllowScrolling(true);
});

// arrow down
$(function(){
  $('.scene_one_arrow').click(function (event) {
      event.preventDefault();
      $.fn.fullpage.moveSectionDown();
  });
});

});