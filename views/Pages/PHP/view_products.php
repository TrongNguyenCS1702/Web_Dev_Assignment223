<!-- views/Pages/PHP/view_products.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
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

        form {
            margin-top: 20px;
        }

        label {
            margin-right: 10px;
        }

        select, button {
            padding: 6px;
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

        img {
            max-width: 100px;
            max-height: 100px;
        }

        /* New style for button alignment */
        .actions {
            display: flex;
            gap: 10px;
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
    </style>
</head>
<body>
    <nav>
        <!-- Navigation menu -->
        <ul>
            <li><a href="?action=admin_homepage">Home</a></li>
            <li><a href="?action=view_products">Manage Product</a></li>
            <li><a href="?action=manage_vouchers">Manage Vouchers</a></li>
            <li><a href="?action=view_user">Manage Users</a></li>
            <li><a href="?action=manage_orders">Manage Orders</a></li>
            <li><a href="?action=logout">Logout</a></li>
        </ul>
    </nav>

    <h1>View Products</h1>
    <a href="?action=add_product" class="button">Add Product</a>

    <form method="get" action="">
        <label for="typeFilter">Filter by Type:</label>
        <select id="typeFilter" name="typeFilter">
            <option value="">All Types</option>
            <!-- Options for type filter -->
        </select>

        <label for="categoryFilter">Filter by Category:</label>
        <select id="categoryFilter" name="categoryFilter">
            <option value="">All Categories</option>
            <!-- Options for category filter -->
        </select>

        <button type="submit" name="apply_filters" class="button">Apply Filters</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Type</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['quantity']; ?></td>
                    <td><?php echo $product['category_name']; ?></td>
                    <td><?php echo $product['type_name']; ?></td>
                    <td>
                        <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
                    </td>
                    <td>
                        <div class="actions">
                            <a href="?action=edit_product&id=<?php echo $product['id']; ?>" class="button">Edit</a>
                            <button onclick="confirmDelete(<?php echo $product['id']; ?>)" class="button">Delete</button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function confirmDelete(productId) {
            if (confirm("Are you sure you want to delete this product?")) {
                window.location.href = '?action=delete_product&id=' + productId;
            }
        }
    </script>
</body>
</html>
