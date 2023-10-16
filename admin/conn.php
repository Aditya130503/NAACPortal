<?php
	$conn = new mysqli('localhost', 'root', '', 'naac');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	else
		{echo"ok";}
?>