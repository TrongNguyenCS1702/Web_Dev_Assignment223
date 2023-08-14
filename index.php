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

// If the user is already logged in, redirect to the appropriate page
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'admin') {
        // if ($action == "user_logout") {
        //     include 'views/Pages/PHP/user/Logout/logout.php';
        // }
        if ($action === 'admin_homepage') {
            // Admin homepage: Display admin information and options
            include 'views/Pages/PHP/admin_homepage.php';
            exit; // Add this line to stop further processing
        } elseif ($action === 'add_product') {
            // Add product page
            // Add your add product logic here
        } elseif ($action === 'update_product') {
            // Update product page
            // Add your update product logic here
        } elseif ($action === 'view_user') {
            // Include the view_users.php file here
            include 'views/Pages/PHP/view_users.php';
            exit; // Add this line to stop further processing
        } elseif ($action === 'edit_user') {
            $user_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($user_id) {
                $user = $adminController->getUserById($user_id);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                    $newUsername = $_POST['username'];
                    $newEmail = $_POST['email'];
                    $newPassword = $_POST['password']; // Get new password from form

                    $update_result = $adminController->editUser($user_id, $newUsername, $newEmail, $newPassword);

                    if ($update_result) {
                        $update_message = "User information updated successfully.";
                    } else {
                        $update_message = "Error updating user information.";
                    }
                }
                include 'views/Pages/PHP/edit_user.php';
                exit;
            }
        } elseif ($action === 'delete_user') {
            $user_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($user_id) {
                $delete_result = $adminController->deleteUser($user_id);
                if ($delete_result) {
                    $delete_message = "Deleted user successfully.";
                } else {
                    $delete_message = "Error deleting user.";
                }
            }
            $users = $adminController->getAllUsers();
            include 'views/Pages/PHP/view_users.php';
            exit;
        } elseif ($action === 'add_user') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $role = $_POST['role'];

                $add_result = $adminController->addUser($username, $email, $password, $role);

                if ($add_result) {
                    $add_message = "User added successfully.";
                } else {
                    $add_message = "Error adding user.";
                }
            }

            include 'views/Pages/PHP/add_user.php';
            exit;
        } elseif ($action === 'edit_product') {
            $product_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($product_id) {
                $product = $adminController->getProductById($product_id);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                    $newName = $_POST['name'];
                    $newDescription = $_POST['description'];
                    $newPrice = $_POST['price'];
                    $newQuantity = $_POST['quantity'];
                    $newImageUrl = $_POST['image_url'];

                    $update_result = $adminController->editProduct($product_id, $newName, $newDescription, $newPrice, $newQuantity, $newImageUrl);

                    if ($update_result) {
                        $update_message = "Product information updated successfully.";
                    } else {
                        $update_message = "Error updating product information.";
                    }
                }
                include 'views/Pages/PHP/edit_product.php';
                exit;
            }
        } elseif ($action === 'delete_product') {
            $product_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($product_id) {
                $delete_result = $adminController->deleteProduct($product_id);
                if ($delete_result) {
                    $delete_message = "Deleted product successfully.";
                } else {
                    $delete_message = "Error deleting product.";
                }
            }
            // Fetch the list of products
            $products = $adminController->getAllProducts();
            include 'views/Pages/PHP/view_products.php';
            exit;
        } elseif ($action === 'view_products') {
            $products = $adminController->getAllProducts();
            include 'views/Pages/PHP/view_products.php';
            exit;
        } elseif ($action === 'delete_product') {
            $product_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($product_id) {
                $delete_result = $adminController->deleteProduct($product_id);
                if ($delete_result) {
                    $delete_message = "Deleted product successfully.";
                } else {
                    $delete_message = "Error deleting product.";
                }
            }
            // Fetch the list of products
            $products = $adminController->getAllProducts();
            include 'views/Pages/PHP/view_products.php';
            exit;
        } elseif ($action === 'manage_vouchers') {
            $vouchers = $adminController->getAllVouchers();
            include 'views/Pages/PHP/view_vouchers.php';
            exit;
        } elseif ($action === 'add_voucher') {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_voucher'])) {
                $code = $_POST['code'];
                $discount = $_POST['discount'];
                $startDate = $_POST['start_date'];
                $endDate = $_POST['end_date'];

                $add_result = $adminController->addVoucher($code, $discount, $startDate, $endDate);

                if ($add_result) {
                    $add_message = "Voucher added successfully.";
                } else {
                    $add_message = "Error adding voucher.";
                }
            }
            include 'views/Pages/PHP/add_voucher.php';
            exit;
        } elseif ($action === 'view_vouchers') {
            $vouchers = $adminController->getAllVouchers(); // Fetch vouchers from the controller
            include 'views/Pages/PHP/view_vouchers.php';
            exit;
        } elseif ($action === 'edit_voucher') {
            $voucher_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($voucher_id) {
                $voucher = $adminController->getVoucherById($voucher_id);
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
                    $newCode = $_POST['code'];
                    $newDiscount = $_POST['discount'];
                    $newStartDate = $_POST['start_date'];
                    $newEndDate = $_POST['end_date'];

                    $update_result = $adminController->editVoucher($voucher_id, $newCode, $newDiscount, $newStartDate, $newEndDate);

                    if ($update_result) {
                        $update_message = "Voucher information updated successfully.";
                    } else {
                        $update_message = "Error updating voucher information.";
                    }
                }
                include 'views/Pages/PHP/edit_voucher.php';
                exit;
            }
        } elseif ($action === 'delete_voucher') {
            $voucher_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($voucher_id) {
                $delete_result = $adminController->deleteVoucher($voucher_id);
                if ($delete_result) {
                    $delete_message = "Deleted voucher successfully.";
                } else {
                    $delete_message = "Error deleting voucher.";
                }
            }
            // Fetch vouchers again from the controller
            $vouchers = $adminController->getAllVouchers();
            include 'views/Pages/PHP/view_vouchers.php';
            exit;
        } elseif ($action === 'manage_orders') {
            $orders = $adminController->getAllOrders();
            include 'views/Pages/PHP/view_orders.php';
            exit;
        } elseif ($action === 'view_order_detail') {
            $order_id = isset($_GET['id']) ? $_GET['id'] : null;
            if ($order_id) {
                $order = $adminController->getOrderById($order_id);
                $orderItems = $adminController->getOrderItemsByOrderId($order_id);
                include 'views/Pages/PHP/view_order_detail.php';
                exit;
            }
        } elseif ($action === 'logout') {
            // Perform logout logic here (destroy session, redirect to login, etc.)
            session_destroy();
            header("Location: ?action=admin_login");
            exit;
        }
    }elseif ($_SESSION['role'] === 'user') {
        // Redirect to user homepage or other user-related actions
        // Add your user-related logic here
        if ($action == "products") {
            include 'views/Pages/PHP/user/delivery/delivery.php';
        }
        if ($action == "product") {
            include 'views/Pages/PHP/user/product page interface/product.php';
        }
        if ($action == "user_logout") {
            include 'views/Pages/PHP/user/Logout/logout.php';
        }
        if ($action == "cart") {
            include 'views/Pages/PHP/user/cart/cart.php';
        }
        if ($action == "user_homepage") {
            include 'views/Pages/PHP/user/Home/home.php';
        }
        if ($action == "check_voucher") {
            include 'views/Pages/PHP/user/payment/check_voucher.php';
        }
        if ($action == "pay") {
            include 'views/Pages/PHP/user/payment/pay.php';
        }
        if ($action == "add_order") {
            include 'views/Pages/PHP/user/payment/add_order.php';
        }
    }
}
// echo print_r($_SESSION);
// Routing based on the action parameter
else if (empty($action) || $action === 'user_homepage') {
    // ... (User-related actions)
    include 'views/Pages/PHP/user/Home/home.php';
} elseif ($action === 'user_login') {
    // ... (User login handling)
    include 'views/Pages/PHP/user/Login/login.php';
} elseif ($action === 'user_register') {
    // ... (User login handling)
    include 'views/Pages/PHP/user/rig/register.php';
} elseif ($action === 'user_register') {
    // ... (User registration handling)
} elseif ($action === 'admin_login') {
    include 'views/Pages/PHP/admin_login.php'; // Display admin login page
}  elseif ($action == "products") {
    include 'views/Pages/PHP/user/delivery/delivery.php';
}
elseif ($action == "product") {
    include 'views/Pages/PHP/user/product page interface/product.php';
}
elseif ($action == "cart") {
    include 'views/Pages/PHP/user/cart/cart.php';
}
elseif ($action == "user_homepage") {
    include 'views/Pages/PHP/user/Home/home.php';
}elseif ($action == "pay") {
    include 'views/Pages/PHP/user/payment/pay.php';
}else {
    // If the requested action is not found, show a 404 page
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
?>