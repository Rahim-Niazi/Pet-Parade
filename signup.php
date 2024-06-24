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
    <title>Signup</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style/stylesheet.css">
</head>

<body>
<?php include 'header.php'; ?>


    <section id="signup" class="section-p1">
        <h2>Sign Up</h2>
        <form method="post" action="signup_process.php">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="text" name="first_name" placeholder="First Name"><br>
            <input type="text" name="last_name" placeholder="Last Name"><br>
            <input type="submit" value="Sign Up">
        </form>
    </section>

    <?php include 'footer.php'; ?>


    <script src="script.js"></script>
</body>

</html>
