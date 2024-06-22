<?php
session_start();
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $conn->real_escape_string($_POST['product_name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = $conn->real_escape_string($_POST['price']);
    $stock = $conn->real_escape_string($_POST['stock']);

    $createdAt = date('Y-m-d H:i:s');

    $sql = "INSERT INTO products (product_name, description, price, stock, created_at) 
            VALUES ('$productName', '$description', '$price', '$stock', '$createdAt')";

    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
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
                            <li><a href="admin_panel.html" class="button1" href="#">Products</a></li>
                            <li><a href="admin_orders.html" class="button2" href="#">Orders</a></li>
                            <li><a href="admin_products.html" class="button3" href="#">Create Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <h2>Create Product</h2>
        <form method="POST" action="admin_products.php">
            <div class="form-group">
                <label for="product-name">Product Name:</label>
                <input type="text" name="product_name" class="form-control" id="product-name" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="product-description">Product Description:</label>
                <textarea name="description" class="form-control" id="product-description" placeholder="Enter product description"></textarea>
            </div>
            <div class="form-group">
                <label for="product-price">Product Price:</label>
                <input type="number" name="price" class="form-control" id="product-price" placeholder="Enter product price">
            </div>
            <div class="form-group">
                <label for="product-stock">Product Stock:</label>
                <input type="number" name="stock" class="form-control" id="product-stock" placeholder="Enter product stock">
            </div>
            <div class="form-group">
                <label for="product-image">Product Image:</label>
                <input type="file" name="product_image" class="form-control" id="product-image">
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
     
</body>
</html>