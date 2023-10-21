<?php
session_start(); 
if (isset($_SESSION['uname'])&&isset($_SESSION['psw'])) {
    header('Location: adminhome.php');
}

// Process the login form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Authenticate the user and set session variables if login is successful
    if (/* Authentication is successful */) {
        $_SESSION['user_id'] = /* User ID */;
        // Redirect to the dashboard or another page
        header('Location: dashboard.php');
    } else {
        // Display an error message or redirect to the login page
    }
}
?>
<?php
session_start(); // Start a session

// Destroy the session to log the user out
session_destroy();

// Redirect to the login page or another landing page
header('Location: login.php');
?>





