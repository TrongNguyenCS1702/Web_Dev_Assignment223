
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
                    <li class="item-side item-side-size">
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
                  </li>
                  <li class="item-side item-side-price">
                    <p class="item-side-title ">Mức giá<span class="icon-ic_plus"></span><span class="icon-ic_minus"></span></p>
                      <div class="sub-list-side" style="display: none;">
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
                      </div>
                  </li>
              </ul>
              <div class="col-md-12 p-0" style="margin-top: 30px">
                  <div class="row m-0 p-0">
                      <div class="col-6">
                          <button type="button" class="btn btn--large btn--outline but_filter_remove" style="font-size: 13px;padding: 10px 20px;">Bỏ lọc</button>
                      </div>
                      <div class="col-6">
                          <button type="button" class="btn btn--large but_filter_product" style="font-size: 13px;padding: 10px 20px;">Lọc</button>
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
                    <img src="/View/Pages/delivery/img/7.jpg" alt="Áo sơ mi tencel dáng oversize" class="lazy">
                    <img src="/View/Pages/delivery/img/8.jpg" alt="Áo sơ mi tencel dáng oversize" class="hover-img lazy">
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
        </div>
      </div>
    </div>
  </div>
</div>
<?php require('../../Component/footer/footer.php');?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="delivery.js"></script>
</body>
</html>