// Selfinvoking function (Lambda)
(function ($) {

   // Mobile nav
   var $mobileNavToggle = $(".mobile-toggle");
   $( document ).ready(function() {
      $mobileNavToggle.on("click", function() {
         $("nav").slideToggle(150);
      });
   });

   // Documentation Tabs
   $('.tabgroup > div').hide();
   $('.tabgroup > div:first-of-type').show();
   $('.tabs a').click(function(e){

      e.preventDefault();

      var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');

      others.removeClass('active');
      $this.addClass('active');
      $(tabgroup).children('div').hide();
      $(target).show();
   });

})(jQuery);
