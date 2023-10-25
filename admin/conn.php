<?php
	$conn = new mysqli('localhost', 'root', '', 'naac');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$host = 'localhost';
$database = 'naac';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>