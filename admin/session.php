<?php
session_start(); 
if (isset($_SESSION['uname'])&&isset($_SESSION['psw'])) {
    header('Location: adminhome.php');
}

// Process the login form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (/* Authentication is successful */) {
        $_SESSION['user_id'] = /* User ID */;
        // Redirect to the dashboard or another page
        header('Location: dashboard.php');
    } else {
        // Display an error message or redirect to the login page
    }
}
?>






