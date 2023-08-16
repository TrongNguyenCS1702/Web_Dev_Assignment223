<?php
require_once 'models/ProductModel.php';
require_once 'models/UserModel.php';
require_once 'models/PurchaseHistoryModel.php';
require_once 'models/OrderModel.php';
require_once 'models/OrderItemsModel.php';
require_once 'models/TypeModel.php';
require_once 'models/CategoryModel.php';
require_once 'models/FigureModel.php';
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

public function editProduct($product_id, $name, $description, $price, $quantity, $figure_id, $image_url)
{
    $productModel = new ProductModel();
    return $productModel->editProduct($product_id, $name, $description, $price, $quantity, $figure_id, $image_url);
}

public function deleteProduct($product_id)
{
    $productModel = new ProductModel();
    return $productModel->deleteProduct($product_id);
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
        return $userModel->deleteUser($user_id);
    }
    


    public function editUser($user_id, $newUsername, $newEmail, $newPassword, $newFullname, $newAddress, $newPhone)
    {
        $userModel = new UserModel(); // Create an instance of UserModel
        $update_result = $userModel->editUser($user_id, $newUsername, $newEmail, $newPassword, $newFullname, $newAddress, $newPhone); // Implement this method in your UserModel
        return $update_result;
    }
    
    public function addUser($username, $email, $password, $role, $fullname, $address, $phone)
    {
        $userModel = new UserModel();
        return $userModel->addUser($username, $email, $password, $role, $fullname, $address, $phone);
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

public function getProductsByFilters()
{
    $productModel = new ProductModel();

    $typeId = isset($_GET['typeFilter']) ? $_GET['typeFilter'] : '';
    $categoryId = isset($_GET['categoryFilter']) ? $_GET['categoryFilter'] : '';

    return $productModel->getProductsByFilters($typeId, $categoryId);
}

public function addProduct($id, $name, $description, $price, $quantity, $figure_id, $image_url)
{
    $productModel = new ProductModel();
    return $productModel->insertProduct($id, $name, $description, $price, $quantity, $figure_id, $image_url);
}

public function getAllCategories()
{
    $categoryModel = new CategoryModel();
    return $categoryModel->getAllCategories();
}

public function getAllTypes()
{
    $typeModel = new TypeModel();
    return $typeModel->getAllTypes();
}

public function getAllFigures()
{
    $figureModel = new FigureModel();
    return $figureModel->getAllFigures();
}
}
?>