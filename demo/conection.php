<?php

$conn = new mysqli("iptgptc.ac.in", "gptcpalakkad", "gptcpalakkad@123","gptcpalakkad");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$admissionno=$_GET['admissionno'];
#$admissionno=10100;
$sql="SELECT name from student where admissionno=$admissionno";


$result=$conn->query($sql);

$row = $result->fetch_assoc();

echo json_encode($row);
?>