<?php
$adminInfo = $adminController->getAdminInformationByUsername($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
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
            color: #333;
        }

        p {
            color: #333;
            font-size: 32px;
            text-align: center;
            margin: 20px;
            transform-origin: center;
            animation: scaleText 2s infinite alternate ease-in-out;
        }

        h1.welcome {
            font-size: 100px;
            margin-bottom: 0;
        }

        @keyframes scaleText {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
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

    <h1>Welcome, <?php echo $adminInfo['username']; ?></h1>
    <p>Email: <?php echo $adminInfo['email']; ?></p>

    <!-- Add more admin-related content here -->

    <footer>
        <p>&copy; <?php echo date('Y'); ?> FigureSell</p>
    </footer>
</body>
</html>

