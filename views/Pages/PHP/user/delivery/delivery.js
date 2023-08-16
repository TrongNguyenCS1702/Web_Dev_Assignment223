$(document).ready(function () {
  $(".thumb-product")
    .mouseenter(function () {
      $(this).find(".lazy").css("opacity", 0);
      $(this).find(".hover-img").css("opacity", 1).css("visibility", "visible");
    })
    .mouseleave(function () {
      $(this).find(".lazy").css("opacity", 1);
      $(this).find(".hover-img").css("opacity", 0).css("visibility", "hidden");
    });
});
//
$(document).ready(function () {
  $("#applyFilter").click(function () {
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
  const price = document.getElementById("price");
  const inputValue = document.getElementById("priceSlider").value;
  const priceF = parseInt(inputValue, 10).toLocaleString("en-US");
  price.innerHTML = "Lớn hơn: " + priceF;
}
document.addEventListener("DOMContentLoaded", function () {
  var applyFilter = document.querySelector("#applyFilter");
  var unApplyFilter = document.querySelector("#unApplyFilter");
  applyFilter.addEventListener("click", function () {
    var priceSlider = document.getElementById("priceSlider").value;
    var product_list = document.getElementById("product-list");
    var priceSlider = document.getElementById("priceSlider").value;
   
    $.ajax({
      url: "index.php?action=filter",
      type: "POST",
      data: {
        type: type,
        category: category,
        figure: figure,
        search:search,
        priceSlider: priceSlider,
      },
      success: function (response) {
        product_list.innerHTML = response;
        unApplyFilter.style.display = "block";
      },
    });
  });
  unApplyFilter.addEventListener("click", function () {
    var product_list = document.getElementById("product-list");
    var priceSlider = document.getElementById("priceSlider");
    priceSlider.value = 0;
    unApplyFilter.style.display = "none";
    $.ajax({
      url: "index.php?action=filter",
      type: "POST",
      data: { type: type, category: category, figure: figure,search:search, priceSlider: 0 },
      success: function (response) {
        product_list.innerHTML = response;
      },
    });
  });
});
