<?php 

if (isset($_POST['email']) && isset($_POST['address'])){
    $email = $_POST['email'];
    $address = $_POST['address'];
    $userController->updateInfo($_SESSION['user_id'],$email,$address);
    echo "Cập nhật thông tin thành công";
}else{
    echo "Cập nhật thông tin không thành công";
}

?>