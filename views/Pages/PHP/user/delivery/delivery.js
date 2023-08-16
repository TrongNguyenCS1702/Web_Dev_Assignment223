$(document).ready(function () {
  $(".thumb-product")
    .mouseenter(function () {
      $(this).find(".lazy").css("opacity", 0);
      $(this).find(".hover-img").css("opacity", 1).css("visibility", "visible");
    })
    .mouseleave(function () {
      $(this).find(".lazy").css("opacity", 1);
      $(this).find(".hover-img").css("opacity", 0).css("visibility", "hidden");
    });
});
//
$(document).ready(function () {
  $("#applyFilter").click(function () {
    var selectedRange = $("#priceRange").val();
    var selectedSliderValue = $("#priceSlider").val();

    // Here you can implement your logic to filter data based on the selected range or slider value.
    // For example, you can make an AJAX request to fetch filtered data from the server.
    // Then update your UI accordingly.

    console.log("Selected Range:", selectedRange);
    console.log("Selected Slider Value:", selectedSliderValue);
  });
});

function change() {
  const price = document.getElementById("price");
  const inputValue = document.getElementById("priceSlider").value;
  const priceF = parseInt(inputValue, 10).toLocaleString("en-US");
  price.innerHTML = "Lớn hơn: " + priceF;
}
document.addEventListener("DOMContentLoaded", function () {
  var applyFilter = document.querySelector("#applyFilter");
  var unApplyFilter = document.querySelector("#unApplyFilter");
  applyFilter.addEventListener("click", function () {
    var priceSlider = document.getElementById("priceSlider").value;
    var product_list = document.getElementById("product-list");
    var priceSlider = document.getElementById("priceSlider").value;
   
    $.ajax({
      url: "index.php?action=filter",
      type: "POST",
      data: {
        type: type,
        category: category,
        figure: figure,
        search:search,
        priceSlider: priceSlider,
      },
      success: function (response) {
        product_list.innerHTML = response;
        unApplyFilter.style.display = "block";
      },
    });
  });
  unApplyFilter.addEventListener("click", function () {
    var product_list = document.getElementById("product-list");
    var priceSlider = document.getElementById("priceSlider");
    priceSlider.value = 0;
    unApplyFilter.style.display = "none";
    $.ajax({
      url: "index.php?action=filter",
      type: "POST",
      data: { type: type, category: category, figure: figure,search:search, priceSlider: 0 },
      success: function (response) {
        product_list.innerHTML = response;
      },
    });
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