// script.js

const minRangeValueGap = 0;
const range = document.getElementById("range_track");
const minval = document.querySelector(".minvalue");
const maxval = document.querySelector(".maxvalue");
const rangeInput = document.querySelectorAll("input");

let minRange = parseInt(rangeInput[0].value);
let maxRange = parseInt(rangeInput[1].value);

const setMinValueOutput = () => {
    minval.innerHTML = minRange.toLocaleString("vi-VN") + "đ";
};

const setMaxValueOutput = () => {
    maxval.innerHTML = maxRange.toLocaleString("vi-VN") + "đ";
};

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        minRange = parseInt(rangeInput[0].value);
        maxRange = parseInt(rangeInput[1].value);

        setMinValueOutput();
        setMaxValueOutput();

        if (maxRange - minRange < minRangeValueGap) {
            if (e.target.className === "min") {
                rangeInput[0].value = maxRange - minRangeValueGap;
                minRange = maxRange - minRangeValueGap;
                setMinValueOutput();
            } else {
                rangeInput[1].value = minRange + minRangeValueGap;
                maxRange = minRange + minRangeValueGap;
                setMaxValueOutput();
            }
        }
    });
});

// Initialize the min and max value outputs
setMinValueOutput();
setMaxValueOutput(); 

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


