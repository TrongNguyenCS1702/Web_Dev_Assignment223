<?php
session_start();
if (isset($_POST['id']) && isset($_POST['type']) && isset($_POST['price']) ) {
  $id = $_POST['id'];
  $type = $_POST['type'];
  $price = $_POST['price'];
  if(isset($_SESSION['cart'][$id])) {

    if($type == "add"){
        $_SESSION['cart'][$id]['quantity']++;
        $_SESSION['sum_qty']+=1;
        $_SESSION['sum_price']+=$price;
        echo  $_SESSION['cart'][$id]['quantity'];
    } 
    else {    
        $_SESSION['cart'][$id]['quantity']--;
        $_SESSION['sum_qty']-=1;
        $_SESSION['sum_price']-=$price;
        if ($_SESSION['cart'][$id]['quantity']==0)
            unset($_SESSION['cart'][$id]);
        if ( $_SESSION['sum_qty']==0)
        unset( $_SESSION['sum_qty']);
         echo  $_SESSION['cart'][$id]['quantity'];
    }
  }
}
?>