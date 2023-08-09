
<?php include 'views/admin_navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
<nav>
        <ul>
            <li><a href="?action=admin_homepage">Home</a></li>
            <li><a href="?action=view_products">Manage Product</a></li>
            <li><a href="?action=manage_vouchers">Manage Vouchers</a></li>
            <li><a href="?action=view_user">Manage Users</a></li>
            <li><a href="?action=manage_orders">Manage Orders</a></li>
        </ul>
    </nav>
    <h1>Edit User</h1>
    <?php if (isset($update_message)) : ?>
        <p><?php echo $update_message; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $user['username']; ?>"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
        <label for="password">New Password:</label>
        <input type="password" name="password"><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
