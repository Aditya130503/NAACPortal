<?php
include('conn.php');
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $username = $_POST['uname'];
    $password = $_POST['psw'];
 

    $query = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];
        $pass=md5($password);

        // Check if the provided password matches the stored password
        if ($pass=$password) {
            echo "Login successful.";
            // You can set a session or perform other user-related tasks here
            $_SESSION['loggedin'] = true;
            // Redirect the user to a protected page (e.g., adminhome.html)
            header("Location: adminhome.html");
            exit();
        } else {
            echo "Incorrect username or password.";
        }
    }
}
// Handle form submission error here
?>
