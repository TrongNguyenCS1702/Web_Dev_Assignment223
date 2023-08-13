
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="/View/Component/header/header.css">
    <link rel="stylesheet" href="home.css">
    <title>Ivy</title>
  </head>
  <body>
    <header>
      <<?php include '../../Component/header/header.php';?>

  </header>
    <div class="container ">
      <div class="main_container">
        <section class="aspect-ratio-169">
          <a href="#"><img class="item" src="/View/Pages/Home/img/banner.jpg" alt=""></a>
          <a href="#"><img class="item" src="/View/Pages/Home/img/banner1.jpg" alt=""></a>
          <a href="#"><img class="item" src="/View/Pages/Home/img/banner2.jpg" alt=""></a>
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
  <script src="home.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>