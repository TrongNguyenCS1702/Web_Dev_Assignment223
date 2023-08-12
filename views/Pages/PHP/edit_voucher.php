<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Voucher</title>
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
    <h1>Edit Voucher</h1>
    <?php if (isset($update_message)) : ?>
        <p><?php echo $update_message; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="code">Code:</label>
        <input type="text" id="code" name="code" value="<?php echo $voucher['code']; ?>" required><br>
        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" value="<?php echo $voucher['discount']; ?>" required><br>
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" value="<?php echo $voucher['start_date']; ?>" required><br>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" value="<?php echo $voucher['end_date']; ?>" required><br>
        <button type="submit" name="update">Update Voucher</button>
    </form>
    <br>
    <a href="?action=view_vouchers">Back to View Vouchers</a>
</body>
</html>
