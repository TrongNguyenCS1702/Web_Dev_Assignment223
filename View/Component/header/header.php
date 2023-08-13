<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="/View/Component/header/header.css">
  <title>Ivy</title>
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
    top: 50%; /* Đưa nút tìm kiếm lên giữa theo chiều dọc */
    transform: translateY(-50%); /* Đưa nút tìm kiếm lên giữa theo chiều dọc */
    border: none;
    background-color: #f8f9fa;
}
.orthers input {
    width: 100%;
    border: none;
    border-bottom: 1px solid #000;
}
  </style>
</head>
<body>
  <div class="container">
    <header id="header">  
      <div class="logo">
        <a href="/View/Pages/Home/home.php"><img src="/View/Component/images/logo.png" alt="logo"></a>
      </div>
      <div class="menu">
        <li><a href="#">NỮ</a>
          <ul class="sub-menu">
            <li><a href="#">Áo</a>
              <ul>
                <li><a href="/View/Pages/delivery/delivery.php">Áo sơ mi</li>
                <li><a href="">Áo thun</a></li>
                <li><a href="">Áo Vest</a></li>
                <li><a href="">Áo khóac</a></li>
                <li><a href="">Áo Len</a></li>
              </ul>
            </li>
            <li><a href="#">Quần</a>
              <ul>
                <li><a href="">Áo sơ mi</a></li>
                <li><a href="">Áo thun</a></li>
                <li><a href="">Áo Vest</a></li>
                <li><a href="">Áo khóac</a></li>
                <li><a href="">Áo Len</a></li>
              </ul>
            </li>
            <li><a href="#">Áo</a>
              <ul>
                <li><a href="">Áo sơ mi</a></li>
                <li><a href="">Áo thun</a></li>
                <li><a href="">Áo Vest</a></li>
                <li><a href="">Áo khóac</a></li>
                <li><a href="">Áo Len</a></li>
              </ul>
            </li>
            <li><a href="#">Áo</a>
              <ul>
                <li><a href="">Áo sơ mi</a></li>
                <li><a href="">Áo thun</a></li>
                <li><a href="">Áo Vest</a></li>
                <li><a href="">Áo khóac</a></li>
                <li><a href="">Áo Len</a></li>
              </ul>
            </li>
            <li><a href="#">Áo</a>
              <ul>
                <li><a href="">Áo sơ mi</a></li>
                <li><a href="">Áo thun</a></li>
                <li><a href="">Áo Vest</a></li>
                <li><a href="">Áo khóac</a></li>
                <li><a href="">Áo Len</a></li>
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
              <form action="#" method="get" enctype="#" name="form_search" class="form_search">
                  <input class="input" type="text" name="search" placeholder="Tìm kiếm " autocomplete="off" minlength="1">
                  <button class="submit"><i class="fas fa-search"></i></button>
              </form>
          </span>
          <span class="item wallet">
              <a class="icon" href="#"><i class="fas fa-headphones-alt"></i></a>
          </span>
          <span class="item wallet">
              <a class="icon" href="/View/Pages/Login/login.php"><i class="fas fa-user"></i></a>
          </span>
          <span class="item wallet">
              <a class="icon" href="/View/Pages/cart/cart.php"><i class="fas fa-shopping-bag"></i></a>
          </span>
      </div>
    </header>
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="/View/Component/header/header.js"></script>
</body>
</html>