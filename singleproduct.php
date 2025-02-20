<?php
include_once('db_config.php');
session_start();

if (!isset($_GET['id'])) {
    die("Product ID is missing.");
}

$product_id = intval($_GET['id']); // Ensure the product ID is an integer to prevent SQL injection

// Fetch product details from the database
$sql = "SELECT product_name, description, price, Images FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    die("Product not found.");
}
$stmt->close();
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
</head>

<body>
<?php include 'header.php'; ?>


<section id="prodetails" class="section-p1">
    <div class="single-product-image">
        <img src="images/<?php echo htmlspecialchars($product['Images']); ?>" width="100%" id="MainImg" alt="">
    </div>

    <div class="single-pro-details">
        <h6><?php echo htmlspecialchars($product['product_name']); ?></h6>
        <h4><?php echo htmlspecialchars($product['description']); ?></h4>
        <h2>$<?php echo htmlspecialchars($product['price']); ?></h2>
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <input type="number" name="quantity" value="1" min="1" max="10">
            <button type="submit" class="normal">Add to Cart</button>
        </form>
        <h4>Product Details</h4>
        <span><?php echo htmlspecialchars($product['description']); ?></span>
    </div>
</section>

<?php include 'footer.php'; ?>


<script src="script.js"></script>
</body>

</html>
