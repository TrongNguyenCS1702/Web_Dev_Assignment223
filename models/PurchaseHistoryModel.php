<?php
// models/PurchaseHistoryModel.php

require_once 'config/Database.php';

class PurchaseHistoryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function deletePurchaseHistoryByUserId($user_id)
    {
        $query = "DELETE FROM PurchaseHistory WHERE user_id = ?";
        $params = [$user_id];
        return $this->db->execute($query, $params);
    }
}
