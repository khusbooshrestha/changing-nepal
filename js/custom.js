// home slider
$(document).ready(function(){
  $('.home-slider').slick({
     autoplay: false,
     autoplaySpeed: 2000,
     dots: false,
     arrows:true,
     nextArrow: '<i class="fas fa-chevron-right right"></i>',
  prevArrow: '<i class="fas fa-chevron-left left"></i>'
  });
});

//counter-js


$.fn.jQuerySimpleCounter = function( options ) {
  var settings = $.extend({
      start:  0,
      end:    100,
      easing: 'swing',
      duration: 400,
      complete: ''
  }, options );

  var thisElement = $(this);

  $({count: settings.start}).animate({count: settings.end}, {
  duration: settings.duration,
  easing: settings.easing,
  step: function() {
    var mathCount = Math.ceil(this.count);
    thisElement.text(mathCount);
  },
  complete: settings.complete
});
};


$('#number1').jQuerySimpleCounter({end: 12,duration: 5000});
$('#number2').jQuerySimpleCounter({end: 200,duration: 4000});
$('#number3').jQuerySimpleCounter({end: 500,duration: 3000});



  //demand carousel//
$(document).ready(function(){
  $('.product-carousel').slick({
     autoplay:false,
    autoplaySpeed:2000,
    speed: 300,
    arrows:true,
  slidesToShow: 4,
  slidesToScroll: 1,
  nextArrow: '<i class="fas fa-chevron-right right"></i>',
 prevArrow: '<i class="fas fa-chevron-left left"></i>',
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
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

  // testimonial

  $(document).ready(function(){
    $('.testimonial-carousel').slick({
       autoplay:false,
      autoplaySpeed:2000,
      speed: 300,
      arrows:false,
      dots:true
    });
  });

    //team carousel//
$(document).ready(function(){
  $('.team-carousel').slick({
     autoplay:false,
    autoplaySpeed:2000,
    speed: 300,
    arrows:true,
  slidesToShow: 4,
  slidesToScroll: 1,
  nextArrow: '<i class="fas fa-chevron-right right"></i>',
 prevArrow: '<i class="fas fa-chevron-left left"></i>',
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
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

//product vertical slide sync 
$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav',
   autoplay: false,
});
$('.slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  vertical:true,
  focusOnSelect: true,
  autoplay: false,

});


// magnify image for product
$(document).ready(function() {
  $('img').magnify();
});
