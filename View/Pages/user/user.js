
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy tham chiếu đến nút "Đổi mật khẩu"
        var changePasswordButton = document.querySelector('[data-fancybox][data-src="#fancybox-popup"]');

        // Lấy tham chiếu đến popup
        var popup = document.querySelector('#fancybox-popup');

        // Khi nút "Đổi mật khẩu" được nhấn
        changePasswordButton.addEventListener("click", function (event) {
            event.preventDefault();
            popup.style.display = "block"; // Hiển thị popup
        });
    });
