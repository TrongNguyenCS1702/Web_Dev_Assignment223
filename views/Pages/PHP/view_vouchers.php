<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Vouchers</title>
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
            margin: 50px;
            color: #333;
        }

        a.button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        a.button:hover {
            background-color: #555;
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

    <h1>View Vouchers</h1>
    <a href="?action=add_voucher" class="button">Add Voucher</a>

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
                        <a href="?action=edit_voucher&id=<?php echo $voucher['id']; ?>" class="button">Edit</a>
                        <button onclick="showDeleteConfirmation(<?php echo $voucher['id']; ?>)" class="button">Delete</button>
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
