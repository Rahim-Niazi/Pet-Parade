<?php
include_once('db_config.php');
session_start();

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

// Handle remove item action
if (isset($_GET['action']) && $_GET['action'] == 'remove' && isset($_GET['id'])) {
    $product_id = intval($_GET['id']);
    unset($_SESSION['cart'][$product_id]);
}

// Handle update quantity action
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['quantities'] as $product_id => $quantity) {
        $_SESSION['cart'][$product_id] = intval($quantity);
    }
}


$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
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
</head>

<body>
<?php include 'header.php'; ?>


<section id="page-header" class="contact-header">
    <h2>Reach out to us!</h2>
    <p>If you encounter any issues with your order.</p>
</section>

<section id="cart" class="section-p1">
    <form action="cart.php" method="POST">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($cart as $product_id => $quantity) {
                    $product = getProductDetails($product_id, $conn);
                    $subtotal = $product['price'] * $quantity;
                    $total += $subtotal;
                    echo '<tr>';
                    echo '<td><a href="cart.php?action=remove&id=' . $product['product_id'] . '"><i class="far fa-times-circle"></i></a></td>';
                    echo '<td><img src="images/' . htmlspecialchars($product['Images']) . '" alt=""></td>';
                    echo '<td>' . htmlspecialchars($product['product_name']) . '</td>';
                    echo '<td>$' . htmlspecialchars($product['price']) . '</td>';
                    echo '<td><input type="number" name="quantities[' . $product['product_id'] . ']" value="' . $quantity . '" min="1"></td>';
                    echo '<td>$' . htmlspecialchars($subtotal) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div>
            <button type="submit" name="update_cart" class="normal">Update Cart</button>
        </div>
    </form>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <input type="text" id="couponCode" placeholder="Enter coupon code">
        <button onclick="applyCoupon()">Apply</button>
    </div>
</div>

    <div id="subtotal">
        <h3>Total Sum</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$<?php echo htmlspecialchars($total); ?></td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$<?php echo htmlspecialchars($total); ?></strong></td>
            </tr>
        </table>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="checkout.php" class="button normal">Proceed to Checkout</a>
        <?php else: ?>
            <a href="login.php" class="button white">Proceed to Checkout</a>
        <?php endif; ?>
    </div>
</section>

<?php include 'footer.php'; ?>


<script src="script.js"></script>

</body>

</html>
