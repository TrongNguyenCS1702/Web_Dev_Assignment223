<?php

$type         = isset($_GET['type']) ? $_GET['type'] : '';
$category     = isset($_GET['category']) ? $_GET['category'] : '';
$figure       = isset($_GET['figure']) ? $_GET['figure'] : '';
$search       = isset($_GET['search']) ? $_GET['search'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="views/Pages/PHP/user/delivery/delivery.css">
  <link rel="stylesheet" href="views/Component/header/header.css">
  <?php include 'views/Component/header/header.php'; ?>

  <title><?php echo ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $type :
          ($type != '' && $category != '' && $figure == '' ? $category . " " . $type :
            (($type != '' && $category != '' && $figure != '') ? $figure . " " . $type : ""))) : $search; ?></title>
</head>

<body>
  <div class="container">
    <div class="product" style="padding-top: 80px;">
      <div class="container mt-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="text-decoration:none">
            <li class="breadcrumb-item"><a href="index.php?action=user_homepage" style="text-decoration:none">Trang chủ</a></li>
            <?php if ($search == '') { ?>
            <?php echo  ($type != '' && $category=='' && $figure == '' ) ? '<li class="breadcrumb-item active" aria-current="page">'.$type.'</li>' : '<li class="breadcrumb-item"><a href="index.php?action=products&type='.$type.'" style="text-decoration:none">'.$type.'</a></li>' ?>
            <?php echo ($category != '' && $figure =='') ? '<li class="breadcrumb-item active" aria-current="page">'.$category.'</li>' : '<li class="breadcrumb-item"><a href="index.php?action=products&type='.$type.'&category='.$category.'" style="text-decoration:none">'.$category.'</a></li>'  ?>
            <?php if ($figure != '') echo '<li class="breadcrumb-item active" aria-current="page">'.$figure.'</li>' ;} ?>
            <?php if ($search!=''){echo '<li class="breadcrumb-item active" aria-current="page">'.$search.'</li>' ; }?>
          </ol>
        </nav>
      </div>
    </div>
    <div class="box-products d-flex">
      <div class="side-prod">
        <div class="sidebar-prod sidebar-prod-pc">
          <div class="filter-by-side">
            <div class="container mt-5">
              <div class="row">
                <div class="col-md-12">
                  <!-- Price Range Slider -->
                  <label for="priceSlider">Mức giá:</label>
                  <input onchange="change()" value="0" type="range" class="custom-range" id="priceSlider" min="0"
                    max="5000000" step="500000">
                  <div id="price">Lớn hơn: 0</div>
                </div>
                <div class="col-md-12">
                  <!-- Apply Button -->
                  <div style="display:flex; justify-content:space-between">
                    <button class="btn btn-primary col-md-5" id="applyFilter">Lọc</button>
                    <button class="btn btn-primary col-md-5" id="unApplyFilter" style="display:none">Bỏ lọc</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-prod" id="product-list">

        <?php


        $products = ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $userController->getProductByType($type, 0) :
          ($type != '' && $category != '' && $figure == '' ? $userController->getProductByTypeCategory($type, $category, 0) :
            (($type != '' && $category != '' && $figure != '') ? $userController->getProductByTypeFigure($type, $figure, 0) : ""))) :
            $userController->getProductByName($search, 0);
        echo '<div class="top-main-prod">';
        echo '<h1 class="sub-title-main">';
        echo ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $type :
          ($type != '' && $category != '' && $figure == '' ? $category . " " . $type :
            (($type != '' && $category != '' && $figure != '') ? $figure . " " . $type : ""))) :
           "Tìm kiếm: ".$search ;
        echo '</h1>';
        echo '</div>';
        echo '<div class="sub-main-prod">';
        echo '<div class="list-products list-products-cat d-flex">';

        if ($products != '') {
          foreach ($products as $product) {

            echo '<div class="item-cat-product">
                      <div class="product">
                          <div class="thumb-product">
                            <a href="index.php?action=product&id=' . $product['id'] . '" id="product-links">
                              <img src="' . $product["image_url"] . '" alt="' . $product["name"] . '" class="lazy">
                              <img src="' . $product["image_url"] . '" alt="' . $product["name"] . '" class="hover-img lazy">
                            </a>
                          </div>
                          <div class="info-product">
                            <h3 class="title-product">
                                <a style="text-decoration: none;" href="index.php?action=product&id=' . $product['id'] . '">' . $product["name"] . '</a>
                            </h3>
                            <div class="price-product">
                              <ins>
                                  <span>' . number_format($product["price"], 0, '.', ',') . '<sup>đ</sup></span>
                              </ins>
                              
                            </div>
                          </div>
                        <div class="add-to-cart">
                            <a href="index.php?action=product&id=' . $product['id'] . '"><i class="fas fa-shopping-bag" style="color: white"></i></a>
                        </div>
                      </div>
                    </div> ';
          }
        }

        ?>
    </div>
  </div>
  <div class="pagination">
  <a href="#" class="page-link" id="prev-page" style="color: #221f20;">Trang trước</a>
  <a href="#" class="page-link" id="next-page"style="color: #221f20;">Trang kế tiếp</a>
