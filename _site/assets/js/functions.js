

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

$(function() {

  navigation();

});
