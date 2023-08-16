<?php 
    
    $base_url = "http://localhost/Web_Dev_Assignment223"; // Replace with your URL
    if(isset($_SESSION['user_id']) && $_SESSION['role'] == "user"){
        header("Location: {$base_url}/index.php?action=user_homepage");
        exit;
    }
    $username = $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST['username'] : "";
    $email = $_SERVER['REQUEST_METHOD'] === 'POST' ?  $_POST['email'] : "";
    $phone = $_SERVER['REQUEST_METHOD'] === 'POST' ?  $_POST['phone'] : "";
    $address = $_SERVER['REQUEST_METHOD'] === 'POST' ?  $_POST['address'] : "";
    $fname = $_SERVER['REQUEST_METHOD'] === 'POST' ?  $_POST['fname'] : "";
    $name = $_SERVER['REQUEST_METHOD'] === 'POST' ?  $_POST['name']  : "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ( $_POST['pass1'] == $_POST['pass2'] && $_POST['pass2']!=''  ){
            $password = $_POST['pass1'] ;
            $fname =  $_POST['fname'] .' '. $_POST['name'] ;
            
            $register_result = $userController->registerUser($username,$password,$email,$phone,$address,$fname);
            if ($register_result == "User registered successfully."){
                echo '<script>';
                echo 'alert("' . $register_result . '");';
                echo 'window.location.href = "' . $base_url . '/index.php?action=user_login";';
                echo '</script>';
            }else{
                echo '<script>alert("'.$register_result.'")</script>';
            }
        }else{
            echo '<script>alert("Nhập lại mật khẩu không chính xác")</script>';
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
  <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
  <!-- <link rel="stylesheet" href="views/Pages/PHP/user/delivery/delivery.css"> -->
  <link rel="stylesheet" href="views/Pages/PHP/user/reg/register.css">
    <title>Đăng ký</title>
</head>
<body>
<?php include 'views/Component/header/header.php';?>
<div class="container">
    <div class="order-block__title justify-content-center pt-4 pb-2">
        <h3 class="text-uppercase">Đăng ký</h3>
    </div>
    <div class="auth auth-forgotpass" style="margin-top:16px">
        <div class="row" style="display: block">
            <form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="register-summary__overview">
                        <h4>Thông tin khách hàng</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Họ:<span style="color: red">*</span></label>
                                <input type="text" class="form-control" value="<?php $fname ?>" name="fname" placeholder="Họ..." style="width: 100%">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Tên:<span style="color: red">*</span></label>
                                <input class="form-control" type="text" value="<?php $name ?>" name="name" placeholder="Tên..." style="width: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Email:<span style="color: red">*</span></label>
                                <input id="email" class="form-control" type="email" name="email" value="" placeholder="Email..." style="width: 100%">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Điện thoại:<span style="color: red">*</span></label>
                                <input class="form-control" type="text" value="" name="phone" placeholder="Điện thoại..." style="width: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Username: <span style="color: red">*</span></label>
                                <input class="form-control" type="text" value="" name="username" placeholder="" style="width: 100%">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Địa chỉ:<span style="color: red">*</span></label>
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="register-summary__overview">
                        <h4>Thông tin mật khẩu</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Mật khẩu:<span style="color: red">*</span></label>
                                <input class="form-control" type="password" value="" name="pass1" placeholder="Mật khẩu...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Nhập lại mật khẩu:<span style="color: red">*</span></label>
                                <input class="form-control" type="password" value="" name="pass2" placeholder="Nhập lại mật khẩu...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-check">
                                <input class="form-check-input checkboxs" type="checkbox" name="customer_agree" value="1" id="defaultCheck1">
                                <label style="margin-top: 4px;margin-left: 3px;" class="form-check-label" for="defaultCheck1">
                                    <span> Đồng ý với các <a style="color: #f31f1f" href="#">điều khoản</a> của IVY </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button id="bnt_register" class="btn btn--large" type="submit" style="width: 100%;margin-top: 15px">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'views/Component/footer/footer.php'; ?>

</body>
</html>