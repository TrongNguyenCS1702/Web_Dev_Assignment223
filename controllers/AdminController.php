<?php
require_once 'models/ProductModel.php';

class AdminController
{
    //-------------------ADD PRODUCTS
    public function addProduct($name, $description, $price, $quantity, $imageUrl)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($name) || empty($price) || empty($quantity) || !is_numeric($price) || !is_numeric($quantity) || $price <= 0 || $quantity <= 0) {
            return "Invalid input.";
        }

        // Save the product to the database
        $productModel = new ProductModel();
        $result = $productModel->insertProduct($name, $description, $price, $quantity, $imageUrl);

        if ($result) {
            return "Product added successfully.";
        } else {
            return "Failed to add product. Please try again later.";
        }
    }

    //---------------------UPDATE PRODUCTS
    public function updateProduct($productId, $name, $description, $price, $quantity, $imageUrl)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($productId) || empty($name) || empty($price) || empty($quantity) || !is_numeric($productId) || !is_numeric($price) || !is_numeric($quantity) || $price <= 0 || $quantity <= 0) {
            return "Invalid input.";
        }

        // Check if the product exists in the database
        $productModel = new ProductModel();
        $product = $productModel->getProductById($productId);

        if (!$product) {
            return "Product not found.";
        }

        // Update the product information in the database
        $result = $productModel->updateProduct($productId, $name, $description, $price, $quantity, $imageUrl);

        if ($result) {
            return "Product updated successfully.";
        } else {
            return "Failed to update product. Please try again later.";
        }
    }

    //--------------ADD VOUCHER
    public function addVoucher($code, $discount, $startDate, $endDate)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($code) || empty($discount) || empty($startDate) || empty($endDate) || !is_numeric($discount) || $discount <= 0) {
            return "Invalid input.";
        }

        // Save the voucher to the database
        $voucherModel = new VoucherModel();
        $result = $voucherModel->insertVoucher($code, $discount, $startDate, $endDate);

        if ($result) {
            return "Voucher added successfully.";
        } else {
            return "Failed to add voucher. Please try again later.";
        }
    }
    //--------------UPDATE VOUCHER
    public function updateVoucher($voucherId, $code, $discount, $startDate, $endDate)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($voucherId) || empty($code) || empty($discount) || empty($startDate) || empty($endDate) || !is_numeric($voucherId) || !is_numeric($discount) || $discount <= 0) {
            return "Invalid input.";
        }

        // Check if the voucher exists in the database
        $voucherModel = new VoucherModel();
        $voucher = $voucherModel->getVoucherById($voucherId);

        if (!$voucher) {
            return "Voucher not found.";
        }

        // Update the voucher information in the database
        $result = $voucherModel->updateVoucher($voucherId, $code, $discount, $startDate, $endDate);

        if ($result) {
            return "Voucher updated successfully.";
        } else {
            return "Failed to update voucher. Please try again later.";
        }
    }

    //--------------DELETE VOUCHER
    public function deleteVoucher($voucherId)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($voucherId) || !is_numeric($voucherId)) {
            return "Invalid input.";
        }

        // Check if the voucher exists in the database
        $voucherModel = new VoucherModel();
        $voucher = $voucherModel->getVoucherById($voucherId);

        if (!$voucher) {
            return "Voucher not found.";
        }

        // Delete the voucher from the database
        $result = $voucherModel->deleteVoucher($voucherId);

        if ($result) {
            return "Voucher deleted successfully.";
        } else {
            return "Failed to delete voucher. Please try again later.";
        }
    }

    //--------------GET ALL VOUCHERS
    public function getAllVouchers()
    {
        $voucherModel = new VoucherModel();
        return $voucherModel->getAllVouchers();
    }




    public function getPurchaseHistory($userId)
    {
        $purchaseHistoryModel = new PurchaseHistoryModel();
        return $purchaseHistoryModel->getPurchaseHistoryByUserId($userId);
    }

    public function getAllProducts()
    {

    }

    public function getAdminInformationByUsername($username)
    {
        $userModel = new UserModel();
        $admin = $userModel->getUserByUsername($username);
        return $admin;
    }

}
?>