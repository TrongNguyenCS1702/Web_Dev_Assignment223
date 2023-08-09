<!-- views/Pages/PHP/add_voucher.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Voucher</title>
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
    <h1>Add Voucher</h1>
    <?php if ($add_message): ?>
        <p><?php echo $add_message; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" required>
        <br>
        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" step="0.01" required>
        <br>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        <br>
        <button type="submit" name="add_voucher">Add Voucher</button>
    </form>

</body>
</html>
