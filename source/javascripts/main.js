jQuery(document).ready(function(){

  Date.prototype.getDOY = function() {
    var onejan = new Date(this.getFullYear(),0,1);
    return Math.ceil((this - onejan) / 86400000);
  }

  var today = new Date();
  var daynum = today.getDOY();

  $('#j-counter').html(daynum * 4);

  $('a.smooth').bind('click.smoothscroll',function (e) {
    e.preventDefault();
    var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
      window.location.hash = target;
    });
  });

  $(document).on("scroll", function() {
    if ( $(document).scrollTop() > $(".clear").offset().top + $(".clear").outerHeight() ) {
      $("#menu").addClass("menu-fixed");
    } else {
      $("#menu").removeClass("menu-fixed");
    }
  });

  $('.carousel').carousel({
    interval: 500000
  });
});