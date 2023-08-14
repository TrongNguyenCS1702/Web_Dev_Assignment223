<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="views/Pages/PHP/user/product page interface/product.css">
  <title>Ivy</title>
  <?php include 'views/Component/header/header.php';?>
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
      <?php 
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        $productModel = new ProductModel();
        $product = $productModel->getProductById($id);
      }
      echo '
      <div class="product-content">
        <div class="product-content-left">
          <div class="product-content-left-big-img">
            <img id="bigimage" src="'.$product['image_url'].'" alt="">  
          </div>
          <div class="product-content-left-small-img">
            <img class="small-image image" src="'.$product['image_url'].'" alt="">
          </div>
        </div>
        <div class="product-content-right">
          <div class="product-content-right-product-name">
            <h1 class="name">'.$product['name'].'</h1>
          </div>
          <div class="product-content-right-product-name">
            <p class="price">'.number_format($product['price'], 0, '.', ',').' <sup>đ</sup></p>
          </div>
          <div class="quantity">
            <p style="font-weight: bold;">Số lượng:</p>
            <input class="qty" type="number" min="0" value="1">
          </div>
          <div class="row ">
            <div type="button" onclick="add(';
            echo  $product['id'].','.$product['price'].",'";
            echo $product['name']."','";
            echo $product['image_url']."')";
            echo '" class="col-md-6 col-md-6 product-content-right-product-button add-to-cart" style="margin-top:24px;">
                <div  class="custom-button" style="width:100%;height:100%;text-align:center;display:flex;justify-content:space-between;">
                    <div style="display:flex;align-items:center"><i class="fa-solid fa-cart-plus"></i></div>
                    THÊM VÀO GIỎ 
                    </div>
          </div>
          <div class="col-md-6 product-content-right-product-button" style="margin-top:24px;" >
            <a  class="custom-button" style="width:100%;height:100%;text-align:center;display:flex;justify-content:space-between"><div style="display:flex;align-items:center"><i class="fa-solid fa-cart-shopping"></i></div>MUA HÀNG</a>
          </div>
          </div>
          <div class="product-content-right-bottom">
            <div class="product-content-right-bottom-content-big">
              <div class="product-content-right-bottom-content-title">
                <div class="row">
                  <div class="col-4" style="text-align:center;font-weight: bold;">
                    <div class="product-content-right-bottom-content-title-item chitiet" onclick="showTab("chitiet")">
                      <p>Chi tiết</p>
                    </div>
                  </div>
                  <div class="col-4" style="text-align:center;font-weight: bold;">
                    <div class="product-content-right-bottom-content-title-item baoquan" onclick="showTab("baoquan")">
                      <p>Bảo quản</p>
                    </div>
                  </div>
                  <div class="col-4" style="text-align:center;font-weight: bold;">
                    <div class="product-content-right-bottom-content-title-item thamkhao" onclick="showTab("thamkhao")">
                      <p>Tham khảo size</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-content-right-bottom-content">
                <div class="product-content-right-bottom-content-chitiet active" style="padding: 0 24px 24px 24px">
                  '.$product['description'].'
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
          </div> 
        </div>

      </div>';
        ?>
    </div>
  </section>
  <section class="product-related container">
    <div class="product-related-title">
      <p>SẢN PHẨM LIÊN QUAN</p>
    </div>
    <?php 
    $product_lq = $productModel->getProductByFigure($product['figure_id']);
   
   echo '<div class="row product-content">';
   foreach ($product_lq as $product1)
   echo'
      <div class="col-md-3 product-related-item">
        <img src="'.$product1['image_url'].'" alt="" >
        <h1>'.$product1['name'].'</h1>
        <p>'.number_format($product['price'], 0, '.', ',').'<sup>đ</sup></p>
      </div>';
      
    echo '</div>' ;
    ?>
  </section>
 <script>

    

 </script> 
