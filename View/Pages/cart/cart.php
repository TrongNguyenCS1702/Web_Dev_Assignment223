<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <link rel="stylesheet" href="cart.css">
        <title>Ivy</title>
    </head>
<body>
<?php include '../../Component/header/header.php';?>
<main id="main" class="site-main">
    <div class="container">
        <form name="frm_cart" id="frm_cart" method="post" action="" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="is_cart_page" value="1">
            <div class="cart pt-40 cart-page">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="box_product_total_cart">
                            <div class="cart__list">
                                <h2 class="cart-title">Giỏ hàng của bạn <b><span class="cart-total">1</span> Sản Phẩm</b></h2>
                                <table class="cart__table">
                                    <thead>
                                        <tr>
                                            <th>Tên Sản phẩm</th>
                                            <!-- <th>Chiết khấu</th> -->
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart__product-item">
                                                    <div class="cart__product-item__img">
                                                        <a href="https://ivymoda.com/sanpham/ao-so-mi-croptop-trang-ms-16b9485-38043"><img src="https://pubcdn.ivymoda.com/files/product/thumab/400/2023/07/06/4483277e4b1a2ec6539f5f054c0b05ef.jpg" alt="Áo sơ mi Croptop trắng"></a>
                                                    </div>
                                                    <div class="cart__product-item__content">
                                                        <a href="https://ivymoda.com/sanpham/ao-so-mi-croptop-trang-ms-16b9485-38043">
                                                            <h3 class="cart__product-item__title">
                                                                Áo sơ mi Croptop trắng
                                                            </h3>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- <td class="cart-sale-price">
                                                <p>-255.000đ</p>
                                            </td> -->
                                            <td>
                                                <div class="product-detail__quantity-input" data-product-sub-id="185422">
                                                    <input type="number" value="1" min="0" data-product-index="0">
                                                    <div class="product-detail__quantity--increase">
                                                        +
                                                    </div>
                                                    <div class="product-detail__quantity--decrease">
                                                        -
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart__product-item__price">595.000đ</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="/View/Pages/product page interface/product.php" class="btn btn--large btn--outline btn-cart-continue mb-3">
                            <span class="icon-ic_left-arrow"></span>
                            Tiếp tục mua hàng
                        </a>
                    </div>
                    <div class="col-lg-4 cart-page__col-summary">
                        <div class="cart-summary" id="cart-page-summary">
                            <div class="cart-summary__overview">
                                <h3>Tổng tiền giỏ hàng</h3>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng sản phẩm</p>
                                    <p class="total-product">1</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng tiền hàng</p>
                                    <p class="total-not-discount">850.000đ</p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Thành tiền</p>
                                    <p><b class="order-price-total">595.000đ</b></p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tạm tính</p>
                                    <p><b class="order-price-total">595.000đ</b></p>
                                </div>
                            </div>
                            <div class="cart-summary__note">
                                <div class="inner-note d-flex">
                                    <div class="left-inner-note">
                                        <span class="icon-ic_alert"></span>
                                    </div>
                                    <div class="content-inner-note">
                                        <p>Miễn <b>đổi trả</b> đối với sản phẩm đồng giá / sale trên 50%</p>
                                    </div>
                                    <div class="left-inner-note left-inner-note-shipping d-none">
                                        <span class="icon-ic_alert"></span>
                                    </div>
                                    <div class="content-inner-note content-inner-note-shipping d-none">
                                        <p>Miễn phí ship đơn hàng có tổng gía trị trên 2.000.000đ</p>
                                        <div class="sub-note">
                                            Mua thêm <strong>1.405.000đ</strong> để được miễn phí SHIP
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-summary__button">
                            <a href="/View/Pages/payment/pay.php" class="btn btn--large" id="purchase-step-1" style="padding: 12px 24px;border-radius: 16px 0px;font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Đặt hàng</a>
                        </div>
                        <div class="cart-summary__vouchers">
                        <!--            -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
    <!-- Footer-->
  <script src="cart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>