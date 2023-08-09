<?php
require_once 'models/ProductModel.php';
require_once 'models/UserModel.php';
require_once 'models/PurchaseHistoryModel.php';
require_once 'models/OrderModel.php';
require_once 'models/OrderItemsModel.php';
require_once 'models/ShoppingCartsModel.php';
require_once 'models/ShoppingCartItemsModel.php';

class AdminController
{

    //--------------ADD VOUCHER
    public function addVoucher($code, $discount, $startDate, $endDate)
    {
        $voucherModel = new VoucherModel();
        return $voucherModel->addVoucher($code, $discount, $startDate, $endDate);
    }

    //--------------DELETE VOUCHER
    public function deleteVoucher($voucher_id)
    {
        $voucherModel = new VoucherModel();
        return $voucherModel->deleteVoucher($voucher_id);
    }

    //--------------GET ALL VOUCHERS
    public function getAllVouchers()
    {
        $vouchersModel = new VoucherModel();
        return $vouchersModel->getAllVouchers();
    }

    public function getVoucherById($voucher_id)
    {
        $voucherModel = new VoucherModel();
        return $voucherModel->getVoucherById($voucher_id);
    }

    public function editVoucher($voucher_id, $newCode, $newDiscount, $newStartDate, $newEndDate)
{
    $voucherModel = new VoucherModel();
    return $voucherModel->editVoucher($voucher_id, $newCode, $newDiscount, $newStartDate, $newEndDate);
}

    public function getPurchaseHistory()
    {
        //TODO
    }

    public function getAllProducts()
    {
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();
        return $products;
    }

    public function getProductById($product_id)
{
    $productModel = new ProductModel();
    $product = $productModel->getProductById($product_id);
    return $product;
}

public function editProduct($product_id, $name, $description, $price, $quantity, $image_url)
{
    $productModel = new ProductModel();
    $update_result = $productModel->updateProduct($product_id, $name, $description, $price, $quantity, $image_url);
    return $update_result;
}

public function deleteProduct($product_id)
{
    $productModel = new ProductModel();
    $delete_result = $productModel->deleteProduct($product_id);
    return $delete_result;
}

    public function getAdminInformationByUsername($username)
    {
        $userModel = new UserModel();
        $admin = $userModel->getUserByUsername($username);
        return $admin;
    }

    public function adminLogin($username, $password) {
        $userModel = new UserModel(); // Create an instance of the UserModel

        // Validate username and password
        if (empty($username) || empty($password)) {
            return "Username and password are required.";
        }

        // Authenticate admin user
        $admin = $userModel->getUserByUsernameRole($username, 'admin'); // Implement this method in UserModel
        if ($admin && ($password == $admin['password'])) {
            return true; // Admin login successful
        } else {
            return "Invalid username or password.";
        }
    }

    public function getAllUsers()
    {

        $userModel = new UserModel();
        $users = $userModel->getAllUsers();

        return $users;
    }

    public function getUserById($user_id)
    {

        $userModel = new UserModel(); 
        $user = $userModel->getUserById($user_id); 
        return $user;
    }

    public function deleteUser($user_id)
    {
        $userModel = new UserModel();
        
        // Check if the user exists
        $user = $userModel->getUserById($user_id);
        if (!$user) {
            return false; // User not found
        }
        
        $orderItemsModel = new OrderItemsModel();
        $deleteOrderItems = $orderItemsModel->deleteOrderItemsByUserId($user_id);
    
        $purchaseHistoryModel = new PurchaseHistoryModel();
        $deletePurchaseHistory = $purchaseHistoryModel->deletePurchaseHistoryByUserId($user_id);
    
        $orderModel = new OrderModel();
        $deleteOrders = $orderModel->deleteOrdersByUserId($user_id);
    
        $shoppingCartItemsModel = new ShoppingCartItemsModel();
        $deleteShoppingCartItems = $shoppingCartItemsModel->deleteShoppingCartItemsByUserId($user_id);
    
        $shoppingCartsModel = new ShoppingCartsModel();
        $deleteShoppingCarts = $shoppingCartsModel->deleteShoppingCartsByUserId($user_id);
    
        // Now delete the user from the Users table
        $deleteUser = $userModel->deleteUser($user_id);
        
        return $deleteUser;
    }


    public function editUser($user_id, $newUsername, $newEmail, $newPassword)
    {
        // Delete the user based on the user ID
        $userModel = new UserModel(); // Create an instance of UserModel
        $update_result = $userModel->editUser($user_id, $newUsername, $newEmail, $newPassword); // Implement this method in your UserModel
        return $update_result;
    }
    
    public function addUser($username, $email, $password, $role)
    {
        $userModel = new UserModel();
        return $userModel->addUser($username, $email, $password, $role);
    }

    public function getAllOrders()
{
    $orderModel = new OrderModel();
    return $orderModel->getAllOrders();
}

public function getOrderById($order_id)
{
    $orderModel = new OrderModel();
    return $orderModel->getOrderById($order_id);
}

public function getOrderItemsByOrderId($order_id)
{
    $orderItemModel = new OrderItemsModel();
    return $orderItemModel->getOrderItemsByOrderId($order_id);
}
}
?>