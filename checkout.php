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
    <div class="checkout-page">
        <div id="checkout-page" class="checkout-form">
            <h2>CHECKOUT</h2>
            <div class="form-group-checkout">
                <label for="Name">Name</label>
                <input type="text" placeholder="Your Name" class="normal">
            </div>
            <div class="form-group-checkout">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" name="contact" placeholder="Your Contact Number" class="normal">
            </div>
            <div class="form-group-checkout">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your Email Address" class="normal">
            </div>
            <div class="form-group-checkout">
                <label for="address">Address</label>
                <textarea id="address" name="address" required class="normal"></textarea>
            </div>
            <button class="normal">PROCEED</button>
        </div>
    </div>
</body>
</html>