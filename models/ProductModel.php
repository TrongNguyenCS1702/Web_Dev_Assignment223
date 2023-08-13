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

    public function getProductByType($type){
        $query = "SELECT * FROM `products` p INNER JOIN `figure` b ON p.figure_id = b.figure_id INNER JOIN `type` c ON b.type_id = c.type_id WHERE c.type_name = ?";
        $product = $this->db->fetchAll($query, [$type]);
        return $product;
    }
    public function getProductByTypeCategory($type,$category){
        $query = "SELECT * FROM `products` p INNER JOIN `figure` b ON p.figure_id = b.figure_id INNER JOIN `type` c ON b.type_id = c.type_id  INNER JOIN `category` d ON d.category_id = b.category_id WHERE c.type_name = ? And d.category_name = ?";
        $product = $this->db->fetchAll($query, [$type,$category]);
        return $product;
    }
    public function getProductByTypeFigure($type,$figure){
        $query = "SELECT * FROM `products` p INNER JOIN `figure` b ON p.figure_id = b.figure_id INNER JOIN `type` c ON b.type_id = c.type_id WHERE c.type_name = ? and b.figure_name = ?";
        $product = $this->db->fetchAll($query, [$type,$figure]);
        return $product;
    }

    public function getProductById($product_id)
    {
        $query = "SELECT * FROM products WHERE id = ?";
        $product = $this->db->fetchSingle($query, [$product_id]);
        return $product;
    }
    public function getProductByCategory($category)
    {
        $query = "SELECT * FROM `products` p INNER JOIN `figure` b ON p.figure_id = b.figure_id INNER JOIN `category` c ON b.category_id = c.category_id WHERE c.category_name = ?";
        $product = $this->db->fetchAll($query, [$category]);
        return $product;
    }
    public function getProductByFigure($figure)
    {
        $query = "SELECT * FROM `products` p INNER JOIN `figure` b ON p.figure_id = b.figure_id WHERE b.figure_name = ?";
        $product = $this->db->fetchAll($query, [$figure]);
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
