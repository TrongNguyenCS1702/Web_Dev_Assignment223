const images = document.querySelectorAll('.aspect-ratio-169 img');
const dots = document.querySelectorAll('.dots-container .dot');
let currentIndex = 0;

function showImage(index) {
  images.forEach(img => img.style.display = 'none');
  dots.forEach(dot => dot.classList.remove('active'));
  currentIndex = index;
  images[currentIndex].style.display = 'block';
  dots[currentIndex].classList.add('active');
}

function showNextImage() {
  images[currentIndex].style.display = 'none';
  dots[currentIndex].classList.remove('active');
  currentIndex = (currentIndex + 1) % images.length;
  images[currentIndex].style.display = 'block';
  dots[currentIndex].classList.add('active');
}

function startSlideShow() {
  showImage(currentIndex);
  setInterval(showNextImage, 5000);
}

// Hiển thị hình ảnh và dot liên kết đầu tiên khi trang được tải
startSlideShow();