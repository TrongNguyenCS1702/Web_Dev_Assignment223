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

    var update = document.querySelector('#update');
    update.addEventListener("click", function () {
        var email = document.getElementById('customer_email').value;
        var address = document.getElementById('customer_address').value;
        $.ajax({
            url: "index.php?action=update_info", 
            type: "POST",
            data: { email: email,address:address },
            success: function(response) {
                alert(response)
            }
          });
    });
    var changePass = document.querySelector('#change_pass');
    changePass.addEventListener("click", function () {
        var oldpassword = document.getElementById('customer_pass_old').value;
        var newpassword1 = document.getElementById('customer_pass_new1').value;
        var newpassword2 = document.getElementById('customer_pass_new2').value;
        if(newpassword1 !== newpassword2){
            alert("Nhập lại mật khẩu không chính xác");
        }else{
            $.ajax({
                url: "index.php?action=change_password", 
                type: "POST",
                data: { old_password: oldpassword,new_password:newpassword1 },
                success: function(response) {
                    alert(response)
                    location.reload();
                }
            });
        }
    });
});