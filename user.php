<?php 
include ("server.php");

// Ensure session is started
if (!isset($_SESSION)) {
    session_start();
}

// Redirect if the user is not logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
    exit();
}

// Check if the logged-in user is an admin
$isAdmin = ($_SESSION['username'] === 'admin');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $isAdmin ? 'Admin Panel' : 'User Dashboard'; ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        nav.navbar {
            background-color: #2c3e50;
            padding: 1em;
            text-align: center;
            position: absolute;
            top: 0;
            width: 100%;
        }

        nav.navbar a.logo {
            color: #ecf0f1;
            font-size: 1.5em;
            font-weight: bold;
            text-decoration: none;
        }

        .header {
            background-color: #2980b9;
            color: white;
            padding: 1em;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            width: 80%;
            height: 80%;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }

        h2, h3 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #3498db;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            background-color: #2980b9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #1a6fa5;
        }
    </style>
</head>
<body>
<nav class="navbar">
     <a href="home.php" class="logo"><span>T</span>ravel <span>A</span>gency</a>
</nav>

<div class="content">
    <div class="header">
        <h2><?php echo $isAdmin ? 'Admin Panel' : 'User Dashboard'; ?></h2>
    </div>

    <!-- Welcome message -->
    <?php if (isset($_SESSION['username'])) : ?>
        <h2>Welcome back, <strong><?php echo $_SESSION['username']; ?></strong></h2>
        <h3><a href="user.php?logout='1'" class="btn" style="background-color: red;">Log Out</a></h3>
    <?php endif ?>

    <!-- Admin View -->
    <?php if ($isAdmin): ?>
        <h3>All User Data</h3>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sel_query = "SELECT * FROM users;";
                $result = mysqli_query($db, $sel_query);
                if (!$result) {
                    echo "<tr><td colspan='4'>Error fetching user data: " . mysqli_error($db) . "</td></tr>";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["user_id"]; ?></td>
                            <td><?php echo $row["username"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["password"]; ?></td>
                        </tr>
                <?php } } ?>
            </tbody>
        </table>
    <?php endif; ?>

    <!-- Booking details -->
    <h3><?php echo $isAdmin ? 'All Booking Details' : 'Your Booking Details'; ?></h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Guests</th>
                <th>Arrival</th>
                <th>Leaving</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($isAdmin) {
                // Admin: Show all bookings
                $sel_query = "SELECT * FROM book_form;";
            } else {
                // Normal user: Show only their bookings
                $username = $_SESSION['username'];
                $sel_query = "SELECT bf.* FROM book_form bf JOIN users u ON bf.email = u.email WHERE u.username = '$username';";
            }
            $result = mysqli_query($db, $sel_query);
            if (!$result) {
                echo "<tr><td colspan='8'>Error fetching booking details: " . mysqli_error($db) . "</td></tr>";
            } else {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["guests"]; ?></td>
                        <td><?php echo $row["arrivals"]; ?></td>
                        <td><?php echo $row["leaving"]; ?></td>
                    </tr>
            <?php } } ?>
        </tbody>
    </table>
</div>
</body>
</html>
