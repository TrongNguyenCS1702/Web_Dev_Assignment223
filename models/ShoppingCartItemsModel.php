<?php

require_once 'config/Database.php';

class ShoppingCartItemsModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function deleteShoppingCartItemsByUserId($user_id)
    {
        $query = "DELETE FROM ShoppingCartItems WHERE cart_id IN (SELECT id FROM ShoppingCarts WHERE user_id = ?)";
        $params = [$user_id];
        return $this->db->execute($query, $params);
    }
}
