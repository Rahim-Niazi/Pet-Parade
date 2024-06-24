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
    <?php include 'header.php'; ?>

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


        <?php include 'footer.php'; ?>


        <script src="script.js"></script>
    </body>

</html>