<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petparadedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $check_sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "<script>alert('Username or email already exists. Please try with a different username or email.');</script>";
        echo "<script>window.location.href = 'signup.php'</script>";

    } else {
        $sql = "INSERT INTO users (username, email, password, first_name, last_name)
                VALUES ('$username', '$email', '$password', '$first_name', '$last_name')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful. You will now be taken to the Login Page.')</script>";
            echo "<script>window.location.href = 'login.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
