<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        nav {
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        h1 {
            margin: 20px;
            color: #333;
        }

        p {
            color: #333;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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
