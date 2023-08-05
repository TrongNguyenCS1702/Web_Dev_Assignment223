<?php

require_once 'config/Database.php';

class OrderModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function createOrder($userId, $voucherCode = null)
    {
        $query = "INSERT INTO Orders (user_id, voucher_code) VALUES (?, ?)";
        $params = [$userId, $voucherCode];

        if ($this->db->execute($query, $params)) {
            return $this->db->getLastInsertId();
        } else {
            return false;
        }
    }

    public function addOrderItem($orderId, $productId, $quantity)
    {
        $query = "INSERT INTO OrderItems (order_id, figure_id, quantity) VALUES (?, ?, ?)";
        $params = [$orderId, $productId, $quantity];

        return $this->db->execute($query, $params);
    }

    public function getOrdersByUserId($userId)
    {
        $query = "SELECT * FROM Orders WHERE user_id = ?";
        $params = [$userId];

        return $this->db->fetchAll($query, $params);
    }

    // You can implement other order-related methods as needed
}
