<?php 
if (!(isset($_SESSION['role']) && $_SESSION['role'] == "user")) {
    $_SESSION['old_url'] = $_SERVER['REQUEST_URI'];
    echo '<script>';
    echo 'alert("Bạn cần phải đăng nhập trước");';
    echo 'window.location.href = "index.php?action=user_login";';
    echo '</script>';
}
$profile = $userController->getProfile($_SESSION['user_id']);
$name = explode(" ", $profile['fullname']);
$lname = implode(" ", array_slice($name, 1));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://pubcdn.ivymoda.com/ivy2/images/logo-icon.ico" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="views/Pages/PHP/user/profile/profile.css">
        <title>Profile</title>
    </head>
    <body>
        <?php include 'views/Component/header/header.php';?>
        <main id="main" class="site-main">
            <div class="container">
                <div class="order-wrapper mt-40 my-account">
                    <div class="row">
                        <div class="col-3xl-1"></div>
                        <div class="col-lg-8 col-xl">
                            <div class="order-block__title">
                                <h2>TÀI KHOẢN CỦA TÔI</h2>
                            </div>
                            <div class="order-block my-account-wrapper row">
                                <p class="alert alert-primary">"Vì chính sách an toàn thẻ, bạn không thể thay đổi SĐT, Họ tên. Vui lòng liên hệ CSKH 0123456789 để được hỗ trợ"</p>
                                <div class="col-md-6">
                                    <form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Họ</label>
                                            </div>
                                            <div class="col col-input">
                                                <input class="form-control" value="<?php echo $name[0];?>" type="text" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Tên</label>
                                            </div>
                                            <div class="col col-input">
                                                <input class="form-control" value="<?php echo $lname;?>" type="text" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Số điện thoại</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input value="<?php echo $profile['phone']?>" class="form-control" type="text" id="customer_phone" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Email</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input class="form-control" type="text" value="<?php echo $profile['email']?>" id="customer_email" name="customer_email">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Address</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input class="form-control" type="text" value="<?php echo $profile['address']?>" id="customer_address" name="customer_email">
                                            </div>
                                        </div>
                                        <div class="row form-radio-checkbox form-group">
                                            <div class="col col-label"></div>
                                            <div class="col-12 col-input form-buttons">
                                                <button id="update" class="btn btn--large" style=" border-radius: 16px 0px;font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Cập nhật</button>
                                                <a data-fancybox="" data-src="#fancybox-popup" class="btn btn--large btn--outline" style="border-radius: 16px 0px; line-height: 24px;   background-color: white;border-radius: 1px solid #221f20;color: #221f20;">Đổi mật khẩu</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="overlay">
                    <div class="add-address add-change-pass" id="fancybox-popup" style="display: none;">
                        <h3>ĐỔI MẬT KHẨU</h3>
                        <div class="col-md-12 form-group">
                            <label>Mật khẩu hiện tại</label>
                            <input class="form-control" type="password" name="customer_pass_old" id="customer_pass_old">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Mật khẩu mới</label>
                            <input class="form-control" type="password" name="customer_pass_new1" id="customer_pass_new1" value="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Nhập lại Mật khẩu mới</label>
                            <input class="form-control" type="password" name="customer_pass_new2" id="customer_pass_new2" value="">
                        </div>
                        <div class="wallet-deposit-form-wrapper" style="width: 100%">
                            <div class="col-md-12 form-button">
                                <a style="    font-weight: 600;font-size: 16px;line-height: 24px;text-align: center;text-transform: uppercase;color: #f7f8f9;width: 100%;background-color: black;" class="btn btn--large" id="change_pass">Cập nhật</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'views/Component/footer/footer.php';?>
        <script src="views/Pages/PHP/user/profile/profile.js"></script>
    </body>
</html>
<?php print_r($profile); ?>