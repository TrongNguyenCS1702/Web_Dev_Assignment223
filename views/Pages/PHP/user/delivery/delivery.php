<?php

$type         = isset($_GET['type']) ? $_GET['type'] : '';
$category     = isset($_GET['category']) ? $_GET['category'] : '';
$figure       = isset($_GET['figure']) ? $_GET['figure'] : '';
$search       = isset($_GET['search']) ? $_GET['search'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="views/Pages/PHP/user/delivery/delivery.css">
  <link rel="stylesheet" href="views/Component/header/header.css">
  <?php include 'views/Component/header/header.php'; ?>

  <title><?php echo ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $type :
          ($type != '' && $category != '' && $figure == '' ? $category . " " . $type :
            (($type != '' && $category != '' && $figure != '') ? $figure . " " . $type : ""))) : $search; ?></title>
</head>

<body>
  <div class="container">
    <div class="product" style="padding-top: 80px;">
      <div class="container mt-4">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb" style="text-decoration:none">
            <li class="breadcrumb-item"><a href="index.php?action=user_homepage" style="text-decoration:none">Trang chủ</a></li>
            <?php if ($search == '') { ?>
            <?php echo  ($type != '' && $category=='' && $figure == '' ) ? '<li class="breadcrumb-item active" aria-current="page">'.$type.'</li>' : '<li class="breadcrumb-item"><a href="index.php?action=products&type='.$type.'" style="text-decoration:none">'.$type.'</a></li>' ?>
            <?php echo ($category != '' && $figure =='') ? '<li class="breadcrumb-item active" aria-current="page">'.$category.'</li>' : '<li class="breadcrumb-item"><a href="index.php?action=products&type='.$type.'&category='.$category.'" style="text-decoration:none">'.$category.'</a></li>'  ?>
            <?php if ($figure != '') echo '<li class="breadcrumb-item active" aria-current="page">'.$figure.'</li>' ;} ?>
            <?php if ($search!=''){echo '<li class="breadcrumb-item active" aria-current="page">'.$search.'</li>' ; }?>
          </ol>
        </nav>
      </div>
    </div>
    <div class="box-products d-flex">
      <div class="side-prod">
        <div class="sidebar-prod sidebar-prod-pc">
          <div class="filter-by-side">
            <div class="container mt-5">
              <div class="row">
                <div class="col-md-12">
                  <!-- Price Range Slider -->
                  <label for="priceSlider">Mức giá:</label>
                  <input onchange="change()" value="0" type="range" class="custom-range" id="priceSlider" min="0"
                    max="5000000" step="500000">
                  <div id="price">Lớn hơn: 0</div>
                </div>
                <div class="col-md-12">
                  <!-- Apply Button -->
                  <div style="display:flex; justify-content:space-between">
                    <button class="btn btn-primary col-md-5" id="applyFilter">Lọc</button>
                    <button class="btn btn-primary col-md-5" id="unApplyFilter" style="display:none">Bỏ lọc</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-prod" id="product-list">

        <?php


        $products = ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $userController->getProductByType($type, 0) :
          ($type != '' && $category != '' && $figure == '' ? $userController->getProductByTypeCategory($type, $category, 0) :
            (($type != '' && $category != '' && $figure != '') ? $userController->getProductByTypeFigure($type, $figure, 0) : ""))) :
            $userController->getProductByName($search, 0);
        echo '<div class="top-main-prod">';
        echo '<h1 class="sub-title-main">';
        echo ($search == '') ? ($type != '' && $category == '' && $figure == '' ? $type :
          ($type != '' && $category != '' && $figure == '' ? $category . " " . $type :
            (($type != '' && $category != '' && $figure != '') ? $figure . " " . $type : ""))) :
           "Tìm kiếm: ".$search ;
        echo '</h1>';
        echo '</div>';
        echo '<div class="sub-main-prod">';
        echo '<div class="list-products list-products-cat d-flex">';

        if ($products != '') {
          foreach ($products as $product) {

            echo '<div class="item-cat-product">
                      <div class="product">
                          <div class="thumb-product">
                            <a href="index.php?action=product&id=' . $product['id'] . '" id="product-links">
                              <img src="' . $product["image_url"] . '" alt="' . $product["name"] . '" class="lazy">
                              <img src="' . $product["image_url"] . '" alt="' . $product["name"] . '" class="hover-img lazy">
                            </a>
                          </div>
                          <div class="info-product">
                            <h3 class="title-product">
                                <a style="text-decoration: none;" href="index.php?action=product&id=' . $product['id'] . '">' . $product["name"] . '</a>
                            </h3>
                            <div class="price-product">
                              <ins>
                                  <span>' . number_format($product["price"], 0, '.', ',') . '<sup>đ</sup></span>
                              </ins>
                              
                            </div>
                          </div>
                        <div class="add-to-cart">
                            <a href="index.php?action=product&id=' . $product['id'] . '"><i class="fas fa-shopping-bag" style="color: white"></i></a>
                        </div>
                      </div>
                    </div> ';
          }
        }

        ?>
<<<<<<< HEAD
      </div>
      <div class="pagination">
      <a href="#" class="page-link" id="prev-page" style="color: #221f20;">Trang trước</a>
      <a href="#" class="page-link" id="next-page"style="color: #221f20;">Trang kế tiếp</a>
    </div>
=======

      </div>
      <div class="pagination">
        <a href="#" class="page-link" id="prev-page" style="color: #221f20;">Trang trước</a>
        <a href="#" class="page-link" id="next-page"style="color: #221f20;">Trang kế tiếp</a>
      </div>
>>>>>>> 9cde67064536217d918b925d498bd50bf64d3d47
    </div>
  </div>
  </div>
  </div>
  <?php require('views/Component/footer/footer.php'); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const type = <?php echo '"' . $type . '"'; ?>;
    const category = <?php echo '"' . $category . '"'; ?>;
    const figure = <?php echo '"' . $figure . '"'; ?>;
    const search = <?php echo '"' . $search . '"'; ?>;
  </script>
  <script src="views/Pages/PHP/user/delivery/delivery.js">

  </script>
</body>

</html>