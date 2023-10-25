<?php
include 'conn.php'; // Include your database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    // Fetch the hashed password from the database based on the provided username
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = 'Admin'");
    
    $stmt->execute();
    $stmt->bind_result($hashed_password);

    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
        // Password is correct; grant access
        session_start(); // Start a session for the user
        $_SESSION["username"] = $username;
        header("Location: adminhome.html"); // Redirect to the admin home page
        exit();
    } else {
        // Invalid username or password
        echo "Invalid credentials. Please try again.";
    }

    $stmt->close();
}

?>
