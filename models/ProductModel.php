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
    public function insertProduct($name, $description, $price,  $quantity,$figure_id, $imageUrl)
    {
        $sql = "INSERT INTO product (name, description, price, quantity,figure_id, image_url) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $params = array($name, $description, $price, $quantity, $imageUrl);
        return $this->db->execute($sql, $params);
    }

    public function getAllProducts()
    {
        $query = "SELECT * FROM products";
        $products = $this->db->fetchAll($query);
        return $products;
    }

    public function getProductByType($type){
        
        if ($type =="All"){
            $query = "SELECT * FROM `products` ";
            $product = $this->db->fetchAll($query,[]);
            return $product;
        }else{
            $query =  "SELECT * FROM `products` p INNER JOIN `figure` b ON p.figure_id = b.figure_id INNER JOIN `type` c ON b.type_id = c.type_id WHERE c.type_name = ?";
            $product = $this->db->fetchAll($query, [$type]);
            return $product;
        }
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
    public function getProductByFigure($figure_id)
    {
        $query = "SELECT * FROM `products` WHERE figure_id = ? LIMIT 4";
        $product = $this->db->fetchAll($query, [$figure_id]);
        return $product;
    }

    public function updateProduct($product_id, $name, $description, $price, $quantity, $image_url)
    {
        $query = "UPDATE products SET name = ?, description = ?, price = ?, quantity = ?, image_url = ? WHERE id = ?";
        $params = [$name, $description, $price, $quantity, $image_url, $product_id];
        return $this->db->execute($query, $params);
    }

    public function deleteProduct($product_id)
{
    // Delete the product from the Figures table
    $query = "DELETE FROM products WHERE id = ?";
    return $this->db->execute($query, [$product_id]);
}
}
