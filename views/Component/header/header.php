<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="views/Component/header/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
    <header id="header">  
      <div class="logo">
        <a href="views/Pages/PHP/user/Home/home.php"><img src="views/Component/images/logo.png" alt="logo"></a>
      </div>
      <div class="menu">
        <li><a href="index.php?action=products&type=Nữ">NỮ</a>
          <ul class="sub-menu">
            <li><a href="index.php?action=products&type=Nữ&category=Áo">Áo</a>
              <ul>
                <li><a href="index.php?action=products&type=Nữ&category=Áo&figure=Áo sơ mi">Áo sơ mi</li>
                <li><a href="index.php?action=products&type=Nữ&category=Áo&figure=Áo thun">Áo thun</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Áo&figure=Áo kiểu">Áo kiểu</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Áo&figure=Áo peplum">Áo peplum</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Áo&figure=Áo vest/blazer">Áo vest/blazer</a></li>
              </ul>
            </li>
            <li><a href="index.php?action=products&type=Nữ&category=Quần">Quần</a>
              <ul>
                <li><a href="index.php?action=products&type=Nữ&category=Quần&figure=Quần jeans">Quần jeans</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Quần&figure=Quần dài">Quần dài</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Quần&figure=Quần lửng/short">Quần lửng/short</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Quần&figure=Quần baggy">Quần baggy</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Quần&figure=Jumpsuit">Jumpsuit</a></li>
              </ul>
            </li>
            <li><a href="index.php?action=products&type=Nữ&category=Chân váy">Chân váy</a>
              <ul>
                <li><a href="index.php?action=products&type=Nữ&category=Chân váy&figure=Chân váy">Chân váy</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Chân váy&figure=Chân váy xếp li">Chân váy xếp li</a></li>
                <li><a href="index.php?action=products&type=Nữ&category=Chân váy&figure=Chân váy chữ A">Chân váy chữ A</a></li>
              </ul>
            </li>
            <li><a href="index.php?action=products&type=Nữ&category=Giày/Dép">Giày/Dép</a>
              <ul>
                <li><a href="index.php?action=products&type=Nữ&category=Giày/Dép&figure=Giày/Dép">Giày/Dép</a></li>
              </ul>
            </li>
            <li><a href="index.php?action=products&type=Nữ&category=Phụ kiện">Phụ kiện</a>
              <ul>
                <li><a href="index.php?action=products&type=Nữ&category=Phụ kiện&figure=Phụ kiện">Phụ kiện</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">NAM</a></li>
        <li><a href="#">TRẺ EM</a></li>
        <li><a href="#">SALE CUỐI TUẦN</a></li>
        <li> <a href="#">BỘ SƯU TẬP</a></li>
        <li><a href="#">LIFESTYLE</a></li>
        <li><a href="#">VỀ CHÚNG TÔI</a></li>
      </div>
      <div class="orthers">
          <span class="search">
              <div class="form_search">
                  <input class="input" type="text" name="search" placeholder="Tìm kiếm " autocomplete="off" minlength="1">
                  <button onclick="" type="submit" class="submit"><i class="fas fa-search"></i></button>
              </div>
          </span>
          <span class="item wallet">
              <a class="icon" style="color:black" href="#"><i class="fas fa-headphones-alt  "></i></a>
          </span>
          <?php echo isset($_SESSION['role']) ?
           '
           <span class="item wallet">
          <a class="icon" style="color:black" href="index.php?action=profile"><i class="fa-regular fa-address-card" style="color: #000000;"></i></a>
          </span>
          <span class="item wallet">
          <a class="icon" style="color:black" href="index.php?action=user_logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #000000;"></i></a>
          </span>
          
          
          
          ' : '
          <span class="item wallet">
              <a class="icon" style="color:black" href="index.php?action=user_login"><i class="fas fa-user"></i></a>
          </span>';
          ?>
         
          <span class="item wallet">
          <div class="cart-icon">
              <a class="icon" style="color:black" href="index.php?action=cart "><i class="fas fa-shopping-bag"></i></a>
              <span class="cart-count"><?php echo count(isset($_SESSION['cart']) ? $_SESSION['cart'] : []) ; ?> </span>
  </div>
          </span>
      </div>
    </header>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="views/Component/header/header.js"></script>
</body>
</html>