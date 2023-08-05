<!-- admin_homepage.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Homepage</title>
</head>
<body>
    <?php
    // Get the admin's username from the session
    $adminUsername = $_SESSION['username'];

    // Get the admin information by username
    $adminInfo = $adminController->getAdminInformationByUsername($adminUsername);
    if ($adminInfo) {
        ?>
        <h1>Welcome, <?php echo $adminInfo['username']; ?>!</h1>
        <!-- Display Other Admin Information Here -->

        <?php
    } else {
        // Handle error when admin information is not found
        echo "<h1>Welcome, Admin!</h1>";
    }
    ?>

    <h2>Navigation</h2>
    <ul>
        <li><a href="<?php echo $base_url ?>?action=manage_products">Manage Products</a></li>
        <li><a href="<?php echo $base_url ?>?action=manage_vouchers">Manage Vouchers</a></li>
        <li><a href="<?php echo $base_url ?>?action=view_user_info">View User Information</a></li>
        <li><a href="<?php echo $base_url ?>?action=manage_orders">Manage Orders</a></li>
        <li><a href="<?php echo $base_url ?>?action=view_purchase_history">View Purchase History</a></li>
    </ul>
</body>
</html>
