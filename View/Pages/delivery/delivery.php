
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
                  <li class="item-side item-side-price">
                    <p class="item-side-title ">Mức giá</p>
                      <div class="double_range_slider_box">
                        <div class="double_range_slider">
                          <span class="range_track" id="range_track"></span>

                          <input type="range" class="min" min="0" max="10000000" value="0" step="0">
                          <input type="range" class="max" min="0" max="10000000" value="10000000" step="100000">
        

                          <div class="maxvalue"></div>
                        </div>
                      </div> 
                  </li>
              </ul>
              <div class="col-md-12 p-0" style="margin-top: 30px">
                  <div class="row m-0 p-0">
                      <!-- <div class="col-6">
                          <button type="button" class="btn btn--large btn--outline but_filter_remove" style="    border-radius: 16px 0px;    font-size: 10px;    background-color: #221f20;    color: #f7f8f9;border: 1px solid transparent;text-transform: uppercase;">Bỏ lọc</button>
                      </div> -->
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="/View/Pages/product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
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
                  </div>
                </div>
              <div class="add-to-cart">
                  <a href="../product page interface/product.php"><i class="fas fa-shopping-bag" style="color: white"></i></a>
              </div>
            </div>
          </div>
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
    <script src="delivery.js"></script>
</body>
</html>