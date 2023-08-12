<!-- views/Pages/PHP/edit_product.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
    
    <h1>Edit Product</h1>
    <?php if (isset($update_message)): ?>
        <p><?php echo $update_message; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo $product['description']; ?></textarea><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>" required><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?php echo $product['quantity']; ?>" required><br>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" value="<?php echo $product['image_url']; ?>"><br>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
