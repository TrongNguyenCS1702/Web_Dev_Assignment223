$(document).ready(function() {
    $(".thumb-product").mouseenter(function() {
      $(this).find(".lazy").css("opacity", 0); 
      $(this).find(".hover-img").css("opacity", 1).css("visibility", "visible"); 
    }).mouseleave(function() {
      $(this).find(".lazy").css("opacity", 1); 
      $(this).find(".hover-img").css("opacity", 0).css("visibility", "hidden"); 
    });
  });
//
$(document).ready(function() {
  $("#applyFilter").click(function() {
      var selectedRange = $("#priceRange").val();
      var selectedSliderValue = $("#priceSlider").val();
      
      // Here you can implement your logic to filter data based on the selected range or slider value.
      // For example, you can make an AJAX request to fetch filtered data from the server.
      // Then update your UI accordingly.
      
      console.log("Selected Range:", selectedRange);
      console.log("Selected Slider Value:", selectedSliderValue);
  });
});

function change() {
  const price = document.getElementById('price');
  const inputValue = document.getElementById("priceSlider").value;
  price.innerHTML = 'Lớn hơn: '+inputValue
}