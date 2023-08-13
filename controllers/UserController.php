<?php
require_once 'models/UserModel.php';

class UserController
{
    //---------------------REGISTER
    public function registerUser($username, $password, $email,$phone,$address,$fname)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($username) || empty($password) || empty($email)|| empty($phone) || empty($address)|| empty($fname) ) {
            return "Please fill in all the required fields.";
        }

        // Check if the username or email already exists in the database
        $userModel = new UserModel();
        if ($userModel->isUsernameExists($username)) {
            return "Username already exists. Please choose a different one.";
        }

        if ($userModel->isEmailExists($email)) {
            return "Email already exists. Please use a different email address.";
        }

        // Hash the password before storing it in the database
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Save the user data to the database
        $result = $userModel->insertUser($username, $hashedPassword, $email,$phone,$address,$fname);

        if ($result) {
            return "User registered successfully.";
        } else {
            return "Failed to register user. Please try again later.";
        }
    }
    
    //-------------------------LOGIN
    public function loginUser($username, $password)
    {
        // Validate user input (you can add more validation checks as needed)
        if (empty($username) || empty($password)) {
            return "Please enter your username and password.";
        }

        // Retrieve the user data from the database
        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        // Check if the user exists
        if (!$user) {
            return "Invalid username or password.";
        }

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, store user information in the session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            return "Login successful.";
        } else {
            return "Invalid username or password.";
        }
    }

    public function getAllProducts()
    {
        //TODO
    }

    public function getShoppingCartItems()
    {
        //TODO
    }

    public function getOrderHistory()
    {
        //TODO
    }

}
?>