<?php

require_once 'config/Database.php';

class CategoryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getAllCategories()
    {
        $query = "SELECT * FROM category";
        return $this->db->fetchAll($query);
    }
}
