<?php
include('conn.php');
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    // Check if the provided credentials match the stored values
    if ($username === "Admin" && $password === "Admin@123") {
        echo "Login successful.";
        // You can set a session or perform other user-related tasks here
        $_SESSION['loggedin'] = true;
        // Redirect the user to a protected page (e.g., admin.php)
        header("Location: adminhome.html");
        exit();
    } else {
       
    }
} else {
    // Handle form submission error here
    
}
?>
