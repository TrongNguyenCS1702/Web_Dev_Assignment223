
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
    </div>
    <footer>
      <?php require('views/Component/footer/footer.php');?>
    </footer>
  <script src="views/Pages/PHP/user/Home/home.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>