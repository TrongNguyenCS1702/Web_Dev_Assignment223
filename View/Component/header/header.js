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
//
// Lấy tham chiếu đến phần tử mobile-menu và sub-mobile-menu
const mobileMenu = document.querySelector('.mobile-menu');
const subMobileMenu = document.querySelector('.sub-mobile-menu');

// Thêm sự kiện click cho phần tử mobile-menu
mobileMenu.addEventListener('click', () => {
    // Khi nhấp vào, chuyển đổi lớp active của mobile-menu
    mobileMenu.classList.toggle('active');
    
    // Khi lớp active tồn tại, thêm lớp active cho sub-mobile-menu
    if (mobileMenu.classList.contains('active')) {
        subMobileMenu.classList.add('active');
    } else {
        subMobileMenu.classList.remove('active');
    }
});
//
// Lấy danh sách các phần tử có lớp "has-child"
const hasChildItems = document.querySelectorAll('.has-child');

// Đặt sự kiện click cho mỗi phần tử có lớp "has-child"
hasChildItems.forEach(item => {
  item.addEventListener('click', () => {
    // Lấy phần tử con của "has-child" có lớp "sub-menu-mb"
    const subMenu = item.querySelector('.sub-menu-mb');
    
    // Đảo ngược trạng thái hiển thị của menu con
    subMenu.classList.toggle('active');
    
    // Lấy phần tử con có lớp "arrow"
    const arrow = item.querySelector('.arrow');
    
    // Đảo ngược trạng thái hiển thị của dấu cộng và dấu trừ
    arrow.classList.toggle('active');
  });
});
// Lấy danh sách các phần tử có lớp "has-sub-child"
const hasSubChildItems = document.querySelectorAll('.has-sub-child');

// Đặt sự kiện click cho mỗi phần tử có lớp "has-sub-child"
hasSubChildItems.forEach(item => {
  item.addEventListener('click', () => {
    // Lấy phần tử con của "has-sub-child" có lớp "child-sub"
    const childSubMenu = item.querySelector('.child-sub');
    
    // Đảo ngược trạng thái hiển thị của menu con
    childSubMenu.classList.toggle('active');
    
    // Lấy phần tử con có lớp "arrows"
    const arrows = item.querySelector('.arrows');
    
    // Đảo ngược trạng thái hiển thị của dấu cộng và dấu trừ
    arrows.classList.toggle('active');
  });
});
