const header = document.getElementById("header");
window.addEventListener("scroll", () => {
  const scrollPosition = window.scrollY;
  const maxOpacity = 0.4;
  const opacity = Math.min(1, 1 - (scrollPosition / 300) * maxOpacity);
  header.style.opacity = opacity.toFixed(100);
});
header.addEventListener("mouseenter", () => {
header.style.opacity = "1"; // Hiển thị header khi có chuột trỏ
});

// Khi chuột trỏ ra khỏi header
header.addEventListener("mouseleave", () => {
// Giữ độ mờ tùy theo vị trí cuộn chuột
const scrollPosition = window.scrollY;
const maxOpacity = 0.4;
const opacity = Math.min(1, 1 - (scrollPosition / 300) * maxOpacity);
header.style.opacity = opacity.toFixed(2);
});

document.addEventListener("DOMContentLoaded", function () {
  // Lắng nghe sự kiện DOMContentLoaded để đảm bảo mã JavaScript chỉ thực thi sau khi tất cả nội dung đã được tải.

  const menuItems = document.querySelectorAll(".menu > li"); // Lấy tất cả các phần tử li trong menu.

  menuItems.forEach((item) => {
    const subMenu = item.querySelector(".sub-menu"); // Tìm sub-menu liên quan đến mỗi phần tử li.

    item.addEventListener("click", () => {
      if (subMenu) {
        subMenu.classList.toggle("active"); // Toggle lớp 'active' để hiển thị hoặc ẩn sub-menu.
      }
    });
  });
});

