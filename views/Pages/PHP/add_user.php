<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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
    <h1>Add User</h1>
    
    <?php if (isset($add_message)): ?>
        <p><?php echo $add_message; ?></p>
    <?php endif; ?>

    <form method="post" action="?action=add_user">
        <!-- Add user input fields here (username, email, password, role) -->
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" required><br>
        
        <label for="role">Role:</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br>
        
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" placeholder="Full Name" required><br>
        
        <label for="address">Address:</label>
        <input type="text" name="address" placeholder="Address" required><br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" placeholder="Phone" required><br>
        
        <input type="submit" name="submit" value="Add User">
    </form>
</body>
</html>
