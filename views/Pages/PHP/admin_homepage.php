<?php
$adminInfo = $adminController->getAdminInformationByUsername($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="?action=admin_homepage">Home</a></li>
            <li><a href="?action=view_products">Manage Product</a></li>
            <li><a href="?action=manage_vouchers">Manage Vouchers</a></li>
            <li><a href="?action=view_user">Manage Users</a></li>
            <li><a href="?action=manage_orders">Manage Orders</a></li>
            <li><a href="?action=logout">Logout</a></li>
        </ul>
    </nav>


    <h1>Welcome, <?php echo $adminInfo['username']; ?></h1>
    <p>Email: <?php echo $adminInfo['email']; ?></p>

    <!-- Add more admin-related content here -->

    <footer>
        <p>&copy; 2023 FigureSell</p>
    </footer>
</body>
</html>
