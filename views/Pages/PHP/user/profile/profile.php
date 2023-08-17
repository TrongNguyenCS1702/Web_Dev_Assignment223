<?php 
if (!(isset($_SESSION['role']) && $_SESSION['role'] == "user")) {
    $_SESSION['old_url'] = $_SERVER['REQUEST_URI'];
    echo '<script>';
    echo 'alert("Bạn cần phải đăng nhập trước");';
    echo 'window.location.href = "index.php?action=user_login";';
    echo '</script>';
}
$profile = $userController->getProfile($_SESSION['user_id']);
$name = explode(" ", $profile['fullname']);
$lname = implode(" ", array_slice($name, 1));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="views/Pages/PHP/user/profile/profile.css">
        <title>Profile</title>
    </head>
    <body>
        <?php include 'views/Component/header/header.php';?>
        <main id="main" class="site-main">
            <div class="container">
                <div class="order-wrapper mt-40 my-account">
                    <div class="row">
                        <div class="col-3xl-1"></div>
                        <div class="col-lg-8 col-xl">
                            <div class="order-block__title">
                                <h2>TÀI KHOẢN CỦA TÔI</h2>
                            </div>
                            <div class="order-block my-account-wrapper row">
                                <p class="alert alert-primary">"Vì chính sách an toàn thẻ, bạn không thể thay đổi SĐT, Họ tên. Vui lòng liên hệ CSKH 0123456789 để được hỗ trợ"</p>
                                <div class="col-md-6">
                                    <form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Họ</label>
                                            </div>
                                            <div class="col col-input">
                                                <input class="form-control" value="<?php echo $name[0];?>" type="text" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Tên</label>
                                            </div>
                                            <div class="col col-input">
                                                <input class="form-control" value="<?php echo $lname;?>" type="text" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Số điện thoại</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input value="<?php echo $profile['phone']?>" class="form-control" type="text" id="customer_phone" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Email</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input class="form-control" type="text" value="<?php echo $profile['email']?>" id="customer_email" name="customer_email">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Address</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input class="form-control" type="text" value="<?php echo $profile['address']?>" id="customer_address" name="customer_email">
                                            </div>
                                        </div>
                                        <div class="row form-radio-checkbox form-group">
                                            <div class="col col-label"></div>
                                            <div class="col-12 col-input form-buttons">
                                                <button id="update" class="btn btn--large" style=" border-radius: 16px 0px;font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Cập nhật</button>
                                                <a data-fancybox="" data-src="#fancybox-popup" class="btn btn--large btn--outline" style="border-radius: 16px 0px; line-height: 24px;   background-color: white;border-radius: 1px solid #221f20;color: #221f20;">Đổi mật khẩu</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="overlay">
                    <div class="add-address add-change-pass" id="fancybox-popup" style="display: none;">
                        <h3>ĐỔI MẬT KHẨU</h3>
                        <div class="col-md-12 form-group">
                            <label>Mật khẩu hiện tại</label>
                            <input class="form-control" type="password" name="customer_pass_old" id="customer_pass_old">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Mật khẩu mới</label>
                            <input class="form-control" type="password" name="customer_pass_new1" id="customer_pass_new1" value="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Nhập lại Mật khẩu mới</label>
                            <input class="form-control" type="password" name="customer_pass_new2" id="customer_pass_new2" value="">
                        </div>
                        <div class="wallet-deposit-form-wrapper" style="width: 100%">
                            <div class="col-md-12 form-button">
                                <a style="    font-weight: 600;font-size: 16px;line-height: 24px;text-align: center;text-transform: uppercase;color: #f7f8f9;width: 100%;background-color: black;" class="btn btn--large" id="change_pass">Cập nhật</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <footer style="margin-top: 40px">
    <div class="main-footer d-flex">
    <div class="left-footer">
				<div class="top-left">
					<div class="logo-footer">
						<a href="#">
                        <img src="views/Component/images/logo.png" alt="logo-footer">
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
        <script src="views/Pages/PHP/user/profile/profile.js"></script>
    </body>
</html>
<?php print_r($profile); ?>