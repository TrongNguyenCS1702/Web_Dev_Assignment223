
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="views/Pages/PHP/user/delivery/delivery.css">
  <link rel="stylesheet" href="views/Component/header/header.css">
  <?php include 'views/Component/header/header.php';?>

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
              <div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <!-- Price Range Slider -->
            <label for="priceSlider">Price Range Slider:</label>
            <input onchange="change()" value="0" type="range" class="custom-range" id="priceSlider" min="0" max="5000000" step="500000">
            <div id="price">Lớn hơn: 0</div>
        </div>
        <div class="col-md-4">
            <!-- Apply Button -->
            <button class="btn btn-primary" id="applyFilter">Apply Filter</button>
        </div>
    </div>
</div>
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
      
          <?php 

              $type = $_GET['type'] ?  $_GET['type'] : '';
              $category = isset($_GET['category']) ?  $_GET['category'] : '';
              $figure = isset($_GET['figure'])  ?  $_GET['figure'] : '';
              $productModel = new ProductModel();
              $products = $type!='' && $category=='' && $figure=='' ? $productModel->getProductByType($type) :
              ($type!='' && $category!='' && $figure=='' ?  $productModel->getProductByTypeCategory($type,$category) :
              (($type!='' && $category=='' && $figure!='') ? $productModel->getProductByTypeFigure($type,$figure) : "" ));
              echo '<div class="top-main-prod">';
              echo '<h1 class="sub-title-main">';
              echo $type!='' && $category=='' && $figure=='' ? $type :
              ($type!='' && $category!='' && $figure=='' ?  $category." ".$type :
              (($type!='' && $category=='' && $figure!='') ? $figure." ".$type : "" ));
              echo '</h1>';
              echo '</div>';  
              echo '<div class="sub-main-prod">';
              echo '<div class="list-products list-products-cat d-flex">';
              
              if($products != ''){
              foreach ($products as $product) {
                 
                      echo '<div class="item-cat-product">
                      <div class="product">
                          <div class="thumb-product">
                            <a href="index.php?action=product&id='.$product['id'].'" id="product-links">
                              <img src="'.$product["image_url"].'" alt="'.$product["name"].'" class="lazy">
                              <img src="'.$product["image_url"].'" alt="'.$product["name"].'" class="hover-img lazy">
                            </a>
                          </div>
                          <div class="info-product">
                            <h3 class="title-product">
                                <a style="text-decoration: none;" href="index.php?action=product&id='.$product['id'].'">'.$product["name"].'</a>
                            </h3>
                            <div class="price-product">
                              <ins>
                                  <span>'. number_format($product["price"], 0, '.', ',').'<sup>đ</sup></span>
                              </ins>
                              
                            </div>
                          </div>
                        <div class="add-to-cart">
                            <a href="index.php?action=product&id='.$product['id'].'"><i class="fas fa-shopping-bag" style="color: white"></i></a>
                        </div>
                      </div>
                    </div> ';
                  }
              }
         
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require('views/Component/footer/footer.php');?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="views/Pages/PHP/user/delivery/delivery.js"></script>
</body>
</html>