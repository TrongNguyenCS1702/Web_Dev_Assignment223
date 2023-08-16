

<!DOCTYPE html>
<html>

<head>
  <title>Thanh toán</title>
  <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="views/Pages/PHP/user/payment/pay.css">
</head>

<body>
<div id="showSuccessPopup"></div> 
  <?php include 'views/Component/header/header.php'; ?>
  <?php
if (!(isset($_SESSION['role']))) {
  $_SESSION['old_url'] = $_SERVER['REQUEST_URI'];
  echo '<script>';
  echo 'showNotifyPopup("Bạn cần phải đăng nhập","index.php?action=user_login")';
  echo '</script>';
}
?>
  <main id="main" class="site-main">
    <div class="container">
      <div class="cart pt-40 checkout">
        <form action="" method="post" enctype="application/x-www-form-urlencoded">
          <div class="row">
            <div class="col-md-8 col-2xl-9">
              <div class="checkout-payment">
                <h3 class="checkout-title">Phương thức thanh toán</h3>
                <div class="block-border">
                  <p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
                  <div class="checkout-payment__options">
                    <label class="ds__item">
                      <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_1" value="1">
                      <span class="ds__item__label">
                        Thanh toán bằng thẻ tín dụng
                      </span>
                      <span style="margin-left: 3px">
                        <img src="https://pubcdn.ivymoda.com/ivy2/images/1.png" class="">
                      </span>
                    </label>
                    <label class="ds__item">
                      <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_2" value="2">
                      <span class="ds__item__label">
                        Thanh toán bằng thẻ ATM
                        <span>Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt Nam.</span>
                      </span>
                    </label>
                    <label class="ds__item">
                      <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_5" value="5">
                      <span class="ds__item__label">
                        Thanh toán bằng Momo
                      </span>
                    </label>
                    <label class="ds__item">
                      <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_3" value="3"
                        checked="">
                      <span class="ds__item__label">
                        Thanh toán khi giao hàng
                      </span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-2xl-3 ">
              <div class="cart-summary">
                <div id="box_product_total">
                  <div class="cart-summary__overview">
                    <h3>Tóm tắt đơn hàng</h3>
                    <?php
                    if (isset($_SESSION['cart'])) { ?>
                      <div class="cart-summary__overview__item">
                        <p>Tổng tiền hàng</p>
                        <p>
                          <?php echo number_format($_SESSION['sum_price'], 0, '.', ','); ?>đ
                        </p>
                      </div>
                      <div class="cart-summary__overview__item">
                        <p>Tạm tính</p>
                        <p>
                          <?php echo number_format($_SESSION['sum_price'], 0, '.', ','); ?>đ
                        </p>
                      </div>
                      <?php
                      if (isset($_SESSION['voucher']))
                        echo '<div class="cart-summary__overview__item">
                          <p>Giảm giá (' . $_SESSION['voucher']['discount'] . '%)</p>
                          <p>-' . number_format($_SESSION['sum_price'] * $_SESSION['voucher']['discount'] / 100, 0, '.', ',') . 'đ</p>
                        </div>';
                    } ?>

                    <div class="cart-summary__overview__item">
                      <p>Phí vận chuyển</p>
                      <p>
                        <?php echo number_format(20000, 0, '.', ','); ?>đ
                      </p>
                    </div>
                    <div class="cart-summary__overview__item">
                      <p>Tiền thanh toán</p>
                      <p><b>
                          <?php echo isset($_SESSION['sum_price']) ? (isset($_SESSION['voucher']) ? number_format($_SESSION['sum_price'] - $_SESSION['sum_price'] * $_SESSION['voucher']['discount'] / 100 + 20000, 0, '.', ',') : number_format($_SESSION['sum_price'] + 20000, 0, '.', ',')) : number_format(20000, 0, '.', ',') ?>đ
                        </b></p>
                    </div>
                  </div>
                </div>
                <div class="cart-summary__voucher-form">
                  <div class="cart-summary__voucher-form__title">
                    <h4 class="active">Mã phiếu giảm giá</h4>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Mã giảm giá" name="coupon_code_text"
                      id="coupon_code_text"
                      value="<?php echo isset($_SESSION['voucher']) ? $_SESSION['voucher']['code'] : "" ?>">
                    <button onclick="addVoucher()" class="btn btn--large btn--outline" id="but_coupon_code"
                      style="background-color: white;border: 1px solid #221f20;color: #221f20;">Áp dụng</button>
                  </div>
                </div>
              </div>
              <div class="cart-summary__button">

                <button onclick="addOrder()" id="but-checkout-continue-step2" name="btn_continue_step2"
                  class="btn btn--large"
                  style="padding: 12px 24px;border-radius: 16px 0px;font-size: 16px; line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">THANH
                  TOÁN </button>

              </div>
            </div>
          </div>
        </form>
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
  </main>
  <script src="views/Pages/PHP/user/payment/pay.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>