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

    public function getAllProducts()
    {
        $query = "SELECT * FROM Figures";
        $products = $this->db->fetchAll($query);
        return $products;
    }

    public function getProductById($product_id)
    {
        $query = "SELECT * FROM Figures WHERE id = ?";
        $product = $this->db->fetchSingle($query, [$product_id]);
        return $product;
    }

    public function updateProduct($product_id, $name, $description, $price, $quantity, $image_url)
    {
        $query = "UPDATE Figures SET name = ?, description = ?, price = ?, quantity = ?, image_url = ? WHERE id = ?";
        $params = [$name, $description, $price, $quantity, $image_url, $product_id];
        return $this->db->execute($query, $params);
    }

    public function deleteProduct($product_id)
{
    // Delete the product from the Figures table
    $query = "DELETE FROM Figures WHERE id = ?";
    return $this->db->execute($query, [$product_id]);
}
}
