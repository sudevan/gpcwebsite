<?php

	$servername 	= "gptcpalakkad.ac.in";
	$username 	= "gpc_user";
	$password 	= "1{IaTIGG0^c$";
	$database		= "gpcpalakkad";

$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>