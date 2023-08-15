<?php

require_once 'config/Database.php';


class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertUser($username, $password, $email,$phone,$address,$fname, $role = 'user')
    {
        $query = "INSERT INTO users (username, password, email, phone,address,fullname,role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = [$username, $password, $email,$phone,$address,$fname, $role];

        return $this->db->execute($query, $params);
    }

    public function isUsernameExists($username)
    {
        $query = "SELECT id FROM users WHERE username = ?";
        $params = [$username];

        $result = $this->db->fetchSingle($query, $params);

        return !empty($result);
    }

    public function isEmailExists($email)
    {
        $query = "SELECT id FROM users WHERE email = ?";
        $params = [$email];

        $result = $this->db->fetchSingle($query, $params);

        return !empty($result);
    }

    public function getUserByUsername($username)
    {
        $query = "SELECT * FROM users WHERE username = ?";
        $params = [$username];

        return $this->db->fetchSingle($query, $params);
    }

    public function getUserById($userId)
    {
        $query = "SELECT * FROM users WHERE id = ?";
        $params = [$userId];

        return $this->db->fetchSingle($query, $params);
    }

    public function deleteUser($userId)
    {
        $query = "DELETE FROM Users WHERE id = ?";
        $params = [$userId];

        $result = $this->db->execute($query, $params);
        if ($result) {
            return true;
        }

        return false;
    }

    public function getUserByUsernameRole($username, $role) {
        $query = "SELECT id, username, password FROM Users WHERE username = ? AND role = ? LIMIT 1";
        $params = [$username, $role];

        return $this->db->fetchSingle($query, $params);
    }

    public function getAllUsers()
    {
        $query = "SELECT id, username, email FROM Users";
        return $this->db->fetchAll($query);
    }

    public function editUser($user_id, $newUsername, $newEmail, $newPassword)
    {
        $query = "UPDATE Users SET username = ?, email = ?, password = ? WHERE id = ?";
        $params = [$newUsername, $newEmail, $newPassword, $user_id];
        return $this->db->execute($query, $params);
    }

    public function addUser($username, $email, $password, $role)
    {

        $query = "INSERT INTO Users (username, password, email, role) VALUES (?, ?, ?, ?)";
        $params = [$username, $password, $email, $role];

        $database = new Database();
        return $database->execute($query, $params);
    }
    public function updateinfo($user_id, $email, $address)
    {
        $query = "UPDATE Users SET email = ?, address = ? WHERE id = ?";
        $params = [$email, $address, $user_id];
        return $this->db->execute($query, $params);
    }
    public function changePassword($user_id,$new_password)
    {
        
        $query = "UPDATE Users SET password = ?WHERE id = ?";
        $params = [ $new_password, $user_id];
        return $this->db->execute($query, $params);
    }
}
