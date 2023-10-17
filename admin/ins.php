<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $curricularPlanning = $_POST['cur'];
    $additionalInfo = $_FILES['add']; // Assuming you want to store the file name
    $link = $_POST['link'];

    // Connect to the database (replace with your database credentials)

    $conn = new mysqli('localhost', 'root', '', 'naac');
    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO eval_data (curricular_planning, additional_info, link) VALUES ('$curricularPlanning', '$additionalInfo', '$link')";

    if ($conn->query($sql) === TRUE) {
        echo "Data added to the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
