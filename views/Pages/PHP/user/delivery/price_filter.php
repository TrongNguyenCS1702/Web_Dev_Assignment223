<?php 

if (isset($_POST['type']) && isset($_POST['category']) && isset($_POST['figure']) && isset($_POST['priceSlider'])&& isset($_POST['search'])){
    $type = $_POST['type'];
    $category = $_POST['category'];
    $figure = $_POST['figure'];
    $search      = $_POST['search'];
    $priceSlider =  $_POST['priceSlider'];
    $products = ($search == '') ?( $type!='' && $category=='' && $figure=='' ? $userController->getProductByType($type,  $priceSlider) :
              ($type!='' && $category!='' && $figure=='' ?  $userController->getProductByTypeCategory($type,$category, $priceSlider) :
              (($type!='' && $category!='' && $figure!='') ? $userController->getProductByTypeFigure($type,$figure, $priceSlider) : "" )))
              : $userController->getProductByName($search, $priceSlider);
              
              echo '<div class="top-main-prod">';
              echo '<h1 class="sub-title-main">';
              echo ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $type :
                ($type != '' && $category != '' && $figure == '' ? $category . " " . $type :
                  (($type != '' && $category != '' && $figure != '') ? $figure . " " . $type : ""))) :
                "Tìm kiếm: " . $search;
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

}

?>