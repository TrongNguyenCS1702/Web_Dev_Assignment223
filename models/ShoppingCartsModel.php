<?php

require_once 'config/Database.php';

class ShoppingCartsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function deleteShoppingCartsByUserId($user_id)
    {
        $query = "DELETE FROM ShoppingCarts WHERE user_id = ?";
        $params = [$user_id];
        return $this->db->execute($query, $params);
    }
}
