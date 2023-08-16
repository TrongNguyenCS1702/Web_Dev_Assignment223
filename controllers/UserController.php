<?php
require_once 'models/UserModel.php';

class UserController
{
    //---------------------REGISTER
    public function registerUser($username, $password, $email,$phone,$address,$fname)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($username) || empty($password) || empty($email)|| empty($phone) || empty($address)|| empty($fname) ) {
            return "Please fill in all the required fields.";
        }

        // Check if the username or email already exists in the database
        $userModel = new UserModel();
        if ($userModel->isUsernameExists($username)) {
            return "Username already exists. Please choose a different one.";
        }

        if ($userModel->isEmailExists($email)) {
            return "Email already exists. Please use a different email address.";
        }

        // Hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Save the user data to the database
        $result = $userModel->insertUser($username, $hashedPassword, $email,$phone,$address,$fname);

        if ($result) {
            return "User registered successfully.";
        } else {
            return "Failed to register user. Please try again later.";
        }
    }
    
    //-------------------------LOGIN
    public function loginUser($username, $password)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($username) || empty($password)) {
            return "Vui lòng điền tài khoản và mật khẩu.";
        }

        // Retrieve the user data from the database
        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        // Check if the user exists
        if (!$user) {
            return "Tài khoản hoặc mật khẩu không chính xác.";
        }

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, store user information in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            return "Đăng nhập thành công.";
        } else {
            return "Mật khẩu không chính xác.";
        }
    }
    
    public function getAllProducts()
    {
        //TODO
    }

    public function getShoppingCartItems()
    {
        //TODO
    }

    public function getOrderHistory()
    {
        //TODO
    }
    public function getProfile($user_id){
        $userMode = new UserModel();
        return $userMode->getUserById($user_id);
    }
    public function updateInfo($user_id,$email, $address){
        $userMode = new UserModel();
        return $userMode->updateInfo($user_id,$email, $address);
    }
    public function changePassword($user_id,$old_password,$new_password){
        $userMode = new UserModel();
        $user = $userMode->getUserById($user_id);
        if (password_verify($old_password, $user['password'])) {
            $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);
            $userMode->changePassword($user_id,$hashedPassword);
            return "Thay đổi mật khẩu thành công.";
        } else {
            return "Mật khẩu cũ không chính xác.";
        }
    }
    public function getVoucherBycode($voucher){
        $voucherModel = new VoucherModel();
        return  $voucherModel->getVoucherBycode($voucher);
        
    }
    public function getProductByType($type, $price){
        $productModel = new ProductModel();
        return  $productModel->getProductByType($type, $price);
        
    }
    public function getProductByTypeCategory($type, $category, $price){
        $productModel = new ProductModel();
        return  $productModel->getProductByTypeCategory($type, $category, $price);
        
    }
    public function getProductByTypeFigure($type, $figure, $price){
        $productModel = new ProductModel();
        return  $productModel->getProductByTypeFigure($type, $figure, $price);
        
    }
    public function createOrder($user_id, $voucherCode = null){
        $orderMode = new OrderModel();
        return  $orderMode->createOrder($user_id, $voucherCode);
        
    }
    public function addOrderItem($order_id,$user_id, $voucher_code){
        $orderItemMode = new OrderItemsModel();
        return  $orderItemMode->addOrderItem($order_id,$user_id, $voucher_code);
    }
    public function getProductById($id){
        $productModel = new ProductModel();
        return $productModel->getProductById($id);
       
    }
    public function getProductByFigure($figure_id){
        $productModel = new ProductModel();
        return $productModel->getProductByFigure($figure_id);
    }
    public function getProductByName($name,$price){
        $productModel = new ProductModel();
        return $productModel->getProductByName($name,$price);
    }
  
}
?>