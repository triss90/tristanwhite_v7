/**
  Navigation
**/
function navigation() {
  var toggle = $('#menu-toggle'),
      menu = $('#menu');

  toggle.on('click', function() {
    menu.toggleClass('active');
    if (toggle.hasClass('active')) {
      toggle.removeClass('active').html('&#9776;');
    } else {
      toggle.addClass('active').html('&#10005;');
    }
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
  Alternative navigation schema
**/
function altNav() {
  var article = $('#article'),
      nav = $('nav');
  if(article.hasClass('video')) {
    nav.addClass('alt-nav');
  }
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
  Morph send button
**/
function sendButton() {
  var button = $('.sendbutton');
  button.on('click', function() {
    $(this).hide().html('Sending <span class="loading"></span>').fadeIn('fast');
    setTimeout( function(){
      button.hide().html('Message sent &#10003;').fadeIn('fast');
    }, 3000 );
  });
}


/**
  Run functions
**/
$(function() {

  navigation();
  altNav();
  carousel();
  shakeVideo();
  sendButton();

});
