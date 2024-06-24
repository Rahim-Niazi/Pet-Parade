<?php
include_once('db_config.php');
session_start();

// Fetch cart items from session
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Function to fetch product details by ID
function getProductDetails($product_id, $conn) {
    $sql = "SELECT product_id, product_name, price, Images FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
    return $product;
}

$total = 0;
foreach ($cart as $product_id => $quantity) {
    $product = getProductDetails($product_id, $conn);
    $subtotal = $product['price'] * $quantity;
    $total += $subtotal;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['discountedTotal'])) {
    $discountedTotal = $_POST['discountedTotal'];
} else {
    // Handle the case where the discounted total is not available
    $discountedTotal = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Petparade</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style/stylesheet.css">
</head>

    <body>
    <?php include 'header.php'; ?>


<section id="page-header" class="contact-header">
    <h2>Checkout</h2>
    <p>Review your order and enter your details.</p>
</section>

<section id="checkout" class="section-p1">
    <form action="process_checkout.php" method="POST">
        <div class="checkout-details">
            <h3>Shipping Information</h3>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        
        <div class="order-details">
            <h3>Order Summary</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Product</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($cart as $product_id => $quantity) {
                        $product = getProductDetails($product_id, $conn);
                        $subtotal = $product['price'] * $quantity;
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($product['product_name']) . '</td>';
                        echo '<td>' . $quantity . '</td>';
                        echo '<td>$' . htmlspecialchars($product['price']) . '</td>';
                        echo '<td>$' . htmlspecialchars($subtotal) . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td><strong>$<?php echo htmlspecialchars($total); ?></strong></td>
                    </tr>
                </tfoot>
            </table>
            <button type="submit" class="normal">Confirm Order</button>
        </div>
    </form>
</section>


<?php include 'footer.php'; ?>

<script src="script.js"></script>
</body>

</html>