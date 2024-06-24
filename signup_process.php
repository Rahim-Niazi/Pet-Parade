<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petparadedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $sql = "INSERT INTO users (username, email, password, first_name, last_name)
            VALUES ('$username', '$email', '$password', '$first_name', '$last_name')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful. You will now be taken to Home Page.')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
