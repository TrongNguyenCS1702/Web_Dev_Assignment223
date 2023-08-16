function addVoucher() {
    const voucherInput = document.getElementById("coupon_code_text").value;

    $.ajax({
      url: "index.php?action=check_voucher", // Đường dẫn đến tệp PHP xử lý cập nhật giỏ hàng
      type: "POST",
      data: { voucher: voucherInput },
      success: function(response) {
          if (response) {

            } else {
              alert("Voucher không hợp lệ");
            }
      }
    });
};
function addOrder() {
   
    $.ajax({
      url: "index.php?action=add_order", // Đường dẫn đến tệp PHP xử lý cập nhật giỏ hàng
      type: "POST",
    
      success: function(response) {
          if (response) {
            alert( "Đặt hàng thành công !") 
            window.location.href = "index.php?action=user_homepage" ;
            } else {
              alert("Đặt hàng không thành công");
            }
      }
    });
};