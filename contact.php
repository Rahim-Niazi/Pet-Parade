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


        <section id="page-header" class="contact-header">
            <h2>Reach out to us!</h2>
            <p>Leave a message, We would love to hear from you!</p>
        </section>

        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>Get in Touch</span>
                <h2>Visit one of our shops or contact us today</h2>
                <h3>Head Office</h3>
                <div>
                    <li>
                        <i class="fal fa-map"></i>
                        <p>87 Example Street H7 Sector Indiana</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>contact@example.com</p>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>contact@example.com</p>
                    </li>
                    <li>
                        <i class="fal fa-clock"></i>
                        <p>Monday To Saturday, 9:00 to 18:00</p>
                    </li>
                </div>
            </div>
            <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10162762.85882964!2d-14.214609271322574!3d51.54727172856101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48763c60e2757d05%3A0x9c86f7ea684901f1!2sUniversity%20of%20Hertfordshire!5e0!3m2!1sen!2s!4v1718706375696!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
            </div>
        </section>

        <section id="form-details">
            <form action="">
                <span>Leave a Message</span>
                <h2>We love to hear from you.</h2>
                <input type="text" placeholder="Your Name">
                <input type="text" placeholder="E-mail">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button class="normal">Submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="./images/people/1.png" alt="">
                    <p><span>John Doe</span> Founder <br>Phone: +000 123 456 78 99 <br>Email: founder@example.com </p>
                </div>
                <div>
                    <img src="./images/people/2.png" alt="">
                    <p><span>Jonathan Do-er</span> Second-In Command <br>Phone: +000 987 654 32 11 <br>Email: 2ndinline@example.com </p>
                </div>
                <div>
                    <img src="./images/people/3.png" alt="">
                    <p><span>Jane Dodoe</span> General Manager <br>Phone: +000 091 832 59 22 <br>Email: manager@example.com </p>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>


        <script src="script.js"></script>
    </body>

</html>