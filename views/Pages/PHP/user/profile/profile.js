document.addEventListener("DOMContentLoaded", function () {
    // Lấy tham chiếu đến nút "Đổi mật khẩu"
    var changePasswordButton = document.querySelector('[data-fancybox][data-src="#fancybox-popup"]');

    // Lấy tham chiếu đến popup
    var popup = document.querySelector('#fancybox-popup');
    var overlay = document.querySelector('#overlay');

    // Khi nút "Đổi mật khẩu" được nhấn
    changePasswordButton.addEventListener("click", function (event) {
        event.preventDefault();
        popup.style.display = "block"; // Hiển thị popup
        overlay.style.display = "block"; 
    });
    document.addEventListener("click", function (event) {
        if (!popup.contains(event.target) && event.target !== changePasswordButton) {
            popup.style.display = "none"; // Đóng popup
            overlay.style.display = "none";
        }
    });

    var update = document.getElementById('#update');
    update.addEventListener("click", function () {
        var email = document.getElementById('#customer_email');
        var addres = document.getElementById('#customer_address');
        $.ajax({
            url: "views/Pages/PHP/user/profile/update_info.php", 
            type: "POST",
            data: { email: email,addres:addres },
            success: function(response) {
                alert('Cập nhật thông tin thành công')
            }
          });
    });
});