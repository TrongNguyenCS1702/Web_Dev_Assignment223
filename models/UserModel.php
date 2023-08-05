<?php

require_once 'config/Database.php';


class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertUser($username, $password, $email, $role = 'user')
    {
        $query = "INSERT INTO Users (username, password, email, role) VALUES (?, ?, ?, ?)";
        $params = [$username, $password, $email, $role];

        return $this->db->execute($query, $params);
    }

    public function isUsernameExists($username)
    {
        $query = "SELECT id FROM Users WHERE username = ?";
        $params = [$username];

        $result = $this->db->fetchSingle($query, $params);

        return !empty($result);
    }

    public function isEmailExists($email)
    {
        $query = "SELECT id FROM Users WHERE email = ?";
        $params = [$email];

        $result = $this->db->fetchSingle($query, $params);

        return !empty($result);
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM Users WHERE username = ?";
        $params = [$username];

        return $this->db->fetchSingle($query, $params);
    }

    public function getUserById($userId)
    {
        $query = "SELECT * FROM Users WHERE id = ?";
        $params = [$userId];

        return $this->db->fetchSingle($query, $params);
    }
}
