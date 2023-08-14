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
