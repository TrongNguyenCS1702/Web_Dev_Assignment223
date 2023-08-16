<?php
$base_url = "http://localhost/Web_Dev_Assignment223";

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    if (isset($_SESSION['voucher'])) {
        $voucher_code =$_SESSION['voucher']['code'];
        $r_order = $userController->createOrder($_SESSION['user_id'], $voucher_code);
        if ($r_order != false) {
            foreach ($_SESSION['cart'] as $cart) {
                if(isset($cart['product_id']))
                  $userController->addOrderItem($r_order, $cart['product_id'], $cart['quantity']);
            }
          }
    }
    else{
        $r_order1 = $userController->createOrder($_SESSION['user_id']);
        echo $r_order1;
            if ($r_order1 != false) {
                foreach ($_SESSION['cart'] as $cart) {
                  if(isset($cart['product_id']))
                     $userController->addOrderItem($r_order1, $cart['product_id'], $cart['quantity']);
                }
            }
    }

    unset($_SESSION['cart']);
    unset($_SESSION['sum_qty']);
    unset($_SESSION['sum_price']);
    unset($_SESSION['voucher']);
    echo true;
}
?>