</div>

  </div>
  </div>
  <footer style="margin-top: 40px">
    <div class="main-footer d-flex">
    <div class="left-footer">
				<div class="top-left">
					<div class="logo-footer">
						<a href="#">
							<img src="https://pubcdn.ivymoda.com/ivy2/images/logo-footer.png" alt="logo-footer">
						</a>
					</div>
					<a href="#" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
						<img src="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=0cfdeac4-6e7f-4fca-941f-57a0a0962777" alt="DMCA.com Protection Status">
					</a>
					<div class="logo-conthuong">
						<a target="_blank" href="#">
							<img src="https://pubcdn.ivymoda.com/ivy2/images/img-congthuong.png" alt="img-congthuong">
						</a>
					</div>
				</div>
				<div class="content-left-ft content-ft">
					<div class="info-left-ft">
						<p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650</p>						<p><strong>Địa chỉ đăng ký: </strong>Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam</p>						<p><strong>Số điện thoại: </strong>0243 205 2222/ 090 589 8683</p>						<p><strong>Email: </strong> cskh@ivy.com.vn</p>					</div>
					<ul class="list-social">
						<li>
							<a href="#" target="_blank">
								<img src="https://pubcdn.ivymoda.com/ivy2/images/ic_fb.svg" alt="ic_fb">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="https://pubcdn.ivymoda.com/ivy2/images/ic_gg.svg" alt="ic_gg">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="https://pubcdn.ivymoda.com/ivy2/images/ic_instagram.svg" alt="ic_instagram" style="height: 30px;">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="https://pubcdn.ivymoda.com/ivy2/images/ic_pinterest.svg" alt="ic_pinterest" style="height: 27px">
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<img src="https://pubcdn.ivymoda.com/ivy2/images/ic_ytb.svg" alt="ic_ytb">
							</a>
						</li>
					</ul>
					<div class="hotline">
						<a href="tel:02466623434">Hotline: 0246 662 3434</a>
					</div>
				</div>
			</div>
      <div class="center-footer d-flex">
        <div class="left-center-ft item-center-ft">
          <p class="title-footer">Giới thiệu</p>
					<ul>
            <li>
              <a href="#">Về IVY moda</a>
						</li>
						<li>
              <a target="_blank" href="#">Tuyển dụng</a>
						</li>
						<li>
              <a href="#">Hệ thống cửa hàng</a>
						</li>
					</ul>
				</div>
				<div class="main-center-ft item-center-ft">
          <p class="title-footer">Dịch vụ khách hàng</p>
					<ul>
						<li>
							<a href="#">Chính sách điều khoản</a>
						</li>
						<li>
              <a href="#">Hướng dẫn mua hàng</a>
						</li>
						<li>
              <a href="#">Chính sách thanh toán</a>
						</li>
						<li>
              <a href="#">Chính sách đổi trả</a>
						</li>
						<li>
              <a href="#">Chính sách bảo hành</a>
						</li>
						<li>
              <a href="#">Chính sách giao nhận vận chuyển</a>
						</li>
						<li>
              <a href="#">Chính sách thẻ thành viên</a>
						</li>
						<li>
              <a href="#">Hệ thống cửa hàng</a>
						</li>
						<li>
              <a href="#">Q&amp;A</a>
						</li>
					</ul>
				</div>
				<div class="right-center-ft item-center-ft">
          <p class="title-footer">Liên hệ</p>
					<ul>
            <li>
              <a href="#">Hotline</a>
						</li>
						<li>
              <a href="#">Email</a>
						</li>
						<li>
              <a href="#">Live Chat</a>
						</li>
						<li>
              <a href="#" target="_blank">Messenger</a>
						</li>
						<li>
              <a href="#">Liên hệ</a>
						</li>
					</ul>
				</div>
			</div>
      <div class="right-footer">
        <div class="register-form">
          <p class="title-footer">Nhận thông tin các chương trình của IVY moda</p>
					<form id="frm_subscribe">
            <input id="email_subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required" style="border: 0;
    border-bottom: 1px solid #BCBDC0;">
						<div class="btn-submit">
							<input id="btn-submit" class="form-submit" value="Đăng ký" type="submit">
						</div>
					</form>
				</div>
				<div class="info-right-ft">
          <p class="title-footer">Download App</p>
					<ul>
            <li>
              <a id="app_ios" href="#" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" class="img-fluid" alt=""> </a>
						</li>
						<li>
              				<a id="app_android" href="#" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" class="img-fluid" alt=""> </a>
						</li>
					</ul>
				</div>
			</div>
    </div>
    </footer>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const type = <?php echo '"' . $type . '"'; ?>;
    const category = <?php echo '"' . $category . '"'; ?>;
    const figure = <?php echo '"' . $figure . '"'; ?>;
    const search = <?php echo '"' . $search . '"'; ?>;
  </script>
  <script src="views/Pages/PHP/user/delivery/delivery.js">

  </script>
</body>

</html>