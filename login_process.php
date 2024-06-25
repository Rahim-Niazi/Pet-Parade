<?php
session_start();

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
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $row['user_id'];
            header("Location: index.php"); 
            exit();
        } else {
            echo "<script>alert('Login Unsuccessful. Invalid Password.')</script>";
            echo "<script>window.location.href = 'login.php'</script>";
        }
    } else {
        echo "<script>alert('Login Unsuccessful. Invalid Username.')</script>";
        echo "<script>window.location.href = 'login.php'</script>";
    }
}

$conn->close();
?>
