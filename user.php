<?php
include("server.php");

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

// Check if the user's email is set in the session
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "Your session has expired. Please log in again.";
    header('location: login.php');
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    header("location: login.php");
    exit();
}

// Check if the logged-in user is an admin
$isAdmin = ($_SESSION['username'] === 'admin');

// CRUD Operations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($isAdmin && isset($_POST['delete_booking'])) {
        $booking_id = intval($_POST['id']);
        $query = "DELETE FROM book_form WHERE id = $booking_id";
        mysqli_query($db, $query);
    }

    if (!$isAdmin && isset($_POST['update_booking'])) {
        $booking_id = intval($_POST['id']);
        if ($booking_id <= 0) {
            die("Invalid booking ID");
        }

        $name = mysqli_real_escape_string($db, $_POST['name']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $guests = intval($_POST['guests']);
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $query = "UPDATE book_form 
                  SET name = '$name', phone = '$phone', address = '$address', guests = $guests, arrivals = '$arrivals', leaving = '$leaving' 
                  WHERE id = $booking_id AND email = '{$_SESSION['email']}'";
        mysqli_query($db, $query);
        $_SESSION['msg'] = "Booking updated successfully!";
    }

    if (!$isAdmin && isset($_POST['cancel_booking'])) {
        $booking_id = intval($_POST['id']);
        $query = "DELETE FROM book_form WHERE id = $booking_id AND email = '{$_SESSION['email']}'";
        mysqli_query($db, $query);
    }
}

// Fetch specific booking for editing
$edit_booking = null;
if (!$isAdmin && isset($_GET['edit_id'])) {
    $edit_id = intval($_GET['edit_id']);
    $query = "SELECT * FROM book_form WHERE id = $edit_id AND email = '{$_SESSION['email']}'";
    $result = mysqli_query($db, $query);
    $edit_booking = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $isAdmin ? 'Admin Dashboard' : 'User Dashboard'; ?></title>
    <link rel="stylesheet" href="CSS/style2.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        nav.navbar {
            background-color: #2c3e50;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav.navbar a.logo {
            color: #ecf0f1;
            font-size: 1.5em;
            font-weight: bold;
            text-decoration: none;
        }

        .container {
            margin: 20px auto;
            padding: 20px;
            width: 90%;
            max-width: 1200px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .dashboard-header {
            background: #2980b9;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        .dashboard-header a {
            display: inline-block;
            padding: 10px 20px;
            background: #e74c3c;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
        }

        .dashboard-header a:hover {
            background: #c0392b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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

        .btn {
            padding: 8px 12px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        .btn-edit {
            background-color: #1abc9c;
            color: white;
        }

        .btn-edit:hover {
            background-color: #16a085;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .btn-cancel {
            background-color: #f39c12;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #e67e22;
        }

        form {
            margin-top: 20px;
            padding: 20px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        form .input-group {
            margin-bottom: 15px;
        }

        form .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        form .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <a href="home.php" class="logo">Travel Agency</a>
</nav>

<div class="container">
    <div class="dashboard-header">
        <h2><?php echo $isAdmin ? 'Admin Dashboard' : 'User Dashboard'; ?></h2>
        <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
        <a href="user.php?logout='1'">Logout</a>
    </div>

    <div>
        <h3>Booking Details</h3>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $bookings_query = $isAdmin
                    ? "SELECT * FROM book_form"
                    : "SELECT * FROM book_form WHERE email = '{$_SESSION['email']}'";
                $bookings_result = mysqli_query($db, $bookings_query);
                while ($booking = mysqli_fetch_assoc($bookings_result)) { ?>
                    <tr>
                        <td><?php echo $booking['id']; ?></td>
                        <td><?php echo $booking['name']; ?></td>
                        <td><?php echo $booking['email']; ?></td>
                        <td><?php echo $booking['phone']; ?></td>
                        <td><?php echo $booking['address']; ?></td>
                        <td><?php echo $booking['guests']; ?></td>
                        <td><?php echo $booking['arrivals']; ?></td>
                        <td><?php echo $booking['leaving']; ?></td>
                        <td>
                            <?php if ($isAdmin): ?>
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $booking['id']; ?>">
                                    <button type="submit" name="delete_booking" class="btn btn-delete">Delete</button>
                                </form>
                            <?php else: ?>
                                <a href="user.php?edit_id=<?php echo $booking['id']; ?>" class="btn btn-edit">Edit</a>
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $booking['id']; ?>">
                                    <button type="submit" name="cancel_booking" class="btn btn-cancel">Cancel</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php if (!$isAdmin && $edit_booking): ?>
        <h3>Edit Booking</h3>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_booking['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($edit_booking['name'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="input-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($edit_booking['phone'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="input-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($edit_booking['address'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="input-group">
                <label for="guests">Guests</label>
                <input type="number" id="guests" name="guests" value="<?php echo htmlspecialchars($edit_booking['guests'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="input-group">
                <label for="arrivals">Arrival</label>
                <input type="date" id="arrivals" name="arrivals" value="<?php echo htmlspecialchars($edit_booking['arrivals'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="input-group">
                <label for="leaving">Leaving</label>
                <input type="date" id="leaving" name="leaving" value="<?php echo htmlspecialchars($edit_booking['leaving'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <button type="submit" name="update_booking" class="btn btn-edit">Update</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
