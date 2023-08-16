<?php

require_once 'config/Database.php';

class OrderItemsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function deleteOrderItemsByUserId($user_id)
    {
        $query = "DELETE FROM OrderItems WHERE order_id IN (SELECT id FROM Orders WHERE user_id = ?)";
        
        $params = [$user_id];

        return $this->db->execute($query, $params);
    }

    public function getOrderItemsByOrderId($order_id)
    {
        $query = "SELECT * FROM OrderItems WHERE order_id = ?";
        return $this->db->fetchAll($query, [$order_id]);
    }
    public function addOrderItem($orderId, $productId, $quantity)
    {
        $query = "INSERT INTO OrderItems (order_id, product_id, quantity) VALUES (?, ?, ?)";
        $params = [$orderId, $productId, $quantity];

        return $this->db->execute($query, $params);
    }
}
