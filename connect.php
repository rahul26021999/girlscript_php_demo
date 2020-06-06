<?php

$SERVER_NAME="localhost";
$DATABASE_NAME="girlscript";
$PASSWORD="password";
$USER_NAME="root";

    // Create connection
$conn = new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DATABASE_NAME);

    // Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>