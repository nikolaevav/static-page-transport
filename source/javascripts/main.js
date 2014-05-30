jQuery(document).ready(function(){

  Date.prototype.getDOY = function() {
    var onejan = new Date(this.getFullYear(),0,1);
    return Math.ceil((this - onejan) / 86400000);
  }

  var today = new Date();
  var daynum = today.getDOY();

  $('#j-counter').html(daynum * 4);
});