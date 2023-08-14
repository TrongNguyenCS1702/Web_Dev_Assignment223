<?php if (isset($add_message)): ?>
    <p><?php echo $add_message; ?></p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
    <h1>Add Product</h1>

    <?php if (isset($add_message)): ?>
        <p><?php echo $add_message; ?></p>
    <?php endif; ?>

    <form method="post" action="?action=add_product">
    <input type="number" name="id" placeholder="ID" required><br>
    <input type="text" name="name" placeholder="Name" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="text" name="price" placeholder="Price" required><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br>

    <label for="figure">Figure:</label>
    <select name="figure" required>
        <?php foreach ($figures as $figure): ?>
            <option value="<?php echo $figure['figure_id']; ?>"><?php echo $figure['figure_name']; ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="image_url">Image URL:</label>
    <input type="text" name="image_url" placeholder="Image URL"><br>

    <button type="submit" name="add_product">Add Product</button>
</form>

</body>
</html>
