
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="views/Component/header/header.css">
    <link rel="stylesheet" href="views/Pages/PHP/user/Home/home.css">
    <title>Trang chủ</title>
  </head>
  <body>
    <header>
      <?php require('views/Component/header/header.php');?>
  </header>
    <div class="container ">
      <div class="main_container">
        <section class="aspect-ratio-169">
          <a href="#"><img class="item" src="views/Pages/PHP/user/Home/img/banner.jpg" alt=""></a>
          <a href="#"><img class="item" src="views/Pages/PHP/user/Home/img/banner1.jpg" alt=""></a>
          <a href="#"><img class="item" src="views/Pages/PHP/user/Home/img/banner2.jpg" alt=""></a>
          <section class="dots-container">
            <div class="dot" onclick="showImage(0)"></div>
            <div class="dot" onclick="showImage(1)"></div>
            <div class="dot" onclick="showImage(2)"></div>
          </section>
        </section>
        <!-- <section class="home-new-prod" style="padding-top: 20px">
          <div class="title-section">
            <h3>GIỜ VÀNG GIÁ SỐC - DEAL 88K</h3>
          </div>
          <div class="tabs">
            <div class="tab">
              <ul>
                <li class="item-tab">IVY moda</li>
                <li class="item-tab">IVY mem</li>
                <li class="item-tab">IVY kids</li>
              </ul>
            </div>
            <div class="tab-content"></div>
          </div>
        </section> -->
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
  <script src="views/Pages/PHP/user/Home/home.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>