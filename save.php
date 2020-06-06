<?php

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
	$error="Only letters and white space allowed in name"; 
}
else{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error="Invalid email format";   
	}
	else{
		if(!preg_match("/^[0-9]{10}$/",$number)){
			$error="Enter the valid phone number";   
		}
	}
}

if(!isset($error))
{
	require('connect.php');

	$sql = "SELECT * from students where email='$email'";
	$result=$conn->query($sql);
	
	if ($result->num_rows > 0) 
	{
		$error="You have already Registered with this Email";
	}
	else
	{
		$sql = "INSERT INTO students (name, email, number) VALUES ('$name', '$email', '$number')";
		if ($conn->query($sql) === TRUE) {
			$success ="Successfully Registered";
		} else {
			$error = "Something Went wrong Please try again later";
		}
		$conn->close();
	}
}


?>