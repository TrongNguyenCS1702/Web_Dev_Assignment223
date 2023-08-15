<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="user.css">
        <title>Ivy</title>
    </head>
    <body>
        <?php include '../../Component/header/header.php';?>
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
                                <p class="alert alert-primary">"Vì chính sách an toàn thẻ, bạn không thể thay đổi SĐT, Ngày sinh, Họ tên. Vui lòng liên hệ CSKH 0905898683 để được hỗ trợ"</p>
                                <div class="col-md-6">
                                    <form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Họ</label>
                                            </div>
                                            <div class="col col-input">
                                                <input class="form-control" value="LE" type="text" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Tên</label>
                                            </div>
                                            <div class="col col-input">
                                                <input class="form-control" value="THANH DUONG" type="text" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Số điện thoại</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input value="0348263109" class="form-control" type="text" id="customer_phone" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-label">
                                                <label>Email</label>
                                            </div>
                                            <div class="col col-input has-button">
                                                <input class="form-control" type="text" value="duongle992002@gmail.com" id="customer_email" name="customer_email">
                                            </div>
                                        </div>
                                        <div class="row form-radio-checkbox form-group">
                                            <div class="col col-label">
                                                <label>Giới tính</label>
                                            </div>
                                            <div class="col col-input">
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <label class="form-radio">
                                                            <input class="form-radio__input" type="radio" name="customer_sex" value="1" checked=""><span class="form-radio__label">Nam</span>
                                                        </label>
                                                        <label class="form-radio">
                                                            <input class="form-radio__input" type="radio" name="customer_sex" value="0"><span class="form-radio__label">Nữ</span>
                                                        </label>
                                                        <label class="form-radio">
                                                            <input class="form-radio__input" type="radio" name="customer_sex" value="2"><span class="form-radio__label">Khác</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-radio-checkbox form-group">
                                            <div class="col col-label">
                                                <label>Ngày sinh</label>
                                            </div>
                                            <div class="col col-input">
                                                <div class="row">
                                                    <input type="text" value="09/09/2002" class="form-control" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-radio-checkbox form-group">
                                            <div class="col col-label"></div>
                                            <div class="col-12 col-input form-buttons">
                                                <button class="btn btn--large" style=" border-radius: 16px 0px;font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Cập nhật</button>
                                                <a data-fancybox="" data-src="#fancybox-popup" class="btn btn--large btn--outline" style="border-radius: 16px 0px; line-height: 24px;   background-color: white;border-radius: 1px solid #221f20;color: #221f20;">Đổi mật khẩu</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
        </main>
        <script src="user.js"></script>
    </body>
</html>