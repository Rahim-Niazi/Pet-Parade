<?php
session_start();

if (!isset($_POST['product_id']) || !isset($_POST['quantity'])) {
    die("Product ID or quantity is missing.");
}

$product_id = intval($_POST['product_id']);
$quantity = intval($_POST['quantity']);

if ($quantity <= 0) {
    die("Invalid quantity.");
}

// Check if the product is already in the cart
if (isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id] += $quantity;
} else {
    $_SESSION['cart'][$product_id] = $quantity;
}

header("Location: cart.php");
exit();
?>
