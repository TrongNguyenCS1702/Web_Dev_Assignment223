<?php 

$base_url = "http://localhost/Web_Dev_Assignment223";
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['role']);
unset($_SESSION['cart']);
unset($_SESSION['sum_qty']);
unset($_SESSION['sum_price']);
unset($_SESSION['voucher']);
session_destroy();
header("Location: {$base_url}/index.php?action=user_homepage");
exit;
?>