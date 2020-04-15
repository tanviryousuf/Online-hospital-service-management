(function($) {
  $(function() {
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  });
})(jQuery);

$(document).ready(function(){

  $(".add").on("click", function(){
     let struct = "<div class='table-row'>"+
        "<div class='cell'>101</div>"+
        "<div class='cell'>Rogelio Heredia</div>"+
        "<div class='cell'>Dulceria</div>"+
        "<div class='cell'>2</div>"+
      "</div>";

    $(".table-body").append(struct);
  });

  $(".delete").on("click", function(){
    let $lastRow = $(".table-body").children().last();
    $lastRow.addClass("deleted").on("animationend", function(){
      $lastRow.remove();
    });
  });

});
