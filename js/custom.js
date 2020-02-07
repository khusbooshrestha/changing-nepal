/* home slider*/
$(document).ready(function(){
  $('.home-slider').slick({
     autoplay: false,
     autoplaySpeed: 2000,
     dots: true,
     arrows:false
  });
});

//trending carousel//
$(document).ready(function(){
  $('.trending-carosel').slick({
     autoplay:true,
    autoplaySpeed:2000,
    speed: 300,
    arrows:false,
  slidesToShow: 4,
  slidesToScroll: 1,
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


  //demand carousel//
$(document).ready(function(){
  $('.job-demand-slider').slick({
     autoplay:false,
    autoplaySpeed:2000,
    speed: 300,
    arrows:true,
  slidesToShow: 3,
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