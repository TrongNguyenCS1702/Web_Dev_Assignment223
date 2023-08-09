<?php
require_once 'models/UserModel.php'; // Adjust paths based on your project structure
require_once 'controllers/AdminController.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base_url = "http://localhost/FigureSell/main"; // Replace with your URL

$adminController = new AdminController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Handle the admin login form submission
    $login_result = $adminController->adminLogin($username, $password);

    if ($login_result === true) {
        $_SESSION['user_role'] = 'admin';
        $_SESSION['username'] = $username; // Store the username in session
        header("Location: {$base_url}/index.php?action=admin_homepage");
        exit;
    } else {
        $login_error = $login_result;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <?php if (isset($login_error)) : ?>
        <p style="color: red;"><?php echo $login_error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
