
<?php 
    // include 'controllers/UserController.php';
    $base_url = "http://localhost/Web_Dev_Assignment223"; // Replace with your URL
    $user = new UserController();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $login_result = $user->loginUser($username,$password);
        if( $login_result == "Login successful."){
            echo '<script>';
            echo 'alert("' . $login_result . '");';
            if(isset($_SESSION['old_url']))
              echo 'window.location.href = "http://localhost' . $_SESSION['old_url']. '";';
            else
              echo 'window.location.href = "' . $base_url . '/index.php?action=user_homepage";';
            echo '</script>';
            unset($_SESSION['old_url']);
        }else{
            echo '<script>alert("'.$login_result.'")</script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="views/Pages/PHP/user/Login/login.css">
    <title>Ivy</title>
  </head>
  <body>
  <?php include 'views/Component/header/header.php';?>
  <div class="container">
    <div class="auth-container">
      <div class="auth-row">
        <div class="auth__login auth__block">
          <h3 class="auth__title">Bạn đã có tài khoản IVY</h3>
          <div class="auth__login__content">
            <p class="auth__description"> Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</p>
            <form class="auth__form" role="login" method="post" action="" autocomplete="off">
              <div class="form-group">
                  <input class="form-control" name="username" type="text" placeholder="Tài khoản" value="">
              </div>
              <div class="form-group">
                  <input class="form-control" name="password" type="password" placeholder="Mật khẩu">
              </div>
              <div class="auth__form__options">
                <div class="form-checkbox">
                    <label>
                        <input class="checkboxs" value="1" name="customer_remember" type="checkbox">
                        <span style="margin-left: 5px"> Ghi nhớ đăng nhập</span>
                    </label>
                </div>
              </div>
              <div class="auth__form__options">
                  <a class="auth__form__link" href="#">Quên mật khẩu? </a>
                  <a class="auth__form__link" href="#"style="margin-left: 110px;">Đăng nhập bằng OTP</a>
              </div>
              <div class="auth__form__buttons">
                  <button id="but_login_email" name="but_login_email" class="button">Đăng nhập</button>
              </div>
            </form>
          </div>
        </div>
        <div class="middle-divider"></div>
        <div class="auth__register auth__block">
            <h3 class="auth__title">Khách hàng mới của IVY moda</h3>
            <div class="auth__login__content">
                <p class="auth__description">Nếu bạn chưa có tài khoản trên ivymoda.com, hãy sử dụng tùy chọn này để truy cập biểu mẫu đăng ký.</p>
                <p class="auth__description">Bằng cách cung cấp cho IVY moda thông tin chi tiết của bạn, quá trình mua hàng trên ivymoda.com sẽ là một trải nghiệm thú vị và nhanh chóng hơn!</p>
                <div class="auth__form__buttons">
                    <a href="index.php?action=user_register"> <button class="button">Đăng ký</button></a>
                </div>
            </div>
        </div>
      </div>
    </div>

  </div>   
   <?php require_once 'views/Component/footer/footer.php'; ?>
  <script src="views/Pages/PHP/user/Login/login.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>