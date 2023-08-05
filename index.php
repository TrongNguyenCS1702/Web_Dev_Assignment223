<?php
require_once 'models/UserModel.php';
require_once 'models/ProductModel.php';
require_once 'models/VoucherModel.php';
require_once 'models/OrderModel.php';
require_once 'controllers/UserController.php';
require_once 'controllers/AdminController.php';

session_start();

$base_url = "http://localhost/FigureSell/main"; // Replace URL with your own folder in XAMPP

$action = isset($_GET['action']) ? $_GET['action'] : '';

$userController = new UserController();
$adminController = new AdminController();

if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] === 'admin') {
        header("Location: {$base_url}/index.php?action=admin_homepage");
        exit;
    } elseif ($_SESSION['user_role'] === 'user') {
        header("Location: {$base_url}/index.php?action=user_homepage");
        exit;
    }
}

// Routing based on the action parameter and user role
if (empty($action) || $action === 'user_homepage') {
    // User homepage: Show all products
    $products = $userController->getAllProducts();
    include 'views/Pages/PHP/user_homepage.php';
} elseif ($action === 'view_shopping_cart') {
    // View shopping cart
    $cartItems = $userController->getShoppingCartItems();
    include 'views/Pages/PHP/view_shopping_cart.php';
} elseif ($action === 'view_order_history') {
    // View order history
    $orders = $userController->getOrderHistory();
    include 'views/Pages/PHP/view_order_history.php';
} elseif ($action === 'admin_homepage') {
    // Admin login page
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle the admin login form submission
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $userController->loginUser($username, $password);
        echo $result; // Echo the login result (you can redirect to admin_homepage if login is successful)
    } else {
        // Show the admin login form
        include 'views/Pages/PHP/admin_login.php';
    }
} elseif ($action === 'user_login') {
    // User login page
    include 'views/Pages/PHP/user_login.php';
} elseif ($action === 'admin_login') {
    // Admin login page
    include 'views/Pages/PHP/admin_login.php';
} else {
    // If the requested action is not found, show a 404 page
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
?>
