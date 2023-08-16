

function updateCart(id,type,price) {
    $.ajax({
      url: "views/Pages/PHP/user/cart/update_cart.php", // Đường dẫn đến tệp PHP xử lý cập nhật giỏ hàng
      type: "POST",
      data: { id: id,type:type ,price:price},
      success: function(response) {
        document.getElementById("quantity").value = response ;
      }
    });
};
