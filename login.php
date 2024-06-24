<?php
include_once('db_config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    // User is logged in, show logout button
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    // User is not logged in, show sign up and login links
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

    <section id="login" class="section-p1">
        <h2>Login</h2>
        <form method="post" action="login_process.php">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </section>

    <footer class="section-p1">
            <div class="col">
                <h4>Contact</h4>
                <p><strong>Address:</strong> Example Road, Example Street, Filler City</p>
                <p><strong>Phone:</strong> +02 1234 987/ (+92) 01 2345 5654</p>
                <p><strong>Shop Hours:</strong> 09:00 - 18:00, Tues - Sat </p>
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
                <a href="about.php">About us</a>
                <a href="contact.php">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <?php
                    if (isset($_SESSION['user_id'])) {
                    echo '<a href="logout.php">Logout</a>';
                    } else {
                    echo '<a href="login.php">Login</a>';
                    }
                    ?>
                <a href="cart.php">View Cart</a>
                <a href="contact.php">Help</a>
            </div>

            <div class="col install">
                <h4>Install Our App!</h4>
                <p4>From App Store or Google Play</p4>
                <div class="row">
                    <img src="./images/pay/app.jpg" alt="">
                    <img src="./images/pay/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="./images/pay/pay.png" alt="">
            </div>

            <div class="copright">
                <p>C 2024, Pet Parade - Best Shop for Your Pet!</p>
            </div>
        </footer>
        
    <script src="script.js"></script>
</body>

</html>
