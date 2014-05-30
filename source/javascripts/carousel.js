$(function() {
  var left = {
    second      : -300,
    third     : -300,
    first     : -300
  }
  var current = {
    second      : 657,
    third     : 354,
    first     : 45
  }
  var right = {
    second      : 990,
    third     : 990,
    first     : 990
  }

  var isScrolling = false;

  $('#carousel').carouFredSel({
    scroll  : {
      duration    : 0,
      timeoutDuration : 8000
    },
    auto  : true,
    prev  : {
      button    : '#prev',
      conditions  : function() {
        return (!isScrolling);
      },
      onBefore  : function( data ) {
        isScrolling = false;

        $(this).delay(900);

        data.items.old.find('.second')
          .delay(300)
          .animate({
            left: right.second
          });

        data.items.old.find('.third')
          .delay(200)
          .animate({
            left: right.third
          });

        data.items.old.find('.first')
          .delay(400)
          .animate({
            left: right.first
          });
      },
      onAfter: function( data ) {

        data.items.old.find('.second')
          .animate({
            left: current.second
          });

        data.items.old.find('.third')
          .css({
            left: current.third
          });

        data.items.old.find('.first')
          .css({
            left: current.first
          });

        data.items.visible.find('.second')
          .css({
            left: left.second
          }).delay(300)
          .animate({
            left: current.second
          });

        data.items.visible.find('.third')
          .css({
            left: left.third
          }).delay(200)
          .animate({
            left: current.third
          });

        data.items.visible.find('.first')
          .css({
            left: left.first
          }).delay(400)
          .animate({
            left: current.first
          });
      }
    },
    next  : {
      button    : '#next',
      conditions  : function() {
        return (!isScrolling);
      },
      onBefore  : function( data ) {
        isScrolling = false;

        $(this).delay(900); //  delay the onafter

        data.items.old.find('.second')
          .delay(200)
          .animate({
            left: left.second
          });

        data.items.old.find('.third')
          .delay(300)
          .animate({
            left: left.third
          });

        data.items.old.find('.first')
          .delay(400)
          .animate({
            left: left.first
          });
      },
      onAfter: function( data ) {

        data.items.old.find('.second')
          .animate({
            left: current.second
          });

        data.items.old.find('.third')
          .css({
            left: current.third
          });

        data.items.old.find('.first')
          .css({
            left: current.first
          });

        data.items.visible.find('.second')
          .css({
            left: right.second
          }).delay(200)
          .animate({
            left: current.second
          });

        data.items.visible.find('.third')
          .css({
            left: right.third
          }).delay(300)
          .animate({
            left: current.third
          });

        data.items.visible.find('.first')
          .css({
            left: right.first
          }).delay(400)
          .animate({
            left: current.first
          }, function() {
            isScrolling = false;
          });
      }
    }
  });
});