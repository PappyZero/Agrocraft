<?php
session_start();
include("../Includes/db.php");

// Check if the user is logged in
if (!isset($_SESSION['courier_phone'])) {
    header("location: Delivery_Dashboard.php");
    exit();
}

// Fetch logged-in user's courier information from the database
$phoneNumber = $_SESSION['courier_phone'];
$query = "SELECT * FROM courierregistration WHERE courier_phone = '$phoneNumber'";
$result = mysqli_query($con, $query);

if (!$result) {
    die('Query Failed: ' . mysqli_error($con));
}

$row = mysqli_fetch_assoc($result);
$courierName = $row ? $row['courier_name'] : '';

// Fetch recent deliveries assigned to the courier from the database
$query = "SELECT * FROM deliveries WHERE courier_phone = '$phoneNumber' ORDER BY delivery_date DESC LIMIT 5"; // Assuming deliveries table has delivery_date column
$result = mysqli_query($con, $query);

if (!$result) {
    die('Query Failed: ' . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recent Deliveries</title>
    <!-- Include any CSS files or stylesheets here -->
    <style>
        /* Header Styles */
        nav {
            background-color: #292b2c;
            color: goldenrod;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            width: 100%;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: goldenrod;
            text-decoration: none;
        }

        #logo {
            /* margin-left: 10px; */
            font-size: 1.5rem;
        }

        .proicon {
            /* margin-right: 10px; */
            font-size: 1.2rem;
        }

        .loginz {
            color: green;
            /* margin-left: 10px; */
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .nav-item {
            /* margin-left: 10px; */
        }

        .nav-link {
            color: goldenrod;
            text-decoration: none;
            padding: 0 10px;
        }

        .nav-link:hover {
            color: #fff;
        }
        
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        } */

        /* .container {
            max-width: 800px;
            width: 100%;
        } */

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        thead {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f2f2f2;
        }

        

    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a class="navbar-brand" href="courierHomepage.php">
                <img src="./logo.jpeg" alt="Logo" style="height:50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color:green;font-size:20px;"></span>
            </button>
            <div class="nav-item loginz text-success">
                <?php echo htmlspecialchars($courierName); ?>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item"> -->
                        <a class="nav-link" href="Delivery_Dashboard.php">Dashboard</a>
                    <!-- </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="Deliveries.php">Deliveries</a>
                    </li> -->
                    <!-- <li class="nav-item"> -->
                        <a class="nav-link" href="logout.php">Logout</a>
                    <!-- </li> -->

                </ul>
            </div>
        </nav>
        <h2>Recent Deliveries</h2>
        <?php if (mysqli_num_rows($result) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Delivery ID</th>
                        <th>Recipient's Name</th>
                        <th>Delivery Address</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['delivery_id']; ?></td>
                            <td><?php echo $row['recipient_name']; ?></td>
                            <td><?php echo $row['delivery_address']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No recent deliveries found.</p>
        <?php endif; ?>
    </div>
    
</body>
</html>
