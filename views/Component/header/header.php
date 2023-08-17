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
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
li {
    list-style: none;
}
a {
    text-decoration: none;
    color: black;
}
header {
    
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px 50px;
    height: 70px;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #FFF;
    z-index: 20;
}
.menu{
    flex: 3;
    display: flex;
}
.menu li a {
    padding: 0 12px;
    position: relative;
    display: block;
    line-height: 20px;
    font-size: 12px;
}
.sub-menu {
    position: absolute;
    width: 700px;
    padding: 10px 0 10px 20px;
    border: 1px solid #5a5a5a;
    visibility: hidden;
    display: flex;
    top: 50px;
    transition: 0.3s;
    background-color: #f8f9fa;
}
.menu li:hover .sub-menu {
    visibility: visible;
    top: 70px;
}
.sub-menu ul a {
    font-weight: normal;
}
.menu a{
    font-size: 12px;
    font-weight: bold;
}
.logo {
    flex:1;
}
.orthers {
    flex: 1;
    display: flex;
}
.orthers a {
    padding: 0 12px;
}
.form_search {
    position: relative;
}  
.submit {
    position: absolute;
    right: 5px; /* Điều chỉnh vị trí của nút tìm kiếm so với ô nhập liệu */
    top: 58%; /* Đưa nút tìm kiếm lên giữa theo chiều dọc */
    transform: translateY(-50%); /* Đưa nút tìm kiếm lên giữa theo chiều dọc */
    border: none;
    background-color: #00000000;
}
.orthers input {
    width: 100%;
    border: none;
    padding-left: 8px;
    padding-right: 25px;
    border-bottom: 1px solid #000;
}
.cart-icon {
    position: relative;
    display: inline-block;
  }
  
  .cart-count {
    position: absolute;
    top: -8px;
    right: -10px;
    background-color: rgb(0, 0, 0);
    color: white;
    border-radius: 50%;
    padding: 3px 6px;
    font-size: 10px;
    
  }

  /* Styling cho popup */
  .success-popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    width: 300px; /* Đặt chiều rộng */
    text-align: center;
  }
  
  .success-popup h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .success-popup p {
    font-size: 16px;
    margin-bottom: 20px;
  }
  
  .success-popup button {
    padding: 8px 16px;
    background-color: #000000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .success-popup button:hover {
    background-color: #5a5b5c;
  }
  .popup-content {
    text-align: center;
  }
  
    #showSuccessPopup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); 
      z-index: 999; 
  }
  @media (max-width: 768px){
    .orthers {
      display: none;
    }
    .menu {
      display: none;
    }
  }
    </style>
</head>
<body>
  <div class="container">
    <header id="header">  
      <div class="logo">
        <a href="http://localhost/FigureSell/main/index.php?action=user_homepage"><img src="views/Component/images/logo.png" alt="logo"></a>
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