<!-- Footer-->
<footer style="margin-top: 30px">
    <div class="main-footer d-flex">
      <div class="left-footer">
        <div class="top-left">
          <div class="logo-footer">
            <a href=""><img src="/View/Component/footer/img/logo-footer.png" alt="" style="width:92.92px; height:25.69px;"></a>
          </div>
          <a href=""><img src="/View/Component/footer/img/dmca.png" alt=""style="width: 61.33px; height:19.77px;"></a>
          <div class="logo-cong-thuong">
            <a href=""><img src="/View/Component/footer/img/img-congthuong.png" alt=""style="width:70.52px; height:26.36px;"></a>
          </div>
        </div>
        <div class="content-left-ft content-ft">
          <div class="info-left-ft">
            <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650</p>
            <p><strong>Địa chỉ đăng ký:</strong>Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam</p>
            <p><strong>Số điện thoại:</strong>0243 205 2222/ 090 589 8683</p>
            <p><strong>Email:</strong>cskh@ivy.com.vn</p>
          </div>
          <ul class="list-social">
            <li><a href=""><img src="/View/Component/footer/img/fb.svg" alt="" style="width:12px; height:24px;"></a></li>
            <li><a href=""><img src="/View/Component/footer/img/ic_gg.svg" alt="" style="width:22px; height:22px;"></a></li>
            <li><a href=""><img src="/View/Component/footer/img/ic_instagram.svg" alt="" style="width:30px; height:30px;"></a></li>
            <li><a href=""><img src="/View/Component/footer/img/ic_pinterest.svg" alt="" style="width:27px; height:27px;"></a></li>
            <li><a href=""><img src="/View/Component/footer/img/ic_ytb.svg" alt="" style="width:24px; height:17px;"></a></li>
          </ul>
        </div>
      </div>
      <div class="center-footer d-flex">
        <div class="left-center-ft item-center-ft">
          <p class="title-footer">Giới thiệu</p>
					<ul>
            <li>
              <a href="https://ivymoda.com/about/gioi-thieu">Về IVY moda</a>
						</li>
						<li>
              <a target="_blank" href="https://tuyendung.ivy.com.vn">Tuyển dụng</a>
						</li>
						<li>
              <a href="https://ivymoda.com/page/cuahang">Hệ thống cửa hàng</a>
						</li>
					</ul>
				</div>
				<div class="main-center-ft item-center-ft">
          <p class="title-footer">Dịch vụ khách hàng</p>
					<ul>
						<li>
							<a href="https://ivymoda.com/about/chinhsach-dieukhoan">Chính sách điều khoản</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/huong-dan-mua-hang">Hướng dẫn mua hàng</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/chinh-sach-thanh-toan">Chính sách thanh toán</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/chinh-sach-doi-tra">Chính sách đổi trả</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/chinh-sach-bao-hanh">Chính sách bảo hành</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/chinh-sach-giao-nhan-van-chuyen">Chính sách giao nhận vận chuyển</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/chinh-sach-the-thanh-vien">Chính sách thẻ thành viên</a>
						</li>
						<li>
              <a href="https://ivymoda.com/page/cuahang">Hệ thống cửa hàng</a>
						</li>
						<li>
              <a href="https://ivymoda.com/about/qa">Q&amp;A</a>
						</li>
					</ul>
				</div>
				<div class="right-center-ft item-center-ft">
          <p class="title-footer">Liên hệ</p>
					<ul>
            <li>
              <a href="tel:02466623434">Hotline</a>
						</li>
						<li>
              <a href="mailto:saleadmin@ivy.com.vn">Email</a>
						</li>
						<li>
              <a href="javascript:openCsChatBox();">Live Chat</a>
						</li>
						<li>
              <a href="http://messenger.com/t/thoitrangivymoda" target="_blank">Messenger</a>
						</li>
						<li>
              <a href="https://ivymoda.com/lien-he">Liên hệ</a>
						</li>
					</ul>
				</div>
			</div>
      <div class="right-footer">
        <div class="register-form">
          <p class="title-footer">Nhận thông tin các chương trình của IVY moda</p>
					<form id="frm_subscribe">
            <input id="email_subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required" style="border: 0; border-bottom: 1px solid #BCBDC0;">
						<div class="btn-submit">
							<input id="btn-submit" class="form-submit" value="Đăng ký" type="submit">
						</div>
					</form>
				</div>
				<div class="info-right-ft">
          <p class="title-footer">Download App</p>
					<ul>
            <li>
              <a id="app_ios" href="http://ios.ivy.vn" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" class="img-fluid" alt=""> </a>
						</li>
						<li>
              <a id="app_android" href="http://android.ivy.vn" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" class="img-fluid" alt=""> </a>
						</li>
					</ul>
				</div>
			</div>
    </div>
    </footer>
</div>
<script src="views/Pages/PHP/user/product page interface/product.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>