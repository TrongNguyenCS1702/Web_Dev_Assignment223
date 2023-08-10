$(document).ready(function() {
    $(".thumb-product").mouseenter(function() {
      $(this).find(".lazy").css("opacity", 0); // Ẩn hình ảnh gốc
      $(this).find(".hover-img").css("opacity", 1).css("visibility", "visible"); // Hiển thị hình ảnh hover
    }).mouseleave(function() {
      $(this).find(".lazy").css("opacity", 1); // Hiển thị lại hình ảnh gốc
      $(this).find(".hover-img").css("opacity", 0).css("visibility", "hidden"); // Ẩn hình ảnh hover
    });
  });
