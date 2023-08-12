<?php
$users = $adminController->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
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
    <h1>View Users</h1>
    <!-- Display a list of users here -->
    <a href="?action=add_user">Add User</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="?action=edit_user&id=<?php echo $user['id']; ?>">Edit</a>
                        <button onclick="confirmDelete(<?php echo $user['id']; ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <?php if (isset($delete_message)): ?>
    <p><?php echo $delete_message; ?></p>
<?php endif; ?>
        <script>
    function confirmDelete(userId) {
        if (confirm("Do you really want to delete this user?")) {
            window.location.href = "?action=delete_user&id=" + userId;
        }
    }
        </script>
    </table>
</body>
</html>
