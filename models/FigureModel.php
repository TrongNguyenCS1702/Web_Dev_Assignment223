<?php

require_once 'config/Database.php';

class FigureModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getAllFigures()
    {
        $query = "SELECT * FROM figure";
        return $this->db->fetchAll($query);
    }
}
