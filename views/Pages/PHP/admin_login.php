<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            transform: translateY(0);
            opacity: 1;
            transition: transform 0.5s, opacity 0.5s;
        }
        
        .login-container.hidden {
            transform: translateY(20px);
            opacity: 0;
        }
        
        .login-container h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #444;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 12px; /* Increased padding for better aesthetics */
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
        }
        
        button[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <?php if (isset($login_error)) : ?>
            <p class="error-message"><?php echo $login_error; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    <script>
        // Apply the "hidden" class to the login container initially
        document.addEventListener("DOMContentLoaded", function() {
            const loginContainer = document.querySelector(".login-container");
            loginContainer.classList.add("hidden");
            
            // Remove the "hidden" class to trigger the fade-in effect
            setTimeout(() => {
                loginContainer.classList.remove("hidden");
            }, 100);
        });
    </script>
</body>
</html>
