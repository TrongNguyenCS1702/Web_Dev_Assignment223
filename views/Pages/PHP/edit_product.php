<!-- views/Pages/PHP/edit_product.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
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
            margin: 20px;
        }

        form {
            width: 50%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        p {
            color: #333;
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

    <input type="hidden" name="figure_id" value="<?php echo $product['figure_id']; ?>">
    <!-- Add hidden input field to store the figure_id -->

    <button type="submit" name="update">Update</button>
</form>
</body>
</html>
