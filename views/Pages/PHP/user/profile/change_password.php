<?php 

if (isset($_POST['old_password']) && isset($_POST['new_password'])){
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    echo $userController->changePassword($_SESSION['user_id'],$old_password,$new_password);

}else{
    echo "Thay đổi mật khẩu không thành công";
}

?>