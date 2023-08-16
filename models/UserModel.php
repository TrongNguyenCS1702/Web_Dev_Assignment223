<?php

require_once 'config/Database.php';

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertUser($username, $password, $email, $role = 'user', $fullname, $address, $phone)
    {
        $query = "INSERT INTO users (username, password, email, role, fullname, address, phone) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = [$username, $password, $email, $role, $fullname, $address, $phone];

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

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM users WHERE id = ?";
        return $this->db->execute($sql, [$user_id]);
    }

    public function getUserByUsernameRole($username, $role)
    {
        $query = "SELECT id, username, password FROM users WHERE username = ? AND role = ? LIMIT 1";
        $params = [$username, $role];

        return $this->db->fetchSingle($query, $params);
    }

    public function getAllUsers()
    {
        $query = "SELECT id, username, email FROM users";
        return $this->db->fetchAll($query);
    }

    public function editUser($user_id, $newUsername, $newEmail, $newPassword, $newFullname, $newAddress, $newPhone)
    {
        $query = "UPDATE users SET username = ?, email = ?, password = ?, fullname = ?, address = ?, phone = ? WHERE id = ?";
        $params = [$newUsername, $newEmail, $newPassword, $newFullname, $newAddress, $newPhone, $user_id];
        return $this->db->execute($query, $params);
    }

    public function addUser($username, $email, $password, $role, $fullname, $address, $phone)
    {
        $query = "INSERT INTO users (username, password, email, role, fullname, address, phone) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $params = [$username, $password, $email, $role, $fullname, $address, $phone];

        return $this->db->execute($query, $params);
    }
}
?>
