const bigImg = document.querySelector(".product-content-left-big-img img");
const smallImg = document.querySelectorAll(".product-content-left-small-img img");

smallImg.forEach(function (imgItem) {
  imgItem.addEventListener("click", function () {
    bigImg.src = imgItem.src;
  });
});

const baoquan = document.querySelector(".baoquan");
const chitiet = document.querySelector(".chitiet");

if (baoquan && chitiet) {
  baoquan.addEventListener("click", function () {
    document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none";
    document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block";
  });

  chitiet.addEventListener("click", function () {
    document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block";
    document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none";
  });
}

const butt = document.querySelector(".product-content-right-bottom-content-title-item");

if (butt) {
  butt.addEventListener("click", function (event) {
    if (event.target.classList.contains("chitiet")) {
      console.log('a');
      document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block";
      document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none";
    } else if (event.target.classList.contains("baoquan")) {
      document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none";
      document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block";
    }
  });
}

const toggleButton = document.querySelector(".product-content-right-bottom-top");

if (toggleButton) {
  toggleButton.addEventListener("click", function () {
    document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB");
  });
}
//
// Get references to the elements
document.addEventListener("DOMContentLoaded", function() {
  const bibigimagegImg = document.getElementById('bigimage');
  const smallImages = document.querySelectorAll('.small-image');

  smallImages.forEach((smallImage) => {
    smallImage.addEventListener('click', () => {
      const newSrc = smallImage.getAttribute('src');
      bigimage.setAttribute('src', newSrc);
    });
  });
});
function add(id,price,name,img) {


  // Gửi số lượng lên máy chủ bằng AJAX (không bắt buộc)
  $.ajax({
    url: "views/Pages/PHP/user/product page interface/update_cart.php", // Đường dẫn đến tệp PHP xử lý cập nhật giỏ hàng
    type: "POST",
    data: { id:id,price: price,img: img, name:name },
    success: function(response) {
      $(".cart-count").text(response);
      console.log(response);
    }
  });

}