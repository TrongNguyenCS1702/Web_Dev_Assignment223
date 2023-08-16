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
        <li><a href="?action=logout">Logout</a></li>
    </ul>
</nav>

<h1>View Products</h1>
<a href="?action=add_product">Add Product</a>

<form method="get" action="">
    <label for="typeFilter">Filter by Type:</label>
    <select id="typeFilter" name="typeFilter">
        <option value="">All Types</option>
        <?php foreach ($types as $type): ?>
            <option value="<?php echo $type['type_id']; ?>"><?php echo $type['type_name']; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="categoryFilter">Filter by Category:</label>
    <select id="categoryFilter" name="categoryFilter">
        <option value="">All Categories</option>
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit" name="apply_filters">Apply Filters</button>
</form>

<table>
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
                <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>" width="100">
            </td>
            <td>
                <!-- Edit button -->
                <a href="?action=edit_product&id=<?php echo $product['id']; ?>">Edit</a>
                
                <!-- Delete button -->
                <button onclick="confirmDelete(<?php echo $product['id']; ?>)">Delete</button>
            </td>
        </tr>
    <?php endforeach; ?>
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
