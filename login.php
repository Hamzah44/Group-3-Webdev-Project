<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel | Login</title>
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">
    <style>
        /* Additional styling for login form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        nav.navbar {
            background-color: #2c3e50;
            padding: 1em;
            text-align: center;
            color: white;
        }

        nav.navbar a.logo {
            color: #ecf0f1;
            font-size: 1.5em;
            font-weight: bold;
            text-decoration: none;
        }

        .header {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        form {
            width: 300px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        p a {
            color: #3498db;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <a href="home.php" class="logo"><span>T</span>ravel <span>A</span>gency</a>
</nav>

<div class="header">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">
    <?php
    // Display errors if they exist
    if (!empty($errors)) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '</div>';
    }
    ?>
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="signup.php"><strong>Sign up</strong></a>
    </p>
</form>
</body>
</html>