(function ($) {
  'use strict';


  // Preloader
  $(window).on('load', function () {
    $('#preloader').fadeOut('slow', function () {
      $(this).remove();
    });
  });

  // e-commerce touchspin
  $('input[name=\'product-quantity\']').TouchSpin();


  // Video Lightbox
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  // Instagram Feed

  if (($('#instafeed').length) !== 0) {
    var userFeed = new Instafeed({
      get: 'user',
      userId: '623597756',
      resolution: 'low_resolution',
      accessToken: '623597756.02b47e1.3dbf3cb6dc3f4dccbc5b1b5ae8c74a72'
    });
    userFeed.run();

  }


  // Count Down JS
  $('#simple-timer').syotimer({
    year: 2019,
    month: 5,
    day: 9,
    hour: 20,
    minute: 30
  });


  //Hero Slider
  $('.hero-slider').slick({
    // autoplay: true,
    infinite: true,
    arrows: true,
    dots: true,
    prevArrow: '<button type=\'button\' class=\'heroSliderArrow prevArrow tf-ion-chevron-left\'></button>',
    nextArrow: '<button type=\'button\' class=\'heroSliderArrow nextArrow tf-ion-chevron-right\'></button>',
    dots: false,
    autoplaySpeed: 7000,
    pauseOnFocus: false,
    pauseOnHover: false
  });
  $('.hero-slider').slickAnimation();


})(jQuery);
