$(document).ready(function() {
    $(".thumb-product").mouseenter(function() {
      $(this).find(".lazy").css("opacity", 0); 
      $(this).find(".hover-img").css("opacity", 1).css("visibility", "visible"); 
    }).mouseleave(function() {
      $(this).find(".lazy").css("opacity", 1); 
      $(this).find(".hover-img").css("opacity", 0).css("visibility", "hidden"); 
    });
  });
