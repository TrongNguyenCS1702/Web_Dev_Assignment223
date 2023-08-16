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
    public function insertProduct($id, $name, $description, $price, $quantity, $figure_id, $image_url)
    {
        $sql = "INSERT INTO products (id, name, description, price, quantity, figure_id, image_url) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = array($id, $name, $description, $price, $quantity, $figure_id, $image_url);
        return $this->db->execute($sql, $params);
    }


    public function getAllProducts()
    {
        $query = "SELECT p.*, t.type_name, c.category_name
                  FROM products p
                  JOIN figure f ON p.figure_id = f.figure_id
                  JOIN type t ON f.type_id = t.type_id
                  JOIN category c ON f.category_id = c.category_id";
    
        return $this->db->fetchAll($query);
    }

    public function getProductById($product_id)
    {
        $query = "SELECT p.*, f.figure_id
                  FROM products p
                  JOIN figure f ON p.figure_id = f.figure_id
                  WHERE p.id = ?";
        $product = $this->db->fetchSingle($query, [$product_id]);
        return $product;
    }

    public function editProduct($product_id, $name, $description, $price, $quantity, $figure_id, $image_url)
    {
        $sql = "UPDATE products SET name = ?, description = ?, price = ?, quantity = ?, figure_id = ?, image_url = ? WHERE id = ?";
        $params = array($name, $description, $price, $quantity, $figure_id, $image_url, $product_id);
        return $this->db->execute($sql, $params);
    }

    public function deleteProduct($product_id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $params = array($product_id);
        return $this->db->execute($sql, $params);
    }

    public function getProductsByFilters($typeId, $categoryId)
    {
        $query = "SELECT * FROM products p
                JOIN figure f ON p.figure_id = f.figure_id
                WHERE (? = '' OR f.type_id = ?)
                AND (? = '' OR f.category_id = ?)";
        $params = [$typeId, $typeId, $categoryId, $categoryId]; 

        return $this->db->fetchAll($query, $params);
    }


}
