<?php

require_once 'config/Database.php';

class TypeModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllTypes()
    {
        $query = "SELECT * FROM type";
        return $this->db->fetchAll($query);
    }

}
