<?php
session_start();

include("db_config.php");

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Delete product from the database
    $sql = "DELETE FROM products WHERE product_id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        $_SESSION['error_message'] = "Error preparing SQL statement: " . $conn->error;
    } else {
        $stmt->bind_param("i", $product_id);
        if (!$stmt->execute()) {
            $_SESSION['error_message'] = "Error executing SQL statement: " . $stmt->error;
        } else {
            // Check if the deletion was successful
            if ($stmt->affected_rows > 0) {
                // Product deleted successfully
                $_SESSION['success_message'] = "Product deleted successfully.";
            } else {
                // Product deletion failed
                $_SESSION['error_message'] = "Failed to delete product.";
            }
        }

        // Close the statement
        $stmt->close();
    }
} else {
    $_SESSION['error_message'] = "No product ID provided for deletion.";
}

// Redirect back to the page where the delete button was clicked
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
?>
