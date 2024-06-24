<!-- header.php -->
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<section id="header">
    <h3>Pet Parade</h3>
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
