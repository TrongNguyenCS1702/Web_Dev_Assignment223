
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="delivery.css">
  <link rel="stylesheet" href="../../Component/header/header.css">
  <?php include '../../Component/header/header.php';?>

  <title>Ivy</title>
</head>
<body>
<div class="container">
  <div class="product"  style="padding-top: 80px;">
    <div class="product-top row">
      <ol class="product-list">
        <li class="product-item">
          <a href="">Trang chủ</a>
          <i class="fas fa-arrow-right" style="padding: 10px 10px;"></i>
        </li>
        <li class="product-item">
          <a href="">Nữ</a>
          <i class="fas fa-arrow-right" style="padding: 10px 10px;"></i>
        </li>
        <li class="product-item">
          <a href="">Áo</a>
          <i class="fas fa-arrow-right" style="padding: 10px 10px;"></i>
        </li>
        <li class="product-item"><a href="">Áo sơ mi nữ</a></li>
      </ol>
    </div>
  </div>
  <div class="box-products d-flex">   
    <div class="side-prod">
      <div class="sidebar-prod sidebar-prod-pc">
            <div class="filter-by-side">
              <ul class="list-side">
                    <!-- <li class="item-side item-side-size">
                      <p class="item-side-title ">Size<span class="icon-ic_plus"></span><span class="icon-ic_minus"></span></p>
                      <div class="sub-list-side" style="display: none;">
                        <input type="hidden" name="hid_size">
                                    <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_size[]" value="s">
                            <span class="item-sub-title item-sub-pr ">S</span>
                        </label>
                                    <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_size[]" value="m">
                            <span class="item-sub-title item-sub-pr ">M</span>
                        </label>
                                    <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_size[]" value="l">
                            <span class="item-sub-title item-sub-pr ">L</span>
                        </label>
                                    <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_size[]" value="xl">
                            <span class="item-sub-title item-sub-pr ">XL</span>
                        </label>
                                    <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_size[]" value="xxl">
                            <span class="item-sub-title item-sub-pr ">XXL</span>
                        </label>
                      </div>
                  </li>
                  <li class="item-side item-side-color">
                      <p class="item-side-title ">Màu sắc<span class="icon-ic_plus"></span><span class="icon-ic_minus"></span></p>
                      <div class="sub-list-side" style="display: none;">
                        <div class="color-filter">
                          <input type="hidden" name="hid_color">
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="009">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Vàng hoa cúc">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/009.png" title="Vàng hoa cúc">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="006">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Xanh matcha">
                              <img src="https://pubcdn.ivymoda.com/ivy2/images/color/006.png" title="Xanh matcha">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="013">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hồng nhạt">
                              <img src="https://pubcdn.ivymoda.com/ivy2/images/color/013.png" title="Hồng nhạt">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="012">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cam đỏ">
                              <img src="https://pubcdn.ivymoda.com/ivy2/images/color/012.png" title="Cam đỏ">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="020">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tím thẫm">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/020.png" title="Tím thẫm">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="001">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Trắng">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/001.png" title="Trắng">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="044">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tím cà">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/044.png" title="Tím cà">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="047">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tím khói">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/047.png" title="Tím khói">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="010">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Vàng mustard">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/010.png" title="Vàng mustard">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="014">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hồng tím">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/014.png" title="Hồng tím">
                            </span>
                          </label>
                          <label class="item-sub-list po-relative">
                            <input class="field-cat" type="radio" name="att_color[]" value="000">
                            <span class="item-sub-title item-sub-pr " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Ngẫu nhiên">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/color/000.png" title="Ngẫu nhiên">
                            </span>
                          </label>
                        </div>
                      </div>
                  </li> -->
                  <li class="item-side item-side-price">
                    <p class="item-side-title ">Mức giá<span class="icon-ic_plus"></span><span class="icon-ic_minus"></span></p>
                      <!-- <div class="sub-list-side" style="display: none;">
                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                          <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
                          <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                          <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <div class="value-range">
                            <input type="hidden" name="product_price_from">
                            <input type="hidden" name="product_price_to">
                            <div id="amout-from">0đ</div>
                            <div id="amout-to">10.000.000đ</div>
                        </div>
                      </div> -->
                      <div class="double_range_slider_box">
                        <div class="double_range_slider">
                          <span class="range_track" id="range_track"></span>

                          <input type="range" class="min" min="0" max="10000000" value="0" step="0">
                          <input type="range" class="max" min="0" max="10000000" value="10000000" step="100000">
        
                          <div class="minvalue"></div>
                          <div class="maxvalue"></div>
                        </div>
                      </div> 
                  </li>
              </ul>
              <div class="col-md-12 p-0" style="margin-top: 30px">
                  <div class="row m-0 p-0">
                      <div class="col-6">
                          <button type="button" class="btn btn--large btn--outline but_filter_remove" style="    border-radius: 16px 0px;    font-size: 10px;    background-color: #221f20;    color: #f7f8f9;border: 1px solid transparent;text-transform: uppercase;">Bỏ lọc</button>
                      </div>
                      <div class="col-6">
                          <button type="button" class="btn btn--large but_filter_product" style="    padding: 10px 20px;    border-radius: 16px 0px;    font-size: 10px;    line-height: 24px;    background-color: #221f20;    color: #f7f8f9;    border: 1px solid transparent;    text-transform: uppercase;">Lọc</button>
                      </div>
                  </div>
                  <p class="required" id="msg_error_size_color"></p>
              </div>
          </div>
        </div>
    </div>
    <div class="main-prod">
      <div class="top-main-prod">
        <h1 class="sub-title-main">Áo sơ mi nữ</h1>
      </div>
      <div class="sub-main-prod">
        <div class="list-products list-products-cat d-flex">
          <div class="item-cat-product">
            <div class="product">
                <div class="thumb-product">
                  <a href="#" id="product-links">
                    <img src="/View/Pages/delivery/img/1.jpg" alt="Áo sơ mi tencel dáng oversize" class="lazy">
                    <img src="/View/Pages/delivery/img/2.jpg" alt="Áo sơ mi tencel dáng oversize" class="hover-img lazy">
                  </a>
                </div>
                <div class="info-product">
                  <h3 class="title-product">
                      <a href="#">Áo sơ mi tencel dáng oversize</a>
                  </h3>
                  <div class="price-product">
                    <ins>
                        <span>795.000đ</span>
                    </ins>
                    <del>
                        <span>1.590.000đ</span>
                    </del>
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="/View/Pages/product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
              <!-- <div class="list-size">
                <ul>
                  <li class="unactive"><button class="btn bt-large">s</button></li>
                  <li data-product-sub-id="183698"><button class="btn bt-large">m</button></li>
                  <li data-product-sub-id="183701"><button class="btn bt-large">l</button></li>
                  <li data-product-sub-id="183704"><button class="btn bt-large">xl</button></li>
                  <li data-product-sub-id="183707"><button class="btn bt-large">xxl</button></li>
                </ul> 
              </div> -->
            </div>
          </div> 
          <div class="item-cat-product">
            <div class="product">
                <div class="thumb-product">
                  <a href="#" id="product-links">
                    <img src="./img/7.jpg" alt="Áo sơ mi tencel dáng oversize" class="lazy">
                    <img src=".img/8.jpg" alt="Áo sơ mi tencel dáng oversize" class="hover-img lazy">
                  </a>
                </div>
                <div class="info-product">
                  <h3 class="title-product">
                      <a href="#">Áo sơ mi tencel dáng oversize</a>
                  </h3>
                  <div class="price-product">
                    <ins>
                        <span>795.000đ</span>
                    </ins>
                    <del>
                        <span>1.590.000đ</span>
                    </del>
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
              <!-- <div class="list-size">
                <ul>
                  <li class="unactive"><button class="btn bt-large">s</button></li>
                  <li data-product-sub-id="183698"><button class="btn bt-large">m</button></li>
                  <li data-product-sub-id="183701"><button class="btn bt-large">l</button></li>
                  <li data-product-sub-id="183704"><button class="btn bt-large">xl</button></li>
                  <li data-product-sub-id="183707"><button class="btn bt-large">xxl</button></li>
                </ul> 
              </div> -->
            </div>
          </div>    
        </div>
      </div>
    </div>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="delivery.js"></script>
</body>
</html>