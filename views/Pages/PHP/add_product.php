
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
    <h1>Add Product</h1>

    <?php if (isset($add_message)): ?>
        <p><?php echo $add_message; ?></p>
    <?php endif; ?>

    <form method="post" action="?action=add_product">
        <label for="id">ID:</label>
        <input type="number" name="id" placeholder="ID" required>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" required>
        <label for="description">Description:</label>
        <textarea name="description" placeholder="Description"></textarea>
        <label for="price">Price:</label>
        <input type="text" name="price" placeholder="Price" required>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <label for="figure">Figure:</label>
        <select name="figure" required>
            <?php foreach ($figures as $figure): ?>
                <option value="<?php echo $figure['figure_id']; ?>"><?php echo $figure['figure_name']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" placeholder="Image URL">
        <button type="submit" name="add_product">Add Product</button>
    </form>
</body>
</html>
