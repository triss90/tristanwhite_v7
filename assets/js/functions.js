/**
  Navigation
**/
function navigation() {
  var toggle = $('#menu-toggle'),
      menu = $('#menu'),
      menuItem = $('#menu a');

  toggle.on('click', function() {
    menu.toggleClass('active');
    if (toggle.hasClass('active')) {
      toggle.removeClass('active').html('&#9776;');
    } else {
      toggle.addClass('active').html('&#10005;');
    }
  });

  menuItem.on('click', function() {
    menu.removeClass('active');
  });

}


/**
  Carousel
**/
function carousel(){
  function getTallestUnitHeight(){
    var heights = [];
    for (var i = 0; i < unitCount; i++) {
      var height = $carouselUnits.eq(i).height();
      heights.push(height);
    }
    var tallest = Math.max.apply(Math, heights) + 120;
    return tallest;
  }
  var $carouselWrap = $('.carousel-wrap'),
      $carousel = $('.carousel'),
      $carouselUnits = $carouselWrap.find('.carousel-unit'),
      unitCount = $carouselUnits.length,
      tallestUnitHeight = getTallestUnitHeight(),
      $carouselNav = $('.carousel-nav');
  function initCarousel(){
    $carouselUnits.height(tallestUnitHeight).first().addClass('is-current');
    $carouselWrap.height(tallestUnitHeight);
    $carousel.height(tallestUnitHeight);
  }
  initCarousel();
  function nextTestimonial(){
    if ($carouselUnits.filter('.is-current').index() < unitCount-1) {
        $carouselUnits.filter('.is-current').next().addClass('is-current').siblings().removeClass('is-current');
    }
    else {
      $carouselUnits.first().addClass('is-current').siblings().removeClass('is-current');
    }
  }
  function prevTestimonial(){
    if ($carouselUnits.filter('.is-current').index() === 0) {
      $carouselUnits.last().addClass('is-current').siblings().removeClass('is-current');
    }
    else {
      $carouselUnits.filter('.is-current').prev().addClass('is-current').siblings().removeClass('is-current');
    }
  }
  var carouselInterval = setInterval(function(){
    nextTestimonial();
  }, 4500);
  $carouselNav.children('svg').on('click', function(){
    clearInterval(carouselInterval);
    if ($(this).index() === $carouselNav.length) {
      nextTestimonial();
    } else {
      prevTestimonial();
    }
  });
}


/**
  Shake random video element on home page
**/
function shakeVideo() {
  window.setInterval(function() {
    var random = Math.floor(Math.random()*3),
        videoLink = $('.video-link');
    videoLink.eq(random).addClass('shake');
    setTimeout(function() {
      videoLink.removeClass('shake');
    }, 1000);
  }, 5000);
}


/**
  Banner
**/
function bannerFade() {
  setTimeout(function() {
    var monitor = $('#monitor');
    monitor.addClass('fadeIn');
  }, 1000);
}



/**
  Run functions
**/
$(function() {
  navigation();
  carousel();
  shakeVideo();
  bannerFade();
});
