<?php
include_once('db_config.php');
session_start();

$productsPerPage = 8;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($page - 1) * $productsPerPage;

function addToCart($product_id) {
    if(isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += 1;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
}

if (isset($_GET['add'])) {
    $product_id = intval($_GET['add']);
    addToCart($product_id);
    header('Location: cart.php');
    exit;
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
</head>

<body>
<?php include 'header.php'; ?>


<section id="page-header">
    <h2>Browse Our Shop</h2>
    <p>Only the best items for your pet!!</p>
</section>

<section id="product1" class="section-p1">
        <div class="pro-container">
            <?php
            $sql = "SELECT product_id, product_name, description, price, Images FROM products LIMIT $offset, $productsPerPage";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="pro" onclick="window.location.href=\'singleproduct.php?id=' . $row["product_id"] . '\';">';
                    echo '<img src="images/' . $row["Images"] . '" alt="">';
                    echo '<div class="des">';
                    echo '<span>' . htmlspecialchars($row["product_name"]) . '</span>';
                    echo '<h5>' . htmlspecialchars($row["description"]) . '</h5>';
                    echo '<div class="star">';
                    echo '<i class="fas fa-star"></i>';
                    echo '<i class="fas fa-star"></i>';
                    echo '<i class="fas fa-star"></i>';
                    echo '<i class="fas fa-star"></i>';
                    echo '<i class="fas fa-star"></i>';
                    echo '</div>';
                    echo '<h4>$' . htmlspecialchars($row["price"]) . '</h4>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No products found.";
            }
            ?>
        </div>
    </section>

<section id="pagination" class="section-p1">
        <?php
        $totalProductsSql = "SELECT COUNT(*) as total FROM products";
        $totalProductsResult = $conn->query($totalProductsSql);
        $totalProducts = $totalProductsResult->fetch_assoc()['total'];
        
        $totalPages = ceil($totalProducts / $productsPerPage);

        // Previous page link
        if ($page > 1) {
            echo '<a href="?page=' . ($page - 1) . '"><i class="fal fa-long-arrow-alt-left"></i></a>';
        }

        // Page numbers
        for ($i = 1; $i <= $totalPages; $i++) {
            echo '<a href="?page=' . $i . '">' . $i . '</a>';
        }

        // Next page link
        if ($page < $totalPages) {
            echo '<a href="?page=' . ($page + 1) . '"><i class="fal fa-long-arrow-alt-right"></i></a>';
        }
        ?>
    </section>


    <?php include 'footer.php'; ?>


<script src="script.js"></script>
</body>

</html>
