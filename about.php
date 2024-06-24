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
        <title>Petparade</title>
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

        <section id="page-header" class="about-header">
            <h2>Know about Us!</h2>
            <p>Get to know more about "Pet Parade"!</p>
        </section>

        <section id="about-head" class="section-p1">
            <img src="./images/sample img.jpg" alt="">
            <div>
                <h2> Who we are.</h2>
                <th>At our pet shop, we're dedicated to ensuring that every pet owner feels confident that they're providing the best for their furry companions. From premium-quality food and cozy bedding to engaging toys and essential accessories, we curate a range of products that cater to every pet's needs. Our knowledgeable staff are always ready to offer personalized guidance and recommendations, ensuring that every pet owner leaves with the right solutions for their beloved pets. We believe that every pet deserves the best care and attention, and we're here to make that journey enjoyable and fulfilling for both pets and their owners.</p>
                <abbr title="">We are currently a small startup and wish to spread the joy of pets all across the globe</abbr>
                <br><br>

                <marquee backgroundcolor="#CCC" loop="-1" scrollamount="5" width="100%">Nestled in town, a tiny pet shop bursts with joy—colorful toys, cozy beds, and happy tails galore. From chirping birds to fluffy bunnies, it's a haven of happiness for every creature. With each satisfied customer, its mission to spread joy, one pet at a time, shines brighter, a testament to the power of companionship.</marquee>
            </div>
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