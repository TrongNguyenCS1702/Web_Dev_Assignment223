<!-- views/Pages/PHP/view_vouchers.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vouchers</title>
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
    <h1>View Vouchers</h1>
    <a href="?action=add_voucher">Add Voucher</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Discount</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vouchers as $voucher): ?>
                <tr>
                    <td><?php echo $voucher['id']; ?></td>
                    <td><?php echo $voucher['code']; ?></td>
                    <td><?php echo $voucher['discount']; ?></td>
                    <td><?php echo $voucher['start_date']; ?></td>
                    <td><?php echo $voucher['end_date']; ?></td>
                    <td>
                        <a href="?action=edit_voucher&id=<?php echo $voucher['id']; ?>">Edit</a>
                        <button onclick="showDeleteConfirmation(<?php echo $voucher['id']; ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
    function showDeleteConfirmation(voucherId) {
        var confirmDelete = confirm("Are you sure you want to delete this voucher?");
        if (confirmDelete) {
            window.location.href = "?action=delete_voucher&id=" + voucherId;
        }
    }
    </script>
</body>
</html>
