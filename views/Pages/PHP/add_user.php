<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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
    <h1>Add User</h1>
    
    <?php if (isset($add_message)): ?>
        <p><?php echo $add_message; ?></p>
    <?php endif; ?>

    <form method="post" action="?action=add_user">
    <!-- Add user input fields here (username, email, password, role) -->
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br>
    <input type="text" name="fullname" placeholder="Full Name" required><br>
    <input type="text" name="address" placeholder="Address" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="submit" name="submit" value="Add User">
</form>
</body>
</html>
