<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

require_once 'db_config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

$table_rows = '';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $table_rows .= "<tr>";
        $table_rows .= "<td>" . $row['product_id'] . "</td>";
        $table_rows .= "<td>" . $row['product_name'] . "</td>";
        $table_rows .= "<td>" . $row['price'] . "</td>";
        $table_rows .= "<td><img src='images/" . $row['Images'] . "' alt='Product Image' class='product-image'></td>";
        $table_rows .= "<td><a href='delete_product.php?product_id=" . $row['product_id'] . "' class='btn btn-danger'>Delete</a></td>";
        $table_rows .= "</tr>";
    }
    
} else {
    $table_rows = "<tr><td colspan='3'>No products found</td></tr>";
}

mysqli_close($conn);
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
                <a class="nav-link" href="admin_logout.php">Logout <span class="sr-only"></span></a>
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
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Images</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $table_rows; ?>
        </tbody>
    </table>
</div>
        </div>
    </div>
     
</body>
</html>