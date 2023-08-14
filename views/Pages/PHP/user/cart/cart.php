<?php

if (isset($_POST['voucher'])) {
  $voucher = $_POST['voucher'];
  $voucherMode = new VoucherModel();
  $result = $voucherMode->getVoucherBycode($voucher);
  if(isset($result)){
    $_SESSION['voucher'] = $result;
    echo true;
  }else{
    echo false;
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
        <link rel="stylesheet" href="views/Pages/PHP/user/cart/cart.css">
        <title>Ivy</title>
        <?php include 'views/Component/header/header.php';?>
    </head>
    <style>.voucher-input-container {
  display: flex;
  align-items: center;
}

#voucher-input {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 130px;
  margin-right: 10px;
}

.custom-button {
  background-color: #212529;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  width: 50px;
  display: flex;
  justify-content: center;
}
</style>
<body>

<main id="main" class="site-main">
    <div class="container">
        <form name="frm_cart" id="frm_cart" method="post" action="" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="is_cart_page" value="1">
            <div class="cart pt-40 cart-page">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="box_product_total_cart">
                            <div class="cart__list">
                                <h2 class="cart-title">Giỏ hàng của bạn <b><span class="cart-total"><?php  echo count(isset($_SESSION['cart']) ? $_SESSION['cart'] : []);?></span> Sản Phẩm</b></h2>
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
                                        <?php 
                                        if (isset($_SESSION['cart'])) {
                                            $cart = $_SESSION['cart'];
                                            foreach ($cart as $item){
                                        echo '<tr>
                                            <td>
                                                <div class="cart__product-item">
                                                    <div class="cart__product-item__img">
                                                        <a href="index.php?action=product&id='.$item['product_id'].'"><img src='.$item['image'].' alt="'.$item['name'].'"></a>
                                                    </div>
                                                    <div class="cart__product-item__content">
                                                        <a href="https://ivymoda.com/sanpham/ao-so-mi-croptop-trang-ms-16b9485-38043">
                                                            <h3 class="cart__product-item__title">
                                                            '.$item['name'].'
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
                                                    <input  type="text" value="'.$item['quantity'].'" min="1" data-product-index="0" readonly>
                                                    <button onclick="updateCart('.$item['product_id'].',';
                                                    echo "'add',".$item['price'].")"; 
                                                    echo  '" class="product-detail__quantity--increase">
                                                        +
                                                    </button>
                                                    <button onclick="updateCart('.$item['product_id'].','; 
                                                    echo "'sub',".$item['price'].")"; 
                                                    echo '" class="product-detail__quantity--decrease">
                                                        -
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="cart__product-item__price">'.number_format($item['price']*$item['quantity'], 0, '.', ',').'đ</div>
                                            </td>
                                        </tr>';
                                    }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a href="index.php?action=products&type=All" class="btn btn--large btn--outline btn-cart-continue mb-3">
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
                                    <p class="total-product"><?php echo isset($_SESSION['sum_qty']) ? $_SESSION['sum_qty'] : 0 ; ?></p>
                                </div>
                                <div class="cart-summary__overview__item">
                                    <p>Tổng tiền hàng</p>
                                    <p class="total-not-discount"><?php echo isset($_SESSION['sum_price']) ? number_format($_SESSION['sum_price'], 0, '.', ',') : 0 ; ?>đ</p>
                                </div>
                                
                                <div class="cart-summary__overview__item">
                                    <p>Tạm tính</p>
                                    <p><b class="order-price-total"><?php echo isset($_SESSION['sum_price']) ? number_format($_SESSION['sum_price'], 0, '.', ',') : 0 ;?>đ</b></p>
                                </div>
                                
                                <div class="cart-summary__overview__item">
                                    <p>Thành tiền</p>
                                    <p><b class="order-price-total"><?php echo  isset($_SESSION['sum_price']) ? number_format($_SESSION['sum_price'], 0, '.', ',') : 0 ; ?>đ</b></p>
                                </div>
                                
                                
                            </div>
                            <div class="cart-summary__note">
                                <div class="inner-note d-flex">
                                    <div class="left-inner-note">
                                        <span class="icon-ic_alert"></span>
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
                            <a href= <?php echo isset($_SESSION['sum_qty']) ? "index.php?action=pay" : "#" ?> class="btn btn--large" id="purchase-step-1" style="padding: 12px 24px;border-radius: 16px 0px;font-size: 16px;line-height: 24px;background-color: #221f20;color: #f7f8f9;border: 1px solid transparent;">Đặt hàng</a>
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
    <?php include 'views/Component/footer/footer.php';?>
  <script src="views/Pages/PHP/user/cart/cart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>