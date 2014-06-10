jQuery(document).ready(function(){

  $('#currency').load("currency.php");

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
    interval: 5000
  });

  $(document).on('click', '.j-message-send', function(event) {
      event.preventDefault();
      $('.alert-message-true').load("message.php", { '4a545eea722cf0ae1033bdb91b861d81': $('.j-message-name').val(), 'cab0d407c2f90da0f7956cb2155f6f26': $('.j-message-phone').val(), 'd244447c221924b34cda6065bd61bb9c': $('.j-message-title').val(), 'aebf1289d1d0ad50b8b4c302245dd1f9': $('.j-message-text').val() }).slideDown(500).delay(3000).slideUp(500);
      // $('.alert-message-true').html('Ваше письмо отправлено! Пожалайста подождите немного и с вами свяжется наш сотрудник.');
      $('#message').modal('hide');
      $("#message").find('form').trigger('reset');
      return false;
  });

  $(document).on('click', '.j-callback-send', function(event) {
      event.preventDefault();
      $('.alert-message-true').load("callback.php", { '11F1A3A9CC1486DFFECC0F35334CDF16FAEF863D': $('.j-callback-name').val(), '8835E3D5DF64178F370BF9F841ECF54D5D8D079D': $('.j-callback-phone').val()}).slideDown(500).delay(3000).slideUp(500);
      // $('.alert-message-true').html('Ваше письмо отправлено! Пожалайста подождите немного и с вами свяжется наш сотрудник.');
      $('#callback').modal('hide');
      $("#callback").find('form').trigger('reset');
      return false;
  });
});

