<?php

class Database
{
    private $host = 'localhost';
    private $username = 'root'; 
    private $password = ''; 
    private $dbName = 'd'; //Remember to change DB name in localhost to this name.

    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function execute($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Error in query preparation: " . $this->conn->error);
        }

        if (!empty($params)) {
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }

        if (!$stmt->execute()) {
            die("Error in query execution: " . $stmt->error);
        }

        return true;
    }

    public function fetchAll($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Error in query preparation: " . $this->conn->error);
        }

        if (!empty($params)) {
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }

        if (!$stmt->execute()) {
            die("Error in query execution: " . $stmt->error);
        }

        $result = $stmt->get_result();

        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function fetchSingle($query, $params = [])
    {
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Error in query preparation: " . $this->conn->error);
        }

        if (!empty($params)) {
            $stmt->bind_param(str_repeat('s', count($params)), ...$params);
        }

        if (!$stmt->execute()) {
            die("Error in query execution: " . $stmt->error);
        }

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function getLastInsertId()
    {
        return $this->conn->insert_id;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
