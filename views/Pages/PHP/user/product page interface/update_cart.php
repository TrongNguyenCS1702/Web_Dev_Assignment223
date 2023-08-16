<?php
session_start();
if (isset($_POST['id']) && isset($_POST['img']) && isset($_POST['name']) && isset($_POST['price'])    ) {
  $id = $_POST['id'];
  $img = $_POST['img'];
  $name = $_POST['name'];
  $price = $_POST['price'];
//   echo "<script>console.log(".$id.")</script>";
  if(isset($_SESSION['cart'])){
    $_SESSION['sum_qty']++;
    $_SESSION['sum_price']+=$price;
  }else{
    $_SESSION['sum_qty']=1;
    $_SESSION['sum_price']=$price;
  }
    

  if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {    
        $_SESSION['cart'][$id] = array(
            'product_id' => $id,
            'quantity' => 1,
            'name' => $name,
            'image' => $img,
            'price' => $price,
            // Các thông tin khác về sản phẩm như tên, giá cả, hình ảnh, ...
        );
    }
    
  // Lưu số lượng vào session hoặc cơ sở dữ liệu (tuỳ theo yêu cầu của bạn)
  // Ví dụ: session_start(); $_SESSION['cart_quantity'] = $quantity;
  echo count($_SESSION['cart']);
}
?>