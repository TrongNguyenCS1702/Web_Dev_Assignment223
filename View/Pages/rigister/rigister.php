
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="/View/Pages/rigister/rigister.css">
        <title>Document</title>
    </head>
<body>
<?php include '../../Component/header/header.php';?>

    <div class="container">
        <div class="order-block__title justify-content-center pt-4 pb-2">
            <h3 class="text-uppercase">Đăng ký</h3>
        </div>
        <div class="auth auth-forgotpass">
            <form enctype="application/x-www-form-urlencoded" name="frm_register" method="post" action="">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="register-summary__overview">
                            <h4>Thông tin khách hàng</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Họ:<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" value="" name="customer_firstname" placeholder="Họ..." style="width: 100%">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Tên:<span style="color: red">*</span></label>
                                    <input class="form-control" type="text" value="" name="customer_display_name" placeholder="Tên..." style="width: 100%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Email:<span style="color: red">*</span></label>
                                    <input id="email" class="form-control" type="email" name="customer_email" value="" placeholder="Email..." style="width: 100%">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Điện thoại:<span style="color: red">*</span></label>
                                    <input class="form-control" type="text" value="" name="customer_phone" placeholder="Điện thoại..." style="width: 100%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Ngày sinh:<span style="color: red">*</span></label>
                                    <input type="text" class="form-control datepicker hasDatepicker" name="customer_birthday" value="" placeholder="Ngày sinh..." style="width: 100%" id="dp1691909084288">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Giới tính:<span style="color: red">*</span></label>
                                    <select name="customer_sex" style="width: 100%" class="form-control">
                                        <option value="0">Nữ</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Khác</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Tỉnh/TP:<span style="color: red">*</span></label>
                                    <select class="form-control" name="register_region_id" id="register_region_id" style="width: 100%">
                                        <option value="-1">Chọn Tỉnh/Tp</option>
                                        <option value="511">Hà Nội</option>
                                        <option value="507">Hồ Chí Minh</option>
                                        <option value="512">Hải Phòng</option>
                                        <option value="499">Đà Nẵng</option>
                                        <option value="485">An Giang</option>
                                        <option value="486">Bình Dương</option>
                                        <option value="487">Bắc Giang</option>
                                        <option value="488">Bình Định</option>
                                        <option value="490">Bạc Liêu</option>
                                        <option value="491">Bắc Ninh</option>
                                        <option value="492">Bình Phước</option>
                                        <option value="494">Bình Thuận</option>
                                        <option value="495">Bến Tre</option>
                                        <option value="496">Cao Bằng</option>
                                        <option value="497">Cà Mau</option>
                                        <option value="498">Cần Thơ</option>
                                        <option value="500">Điện Biên</option>
                                        <option value="502">Đồng Nai</option>
                                        <option value="504">Đồng Tháp</option>
                                        <option value="505">Gia Lai</option>
                                        <option value="506">Hòa Bình</option>
                                        <option value="508">Hải Dương</option>
                                        <option value="509">Hà Giang</option>
                                        <option value="510">Hà Nam</option>
                                        <option value="513">Hà Tĩnh</option>
                                        <option value="514">Hậu Giang</option>
                                        <option value="515">Hưng Yên</option>
                                        <option value="516">Kiên Giang</option>
                                        <option value="517">Khánh Hòa</option>
                                        <option value="518">Kon Tum</option>
                                        <option value="519">Long An</option>
                                        <option value="520">Lâm Đồng</option>
                                        <option value="521">Lai Châu</option>
                                        <option value="522">Lào Cai</option>
                                        <option value="523">Lạng Sơn</option>
                                        <option value="524">Nghệ An</option>
                                        <option value="525">Ninh Bình</option>
                                        <option value="526">Nam Định</option>
                                        <option value="527">Ninh Thuận</option>
                                        <option value="528">Phú Thọ</option>
                                        <option value="529">Phú Yên</option>
                                        <option value="530">Quảng Bình</option>
                                        <option value="531">Quảng Ngãi</option>
                                        <option value="532">Quảng Nam</option>
                                        <option value="533">Quảng Ninh</option>
                                        <option value="534">Quảng Trị</option>
                                        <option value="535">Sơn La</option>
                                        <option value="536">Sóc Trăng</option>
                                        <option value="537">Thái Bình</option>
                                        <option value="538">Tiền Giang</option>
                                        <option value="539">Thanh Hóa</option>
                                        <option value="540">Tây Ninh</option>
                                        <option value="541">Tuyên Quang</option>
                                        <option value="543">Trà Vinh</option>
                                        <option value="544">Thái Nguyên</option>
                                        <option value="545">Vĩnh Long</option>
                                        <option value="546">Vĩnh Phúc</option>
                                        <option value="547">Yên Bái</option>
                                        <option value="548">Đắk Nông</option>
                                        <option value="549">Bắc Kạn</option>
                                        <option value="550">Thừa Thiên - Huế</option>
                                        <option value="551">Đắk Lắk</option>
                                        <option value="552">Bà Rịa - Vũng Tàu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Quận/Huyện:<span style="color: red">*</span></label>
                                    <select name="register_city_id" id="register_city_id" style="width: 100%" class="form-control">
                                        <option value="-1">Chọn Quận/Huyện</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Phường/Xã:<span style="color: red">*</span></label>
                                    <select name="vnward_id" id="vnward_id" style="width: 100%" class="form-control">
                                        <option value="-1">Chọn Phường/Xã</option>
                                    </select>
                                </div>
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
                                    <input class="form-control" type="password" value="" name="customer_pass1" placeholder="Mật khẩu...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu:<span style="color: red">*</span></label>
                                    <input class="form-control" type="password" value="" name="customer_pass2" placeholder="Nhập lại mật khẩu...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-check">
                                    <input class="form-check-input checkboxs" type="checkbox" name="customer_agree" value="1" id="defaultCheck1">
                                    <label style="margin-top: 4px;margin-left: 3px;" class="form-check-label" for="defaultCheck1">
                                        <span> Đồng ý với các <a style="color: #f31f1f" href="https://ivymoda.com/about/chinh-sach-bao-hanh">điều khoản</a> của IVY </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button id="bnt_register" class="btn btn--large" type="submit" style="width: 100%;margin-top: 15px;border: 0;    display: flex;    justify-content: center;    align-items: center;    cursor: pointer;padding: 12px 24px;    border-radius: 16px 0px;    font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer>
            <div class="main-footer d-flex">
            <div class="left-footer">
                        <div class="top-left">
                            <div class="logo-footer">
                                <a href="https://ivymoda.com/">
                                    <img src="https://pubcdn.ivymoda.com/ivy2/images/logo-footer.png" alt="logo-footer">
                                </a>
                            </div>
                            <a href="https://www.dmca.com/Protection/Status.aspx?ID=0cfdeac4-6e7f-4fca-941f-57a0a0962777&amp;refurl=https://ivymoda.com/" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                                <img src="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=0cfdeac4-6e7f-4fca-941f-57a0a0962777" alt="DMCA.com Protection Status">
                            </a>
                            <div class="logo-conthuong">
                                <a target="_blank" href="http://online.gov.vn/Home/WebDetails/36596">
                                    <img src="https://pubcdn.ivymoda.com/ivy2/images/img-congthuong.png" alt="img-congthuong">
                                </a>
                            </div>
                        </div>
                        <div class="content-left-ft content-ft">
                            <div class="info-left-ft">
                                <p>Công ty Cổ phần Dự Kim với số đăng ký kinh doanh: 0105777650</p>						<p><strong>Địa chỉ đăng ký: </strong>Tổ dân phố Tháp, P.Đại Mỗ, Q.Nam Từ Liêm, TP.Hà Nội, Việt Nam</p>						<p><strong>Số điện thoại: </strong>0243 205 2222/ 090 589 8683</p>						<p><strong>Email: </strong> cskh@ivy.com.vn</p>					</div>
                            <ul class="list-social">
                                <li>
                                    <a href="https://www.facebook.com/thoitrangivymoda/" target="_blank">
                                        <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_fb.svg" alt="ic_fb">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ivymoda.com/" target="_blank">
                                        <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_gg.svg" alt="ic_gg">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/ivy_moda/" target="_blank">
                                        <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_instagram.svg" alt="ic_instagram" style="height: 30px;">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/ivymoda/_saved/" target="_blank">
                                        <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_pinterest.svg" alt="ic_pinterest" style="height: 27px">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/user/thoitrangivymoda" target="_blank">
                                        <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_ytb.svg" alt="ic_ytb">
                                    </a>
                                </li>
                            </ul>
                            <div class="hotline">
                                <a href="tel:02466623434">Hotline: 0246 662 3434</a>
                            </div>
                        </div>
                    </div>
            <div class="center-footer d-flex">
                <div class="left-center-ft item-center-ft">
                <p class="title-footer">Giới thiệu</p>
                            <ul>
                    <li>
                    <a href="https://ivymoda.com/about/gioi-thieu">Về IVY moda</a>
                                </li>
                                <li>
                    <a target="_blank" href="https://tuyendung.ivy.com.vn">Tuyển dụng</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/page/cuahang">Hệ thống cửa hàng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-center-ft item-center-ft">
                <p class="title-footer">Dịch vụ khách hàng</p>
                            <ul>
                                <li>
                                    <a href="https://ivymoda.com/about/chinhsach-dieukhoan">Chính sách điều khoản</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/huong-dan-mua-hang">Hướng dẫn mua hàng</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/chinh-sach-thanh-toan">Chính sách thanh toán</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/chinh-sach-doi-tra">Chính sách đổi trả</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/chinh-sach-bao-hanh">Chính sách bảo hành</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/chinh-sach-giao-nhan-van-chuyen">Chính sách giao nhận vận chuyển</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/chinh-sach-the-thanh-vien">Chính sách thẻ thành viên</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/page/cuahang">Hệ thống cửa hàng</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/about/qa">Q&amp;A</a>
                                </li>
                            </ul>
                        </div>
                        <div class="right-center-ft item-center-ft">
                <p class="title-footer">Liên hệ</p>
                            <ul>
                    <li>
                    <a href="tel:02466623434">Hotline</a>
                                </li>
                                <li>
                    <a href="mailto:saleadmin@ivy.com.vn">Email</a>
                                </li>
                                <li>
                    <a href="javascript:openCsChatBox();">Live Chat</a>
                                </li>
                                <li>
                    <a href="http://messenger.com/t/thoitrangivymoda" target="_blank">Messenger</a>
                                </li>
                                <li>
                    <a href="https://ivymoda.com/lien-he">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            <div class="right-footer">
                <div class="register-form">
                <p class="title-footer">Nhận thông tin các chương trình của IVY moda</p>
                            <form id="frm_subscribe">
                    <input id="email_subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required" style="border: 0;
            border-bottom: 1px solid #BCBDC0;">
                                <div class="btn-submit">
                                    <input id="btn-submit" class="form-submit" value="Đăng ký" type="submit">
                                </div>
                            </form>
                        </div>
                        <div class="info-right-ft">
                <p class="title-footer">Download App</p>
                            <ul>
                    <li>
                    <a id="app_ios" href="http://ios.ivy.vn" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" class="img-fluid" alt=""> </a>
                                </li>
                                <li>
                    <a id="app_android" href="http://android.ivy.vn" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" class="img-fluid" alt=""> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </footer>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>