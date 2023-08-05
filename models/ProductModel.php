<?php
// models/ProductModel.php

require_once 'config/Database.php';


class ProductModel
{
    private $db;

    public function __construct()
    {
        // Create a new Database object to establish the connection
        $this->db = new Database();
    }

    // Function to insert a new product
    public function insertProduct($name, $description, $price, $quantity, $imageUrl)
    {
        $sql = "INSERT INTO Figures (name, description, price, quantity, image_url) 
                VALUES (?, ?, ?, ?, ?)";
        $params = array($name, $description, $price, $quantity, $imageUrl);
        return $this->db->execute($sql, $params);
    }

    // Function to update a product
    public function updateProduct($productId, $name, $description, $price, $quantity, $imageUrl)
    {
        $sql = "UPDATE Figures 
                SET name = ?, description = ?, price = ?, quantity = ?, image_url = ?
                WHERE id = ?";
        $params = array($name, $description, $price, $quantity, $imageUrl, $productId);
        return $this->db->execute($sql, $params);
    }

    // Function to get a product by ID
    public function getProductById($productId)
    {
        $sql = "SELECT * FROM Figures WHERE id = ?";
        $params = array($productId);
        return $this->db->fetchSingle($sql, $params);
    }
}
