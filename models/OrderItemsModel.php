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
}
