<?php
include_once('db_config.php');
session_start();

if (isset($_POST['name']) && isset($_POST['address']) && isset($_SESSION['user_id'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $user_id = $_SESSION['user_id'];
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

    foreach ($cart as $product_id => $quantity) {
        // Fetch product price
        $sql = "SELECT price FROM products WHERE product_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $price = $product['price'];
        $stmt->close();

        // Calculate subtotal
        $subtotal = $price * $quantity;

        // Insert order details into the database
        $sql = "INSERT INTO orders (user_id, shipping_name, shipping_address, product_id, quantity, price) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issiid", $user_id, $name, $address, $product_id, $quantity, $subtotal);
        $stmt->execute();
        $stmt->close();
    }

    // Clear cart after checkout
    unset($_SESSION['cart']);

    // Display success message and redirect
    echo '<script>alert("Order placed successfully!");</script>';
    header("Location: index.php");
    exit();
} else {
    echo "Error: Missing required fields or user not logged in.";
}

$conn->close();
?>
