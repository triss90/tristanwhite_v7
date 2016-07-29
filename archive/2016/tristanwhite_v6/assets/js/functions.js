/******* Responsive Navigation *******/
var responsiveNav = function() {
  var toggleMenu = $('.toggle-menu'),
      nav = $('#navigation'),
      navLink = $('#navigation nav a');
  toggleMenu.on('click', function() {
     nav.toggleClass('nav-active');
     $(this).toggleClass('cross');
     $(this).toggleClass('toggle-menu-active');
  });
  navLink.on('click', function() {
     nav.toggleClass('nav-active');
     toggleMenu.removeClass('toggle-menu-active');
  });
  $(window).resize(function(){
     var wWidth = $(this).width();
     if( wWidth > 992) {
        nav.removeClass('nav-active');
        toggleMenu.removeClass('cross');
        toggleMenu.removeClass('toggle-menu-active');
     }
  });
};

/******* Work Modal popup *******/
var modal = function() {
  var workItem = $('.work-item'),
      modal = $('.modal'),
      closeButton = $('.close'),
      overlay = $('.overlay'),
      body = $('body'),
      esc = 27;
  // Open modal and disable body-scroll
  workItem.on('click', function(e) {
    e.preventDefault();
    $(this).next(modal).toggleClass('open');
    overlay.toggleClass('on');
    body.css('overflow', 'hidden');
  });
  // Close modal and enable body-scroll
  closeButton.on('click', function(e) {
    e.preventDefault();
    $(this).parent(modal).removeClass('open');
    overlay.removeClass('on');
    body.css('overflow', 'scroll');
  });
  $(document).keyup(function(e) {
    if (e.keyCode === esc) {
      modal.removeClass('open');
      overlay.removeClass('on');
      body.css('overflow', 'scroll');
    }
  });
};


$(document).ready(function() {
   responsiveNav();
   modal();
});
