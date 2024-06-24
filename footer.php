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
        <p>&copy; 2024, Pet Parade - Best Shop for Your Pet!</p>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
<script src="script.js"></script>
