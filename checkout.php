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
    <section id="header">
    <a href="#"><img src="images/" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <?php
            if (isset($_SESSION['user_id'])) {
                echo '<li><a href="logout.php">Logout</a></li>';
            } else {
                echo '<li><a href="signup.php">Sign Up</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
            }
            ?>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<section id="page-header" class="contact-header">
    <h2>Checkout</h2>
    <p>Review your order and enter your details</p>
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


<footer class="section-p1">
    <div class="col">
        <h4>Contact</h4>
        <p><strong>Address:</strong> Example Road, Example Street, Filler City</p>
        <p><strong>Phone:</strong> +02 1234 987/ (+92) 01 2345 5654</p>
        <p><strong>Shop Hours:</strong> 09:00 - 18:00, Mon - Sat </p>
        <div class="follow">
            <h4>Follow us!</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install Our App!</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="/images/pay/app.jpg" alt="">
            <img src="/images/pay/play.jpg" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="/images/pay/pay.png" alt="">
    </div>

    <div class="copright">
        <p>&copy; 2024, Pet Parade - Best Shop for Your Pet!</p>
    </div>
</footer>

<script src="script.js"></script>
</body>

</html>