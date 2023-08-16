

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
    </div>
  </main>
  <?php require('views/Component/footer/footer.php'); ?>
  <script src="views/Pages/PHP/user/payment/pay.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>