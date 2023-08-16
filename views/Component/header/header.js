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

  var inputElement = document.querySelector(".input");
  const iconSearch = document.querySelector(".submit"); // Lấy tất cả các phần tử li trong menu.


// Đăng ký sự kiện khi người dùng nhấn phím trong ô input
inputElement.addEventListener("keydown", function(event) {
  // Kiểm tra xem phím được nhấn có phải là phím Enter không
  if (event.key === "Enter") {
    window.location.href = "index.php?action=products&search="+inputElement.value
  }
  
});
iconSearch.addEventListener("click", function() {
  window.location.href = "index.php?action=products&search="+inputElement.value
});
  // Lấy tham chiếu đến nút hiển thị popup


// Hàm hiển thị popup thông báo thành công

});

function showSuccessPopup(message,url) {
  var showPopupButton = document.getElementById("showSuccessPopup");
  var popup = document.createElement("div");
  popup.className = "success-popup";
  
  var popupContent = document.createElement("div");
  popupContent.className = "popup-content";
  
  var popupTitle = document.createElement("div");
  popupTitle.innerHTML = '<i class="fa-regular fa-circle-check fa-2xl" style="color: #0fe628;"></i>';
  
  var popupMessage = document.createElement("p");
  popupMessage.style.marginTop = '16px'
  popupMessage.textContent = message;
  
  var closeButton = document.createElement("button");
  closeButton.textContent = "Ok";
  closeButton.addEventListener("click", function() {
    showPopupButton.removeChild(popup);
    window.location.href = url
    showPopupButton.style.display = "none"
});
document.addEventListener("click", function (event) {
  if (!popup.contains(event.target) ) {
      showPopupButton.removeChild(popup);
      window.location.href = url
      showPopupButton.style.display = "none"
  }
});
  
  popupContent.appendChild(popupTitle);
  popupContent.appendChild(popupMessage);
  popupContent.appendChild(closeButton);
  
  popup.appendChild(popupContent);
 
  showPopupButton.appendChild(popup)
  showPopupButton.style.display = "block"
}
function showPopup(message) {
  var showPopupButton = document.getElementById("showSuccessPopup");
  var popup = document.createElement("div");
  popup.className = "success-popup";
  
  var popupTitle = document.createElement("div");
  popupTitle.innerHTML = '<i class="fa-regular fa-circle-xmark fa-2xl" style="color: #ff0000;"></i>';
  var popupContent = document.createElement("div");
  popupContent.className = "popup-content";
 
  var popupMessage = document.createElement("p");
  popupMessage.style.marginTop = '16px'
  popupMessage.textContent = message;
  
  var closeButton = document.createElement("button");
  closeButton.textContent = "Ok";
  
  closeButton.addEventListener("click", function() {
      showPopupButton.removeChild(popup);
      showPopupButton.style.display = "none"
  });
  document.addEventListener("click", function (event) {
      if (!popup.contains(event.target) ) {
          showPopupButton.removeChild(popup);
          showPopupButton.style.display = "none"
      }
  });
  popupContent.appendChild(popupTitle);
  popupContent.appendChild(popupMessage);
  popupContent.appendChild(closeButton);
  
  popup.appendChild(popupContent);
 
  showPopupButton.appendChild(popup)
  showPopupButton.style.display = "block"
}
function showNotifyPopup(message,url) {
  var showPopupButton = document.getElementById("showSuccessPopup");
  var popup = document.createElement("div");
  popup.className = "success-popup";
  var popupContent = document.createElement("div");
  popupContent.className = "popup-content";
 
  var popupMessage = document.createElement("p");
  popupMessage.textContent = message;
  
  var closeButton = document.createElement("button");
  closeButton.textContent = "Ok";
  
  closeButton.addEventListener("click", function() {
      showPopupButton.removeChild(popup);
      window.location.href = url
      showPopupButton.style.display = "none"
  });
  document.addEventListener("click", function (event) {
    if (!popup.contains(event.target) ) {
        showPopupButton.removeChild(popup);
        window.location.href = url
        showPopupButton.style.display = "none"
    }
  });
  

  popupContent.appendChild(popupMessage);
  popupContent.appendChild(closeButton);
  
  popup.appendChild(popupContent);
 
  showPopupButton.appendChild(popup)
  showPopupButton.style.display = "block"
}

function showNotifyNoURLPopup(message) {
  var showPopupButton = document.getElementById("showSuccessPopup");
  var popup = document.createElement("div");
  popup.className = "success-popup";
  var popupContent = document.createElement("div");
  popupContent.className = "popup-content";
 
  var popupMessage = document.createElement("p");
  popupMessage.textContent = message;
  
  var closeButton = document.createElement("button");
  closeButton.textContent = "Ok";
  
  closeButton.addEventListener("click", function() {
      showPopupButton.removeChild(popup);
      showPopupButton.style.display = "none"
  });
  document.addEventListener("click", function (event) {
    if (!popup.contains(event.target) ) {
        showPopupButton.removeChild(popup);
        showPopupButton.style.display = "none"
    }
  });
  

  popupContent.appendChild(popupMessage);
  popupContent.appendChild(closeButton);
  
  popup.appendChild(popupContent);
 
  showPopupButton.appendChild(popup)
  showPopupButton.style.display = "block"
}