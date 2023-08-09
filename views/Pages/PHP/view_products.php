<!-- views/Pages/PHP/view_products.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
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

    
    <h1>View Products</h1>
    <!-- Display a list of products here -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
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
                    <td><img src="<?php echo $product['image_url']; ?>" alt="Product Image" width="100"></td>
                    <td>
                        <a href="?action=edit_product&id=<?php echo $product['id']; ?>">Edit</a>
                        <button onclick="showDeleteConfirmation(<?php echo $product['id']; ?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <script>
        function showDeleteConfirmation(productId) {
            var confirmDelete = confirm("Are you sure you want to delete this product?");
            if (confirmDelete) {
                window.location.href = "?action=delete_product&id=" + productId;
            }
        }
        </script>
    </table>
</body>
</html>
