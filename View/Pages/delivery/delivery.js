// script.js

const minRangeValueGap = 0;
const range = document.getElementById("range_track");
const minval = document.querySelector(".minvalue");
const maxval = document.querySelector(".maxvalue");
const rangeInput = document.querySelectorAll("input");

let minRange = parseInt(rangeInput[0].value);
let maxRange = parseInt(rangeInput[1].value);

const setMinValueOutput = () => {
    minval.innerHTML = minRange.toLocaleString("vi-VN") + "đ";
};

const setMaxValueOutput = () => {
    maxval.innerHTML = maxRange.toLocaleString("vi-VN") + "đ";
};

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        minRange = parseInt(rangeInput[0].value);
        maxRange = parseInt(rangeInput[1].value);

        if (maxRange - minRange < minRangeValueGap) {
            if (e.target.className === "min") {
                rangeInput[0].value = maxRange - minRangeValueGap;
                minRange = maxRange - minRangeValueGap;
            } else {
                rangeInput[1].value = minRange + minRangeValueGap;
                maxRange = minRange + minRangeValueGap;
            }
        }
        setMaxValueOutput();
    });
});


// Initialize the min and max value outputs

setMaxValueOutput(); 

$(document).ready(function() {
    $(".thumb-product").mouseenter(function() {
      $(this).find(".lazy").css("opacity", 0); 
      $(this).find(".hover-img").css("opacity", 1).css("visibility", "visible"); 
    }).mouseleave(function() {
      $(this).find(".lazy").css("opacity", 1); 
      $(this).find(".hover-img").css("opacity", 0).css("visibility", "hidden"); 
    });
  });
//


const itemsPerPage = 12; // Số sản phẩm trên mỗi trang
const productList = document.querySelector('.list-products-cat');
const totalPages = Math.ceil(productList.children.length / itemsPerPage);
let currentPage = 1;

function showPage(page) {
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;

    // Ẩn tất cả sản phẩm
    for (let i = 0; i < productList.children.length; i++) {
        productList.children[i].style.display = 'none';
    }

    // Hiển thị các sản phẩm trong phạm vi của trang hiện tại
    for (let i = startIndex; i < endIndex && i < productList.children.length; i++) {
        productList.children[i].style.display = 'block';
    }
}

function updatePagination() {
    const prevPageLink = document.getElementById('prev-page');
    const nextPageLink = document.getElementById('next-page');
    const pageLinksContainer = document.getElementById('page-links');
    pageLinksContainer.innerHTML = ''; // Xóa các liên kết trang hiện tại

    if (currentPage === 1) {
        prevPageLink.style.display = 'none';
    } else {
        prevPageLink.style.display = 'inline-block';
    }

    if (currentPage === totalPages) {
        nextPageLink.style.display = 'none';
    } else {
        nextPageLink.style.display = 'inline-block';
    }

    // Tạo các liên kết trang
    for (let i = 1; i <= totalPages; i++) {
        const pageLink = document.createElement('a');
        pageLink.href = '#';
        pageLink.className = 'page-link';
        pageLink.textContent = i;
        pageLink.addEventListener('click', () => goToPage(i));
        pageLinksContainer.appendChild(pageLink);
    }
}

function goToPage(page) {
    currentPage = page;
    showPage(currentPage);
    updatePagination();
}

const prevPageLink = document.getElementById('prev-page');
prevPageLink.addEventListener('click', (event) => {
    event.preventDefault();
    if (currentPage > 1) {
        goToPage(currentPage - 1);
    }
});

const nextPageLink = document.getElementById('next-page');
nextPageLink.addEventListener('click', (event) => {
    event.preventDefault();
    if (currentPage < totalPages) {
        goToPage(currentPage + 1);
    }
});

// Hiển thị trang đầu tiên khi tải trang
showPage(currentPage);
updatePagination();