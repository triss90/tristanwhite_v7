$(document).ready(function () {


   // Smootscrolling
   $('a[href*=#]:not([href=#])').click(function () {
      if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         if (target.length) {
            $('html,body').animate({scrollTop: target.offset().top}, 1000);
         return false;
         }
      }
   });


   // Header Parallax
   $(window).scroll(function(){
     var wScroll = $(this).scrollTop();
     $('#tagline').css({
        'transform' : 'translate(0px, '+ wScroll /5 +'%)'
     });
     $('#tristan').css({
         'transform' : 'translate(0px, '+ wScroll /15 +'%)'
     });
   });


   // Mobile menu
   $('.menu-btn').click(function () {
      $('.menu').slideToggle();
   });
   $('.menu ul li a').click(function () {
      var wWidth = $(window).width();
      if(wWidth > 768) {
         $('.menu').show();
      }
      else if(wWidth < 768) {
         $('.menu').hide();
      }
   });
   $(window).resize(function(){
      var wWidth = $(this).width();
      if( wWidth > 768) {
         $('.menu').show();
      }
   });


   // Work item animation
   setInterval(function() {
      var random = Math.floor(Math.random()*4);
      $('.prj-item').removeClass('tada').eq(random).addClass('tada');
   }, 5000);


});
