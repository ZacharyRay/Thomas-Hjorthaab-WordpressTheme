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


// Gallery SLider 

$('.main-carousel').flickity({
  // options
  wrapAround: true,
  resize: false,
  setGallerySize: false,
});

function x() {
  $('.main-carousel').each(function() {
    if ($(this).find('div.carousel-cell').length === 1) {
       $(this).find('button.flickity-prev-next-button.previous, button.flickity-prev-next-button.next, ol.flickity-page-dots').hide();
    }
  });
 };
 setTimeout(x,50);


// Video gallery

$('.carousel-video-gallery').flickity({
  
  pageDots: true,
  wrapAround: true,
  cellAlign: 'center',
  fullscreen: true
});

});