<?php
include('conn.php'); // Include your database connection

// Fetch existing user records
$sql = "SELECT username, password FROM users";
$stmt = $pdo->query($sql);

// Iterate through the records and update passwords
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $username = $row['username'];
    $plainTextPassword = $row['password'];
    $hashedPassword = password_hash($plainTextPassword, PASSWORD_BCRYPT);

    // Update the password in the database
    $updateSql = "UPDATE users SET password = :password WHERE username = :username";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->bindParam(':password', $hashedPassword);
    $updateStmt->bindParam(':username', $username);
    $updateStmt->execute();
}

echo "Existing passwords have been hashed.";
?>
