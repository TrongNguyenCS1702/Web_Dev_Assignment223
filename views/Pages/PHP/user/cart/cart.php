<?php
if (!(isset($_SESSION['role']) && $_SESSION['role']=="user" )){
    $_SESSION['old_url'] = $_SERVER['REQUEST_URI'];
}
    

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="views/Pages/PHP/user/cart/cart.css">
        <title>Giỏ hàng</title>
        <?php include 'views/Component/header/header.php';?>
    </head>
    <style>.voucher-input-container {
  display: flex;
  align-items: center;
}

#voucher-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 130px;
  margin-right: 10px;
}

.custom-button {
  background-color: #212529;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  width: 50px;
  display: flex;
  justify-content: center;
}
</style>
<body>

<main id="main" class="site-main">
    <div class="container">
        <form name="frm_cart" id="frm_cart" method="post" action="" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="is_cart_page" value="1">
            <div class="cart pt-40 cart-page">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="box_product_total_cart">
                            <div class="cart__list">
                                <h2 class="cart-title">Giỏ hàng của bạn <b><span class="cart-total"><?php  echo count(isset($_SESSION['cart']) ? $_SESSION['cart'] : []);?></span> Sản Phẩm</b></h2>
                                <table class="cart__table">
                                    <thead>
                                        <tr>
                                            <th>Tên Sản phẩm</th>
                                            <!-- <th>Chiết khấu</th> -->
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if (isset($_SESSION['cart'])) {
                                            $cart = $_SESSION['cart'];
                                            foreach ($cart as $item){
                                        echo '<tr>
                                            <td>
                                                <div class="cart__product-item">
                                                    <div class="cart__product-item__img">
                                                        <a href="index.php?action=product&id='.$item['product_id'].'"><img src='.$item['image'].' alt="'.$item['name'].'"></a>
                                                    </div>
                                                    <div class="cart__product-item__content">
                                                        <a href="index.php?action=product&id='.$item['product_id'].'" style="text-decoration:none">
                                                            <h3 class="cart__product-item__title">
                                                            '.$item['name'].'
                                                            </h3>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- <td class="cart-sale-price">
                                                <p>-255.000đ</p>
                                            </td> -->
                                            <td>
                                                <div class="product-detail__quantity-input" data-product-sub-id="185422">
                                                    <input  type="text" value="'.$item['quantity'].'" min="1" data-product-index="0" readonly>
                                                    <button onclick="updateCart('.$item['product_id'].',';
                                                    echo "'add',".$item['price'].")"; 
                                                    echo  '" class="product-detail__quantity--increase">
                                                        +
                                                    </button>
                                                    <button onclick="updateCart('.$item['product_id'].','; 
                                                    echo "'sub',".$item['price'].")"; 
                                                    echo '" class="product-detail__quantity--decrease">
                                                        -
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart__product-item__price">'.number_format($item['price']*$item['quantity'], 0, '.', ',').'đ</div>
                                            </td>
                                        </tr>';
                                    }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="index.php?action=products&type=All" class="btn btn--large btn--outline btn-cart-continue mb-3">
                            <span class="icon-ic_left-arrow"></span>
                            Tiếp tục mua hàng
                        </a>
                    </div>
                    <div class="col-lg-4 cart-page__col-summary">
                        <div class="cart-summary" id="cart-page-summary">
                            <div class="cart-summary__overview">
                                <h3>Tổng tiền giỏ hàng</h3>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng sản phẩm</p>
                                    <p class="total-product"><?php echo isset($_SESSION['sum_qty']) ? $_SESSION['sum_qty'] : 0 ; ?></p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng tiền hàng</p>
                                    <p class="total-not-discount"><?php echo isset($_SESSION['sum_price']) ? number_format($_SESSION['sum_price'], 0, '.', ',') : 0 ; ?>đ</p>
                                </div>
                                
                                <div class="cart-summary__overview__item">
                                    <p>Tạm tính</p>
                                    <p><b class="order-price-total"><?php echo isset($_SESSION['sum_price']) ? number_format($_SESSION['sum_price'], 0, '.', ',') : 0 ;?>đ</b></p>
                                </div>
                                
                                <div class="cart-summary__overview__item">
                                    <p>Thành tiền</p>
                                    <p><b class="order-price-total"><?php echo  isset($_SESSION['sum_price']) ? number_format($_SESSION['sum_price'], 0, '.', ',') : 0 ; ?>đ</b></p>
                                </div>
                                
                                
                            </div>
                            <div class="cart-summary__note">
                                <div class="inner-note d-flex">
                                    <div class="left-inner-note">
                                        <span class="icon-ic_alert"></span>
                                    </div>
                                    
                                    <div class="left-inner-note left-inner-note-shipping d-none">
                                        <span class="icon-ic_alert"></span>
                                    </div>
                                    <div class="content-inner-note content-inner-note-shipping d-none">
                                        <p>Miễn phí ship đơn hàng có tổng gía trị trên 2.000.000đ</p>
                                        <div class="sub-note">
                                            Mua thêm <strong>1.405.000đ</strong> để được miễn phí SHIP
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-summary__button">
                            <a href= <?php echo isset($_SESSION['sum_qty']) || isset($_SESSION['role']) && $_SESSION['role']=="user" ? "index.php?action=pay"  : "#" ?> class="btn btn--large" id="purchase-step-1" style="padding: 12px 24px;border-radius: 16px 0px;font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Đặt hàng</a>
                        </div>
                        <div class="cart-summary__vouchers">
                        <!--            -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
    <!-- Footer-->
  <script src="views/Pages/PHP/user/cart/cart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>