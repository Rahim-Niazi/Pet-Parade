<?php
// Database connection
include_once('db_config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders data from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

// Check if there are any orders
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['order_id'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['shipping_name'] . "</td>";
        echo "<td>" . $row['shipping_address'] . "</td>";
        echo "<td>" . $row['product_id'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>$" . $row['price'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No orders found</td></tr>";
}

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petparade</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#">Pet Parade</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active ml-auto logout-button">
                    <a class="nav-link" href="#">Logout <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="sidebar">   
        <div class="sidebar-content">
            <ul>
                <li><a href="#">Button 1</a></li>
                <li><a href="#">Button 2</a></li>
                <li><a href="#">Button 3</a></li>
            </ul>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="sidebar-content">
                        <ul>
                            <li><a href="admin_panel.php" class="button1" href="#">Products</a></li>
                            <li><a href="admin_orders.html" class="button2" href="#">Orders</a></li>
                            <li><a href="admin_products.php" class="button3" href="#">Create Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>User ID</th>
                            <th>Shipping Name</th>
                            <th>Shipping Address</th>
                            <th>Product ID</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection
                        include_once('db_config.php');
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Fetch orders data from the database
                        $sql = "SELECT * FROM orders";
                        $result = $conn->query($sql);

                        // Check if there are any orders
                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['order_id'] . "</td>";
                                echo "<td>" . $row['user_id'] . "</td>";
                                echo "<td>" . $row['shipping_name'] . "</td>";
                                echo "<td>" . $row['shipping_address'] . "</td>";
                                echo "<td>" . $row['product_id'] . "</td>";
                                echo "<td>" . $row['quantity'] . "</td>";
                                echo "<td>$" . $row['price'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No orders found</td></tr>";
                        }

                        // Close connection
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     
</body>
</html>
