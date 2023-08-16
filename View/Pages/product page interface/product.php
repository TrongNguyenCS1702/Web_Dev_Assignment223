<?php include '../../Component/header/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="../product page interface/product.css">
  <script src="product.js"></script>
  <link rel="stylesheet" href="/View/Component/header/header.css">
  <title>Ivy</title>
</head>
<body>
<!-- Body-->
<div class="container">
  <section class="product">
    <div class="container">
      <div class="product-top row">
      <div class="product-top row">
        <ol class="product-list">
          <li class="product-item">
            <a href="">Trang chủ</a>
            <i class="fas fa-arrow-right" style="padding: 10px 10px;"></i>
          </li>
          <li class="product-item">
            <a href="">Nam</a>
            <i class="fas fa-arrow-right" style="padding: 10px 10px;"></i>
          </li>
          <li class="product-item">
            <a href="">Áo</a>
            <i class="fas fa-arrow-right" style="padding: 10px 10px;"></i>
          </li>
          <li class="product-item"><a href="">Áo sơ mi</a></li>
        </ol>
      </div>
      </div>
      <div class="product-content row">
        <div class="product-content-left row">
          <div class="product-content-left-big-img">
            <img id="bigimage" src="img/big-img-1.jpg" alt="">  
          </div>
          <div class="product-content-left-small-img">
            <img class="small-image" src="img/small-1.jpg" alt="">
            <img class="small-image" src="img/small-2.jpg" alt="">
            <img class="small-image" src="img/small-3.jpg" alt="">
            <img class="small-image" src="img/small-4.jpg" alt=""> 
          </div>
        </div>
        <div class="product-content-right">
          <div class="product-content-right-product-name">
            <h1>ÁO THUN CỔ TRÒN MS 57E2969</h1>
            <P>MSP: 57E2969</P>
          </div>
          <div class="product-content-right-product-name">
            <p>1.500.000 <sup>đ</sup></p>
          </div>
          <!-- <div class="product-content-right-product-color">
            <p><span style="font-weight: bold;">Màu sắc: Xanh dương</span></p>
            <div class="product-content-right-product-color-img">
              <img src="./img/xanhduong.png" alt="">
            </div>
          </div>
          <div class="product-content-right-product-size">
            <p style="font-weight: bold;">Size:</p>
            <div class="size">
              <span>S</span>
              <span>M</span>
              <span>L</span>
              <span>XL</span>
              <span>XXL</span>
            </div>
          </div> -->
          <div class="quantity">
            <p style="font-weight: bold;">Số lượng:</p>
            <input type="number" min="0" value="1">
          </div>
          <!-- <p style="color: red">Vui lòng chọn size*</p> -->

          <div class="product-content-right-product-button">
            <a href="" class="custom-button"><i class="fas fa-shopping-cart"></i>MUA HÀNG</a>
            <!-- <button>TÌM TẠI CỬA HÀNG</button> -->
          </div>
          <!-- <div class="product-content-right-bottom">
            <div class="product-content-right-bottom-top">
              &#8744;
            </div>
            <div class="product-content-right-bottom-content-big">
              <div class="product-content-right-bottom-content-title">
                <div class="row">
                  <div class="col">
                    <div class="product-content-right-bottom-content-title-item chitiet" onclick="showTab('chitiet')">
                      <p>Chi tiết</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="product-content-right-bottom-content-title-item baoquan" onclick="showTab('baoquan')">
                      <p>Bảo quản</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class="product-content-right-bottom-content-title-item thamkhao" onclick="showTab('thamkhao')">
                      <p>Tham khảo size</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-content-right-bottom-content">
                <div class="product-content-right-bottom-content-chitiet active">
                  Áo thun trơn cổ tròn basic sẽ là item không thể thiếu trong những ngày hè sắp tới cho mọi chàng trai. <br>

                  Dáng áo trẻ trung dễ mặc cùng túi áo trước ngực lạ mắt mang cảm giác hiện đại. Chất áo thun thoáng mát cho các chàng trai vận động thoải mái không lo trong thời tiết mùa hè sắp tới. <br>

                  Màu sắc: Nude - Xanh Dương <br>

                  Mẫu mặc size L: <br>

                  Chiều cao: 1m77 <br>
                  Cân nặng: 68kg <br>
                  Số đo 3 vòng: 94-86-98 cm <br>
                </div>
                <div class="product-content-right-bottom-content-baoquan">
                  Chi tiết bảo quản sản phẩm : <br>

                  * Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt ướt. <br>

                  * Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn. <br>

                  * Vải voan, lụa, chiffon nên giặt bằng tay. <br>

                  * Vải thô, tuytsi, kaki không có phối hay trang trí đá cườm thì có thể giặt máy. <br>

                  * Vải thô, tuytsi, kaki có phối màu tường phản hay trang trí voan, lụa, đá cườm thì cần giặt tay. <br>

                  * Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans. Nếu giặt thì nên lộn trái sản phẩm khi giặt, đóng khuy, kéo khóa, không nên giặt chung cùng đồ sáng màu, tránh dính màu vào các sản phẩm khác. <br>

                  * Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu, phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh, nên giặt cùng xà phòng pha loãng. <br>

                  * Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ, vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt. <br>

                  * Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu, nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn. <br>

                  * Những chất vải 100% cotton, không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải. <br>

                  * Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng, mát và không bị cháy, giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. <br>
                </div>

              </div>
            </div>
          </div> -->
        </div>

      </div>
    </div>
  </section>
  <section class="product-related container">
    <div class="product-related-title">
      <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <div class="row product-content">
      <div class="col-md-3 product-related-item">
        <img src="img/big-img-1.jpg" alt="" >
        <h1>ÁO THUN CỔ TRÒN MS 57E2969</h1>
        <p>1.500.000 <sup>đ</sup></p>
      </div>
      <div class="col-md-3 product-related-item">
        <img src="img/big-img-1.jpg" alt="">
        <h1>ÁO THUN CỔ TRÒN MS 57E2969</h1>
        <p>1.500.000 <sup>đ</sup></p>
      </div>
      <div class="col-md-3 product-related-item">
        <img src="img/big-img-1.jpg" alt="">
        <h1>ÁO THUN CỔ TRÒN MS 57E2969</h1>
        <p>1.500.000 <sup>đ</sup></p>
      </div>
      <div class="col-md-3 product-related-item">
        <img src="img/big-img-1.jpg" alt="">
        <h1>ÁO THUN CỔ TRÒN MS 57E2969</h1>
        <p>1.500.000 <sup>đ</sup></p>
      </div>
      <div class="col-md-3 product-related-item">
        <img src="img/big-img-1.jpg" alt="">
        <h1>ÁO THUN CỔ TRÒN MS 57E2969</h1>
        <p>1.500.000 <sup>đ</sup></p>
      </div>
    </div>
  </section>
  
<!-- Footer-->
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
</body>
</html>
