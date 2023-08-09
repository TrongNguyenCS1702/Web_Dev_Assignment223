<!-- views/Pages/PHP/view_order_detail.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
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
    <h1>Order Detail</h1>
    <p>Order ID: <?php echo $order['id']; ?></p>
    <p>User ID: <?php echo $order['user_id']; ?></p>
    <p>Voucher Code: <?php echo $order['voucher_code']; ?></p>
    <p>Created At: <?php echo $order['created_at']; ?></p>

    <h2>Order Items</h2>
    <table>
        <thead>
            <tr>
                <th>Order Item ID</th>
                <th>Figure ID</th>
                <th>Quantity</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderItems as $orderItem): ?>
                <tr>
                    <td><?php echo $orderItem['id']; ?></td>
                    <td><?php echo $orderItem['figure_id']; ?></td>
                    <td><?php echo $orderItem['quantity']; ?></td>
                    <td><?php echo $orderItem['rating']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
