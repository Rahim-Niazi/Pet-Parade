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

    
    <section id="hero">
    <h4>Best Accessories</h4>
    <h2>Super Value Deals</h2>
    <h1>On all Products</h1>
    <p>Save more with deals upto 70% off!</p>
    <button>Shop now!</button>
    </section>


        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="images/features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>

            <div class="fe-box">
                <img src="images/features/f2.png" alt="">
                <h6>Online order</h6>
            </div>

            <div class="fe-box">
                <img src="images/features/f3.png" alt="">
                <h6>Save Money</h6>
            </div>

            <div class="fe-box">
                <img src="images/features/f4.png" alt="">
                <h6>Promotions</h6>
            </div>

            <div class="fe-box">
                <img src="images/features/f5.png" alt="">
                <h6>Happy Sell</h6>
            </div>

            <div class="fe-box">
                <img src="images/features/f6.png" alt="">
                <h6>Support</h6>
            </div>
            </section>
        
        <section id="product1" class="section-p1">
            <h2>Featured Products</h2>
            <p>Food for Pets</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/catfood.jpg" alt="">
                    <div class="des">
                        <span>Whiskas</span>
                        <h5>Kitten Wet food</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
            </div>
        </section>

        <section id="banner" class="section-m1">
            <h4>Exchange Services</h4>
            <h2>Up to <span>70% off</span> All pet products and accessories </h2>
            <button class="normal">Explore more</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>New Products</h2>
            <p>Latest in the market!</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
                <div class="pro">
                    <img src="images/chewtoy.jpg" alt="">
                    <div class="des">
                        <span>Chew Toy</span>
                        <h5>Dog Chew toy</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i> </a>
                </div>
            </div>
        </section>

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>Best Deals</h4>
                <h2>Buy 2 get 1 free!</h2>
                <span>High quality products!</span>
                <button class="white">Learn More</button>
            </div>
            <div class="banner-box">
                <h4>Best Deals</h4>
                <h2>Buy 2 get 1 free!</h2>
                <span>High quality products!</span>
                <button class="white">Learn More</button>
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
                <p4>From App Store or Google Play</p4>
                <div class="row">
                    <img src="/images/pay/app.jpg" alt="">
                    <img src="/images/pay/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="/images/pay/pay.png" alt="">
            </div>

            <div class="copright">
                <p>C 2024, Pet Parade - Best Shop for Your Pet!</p>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>

</html>