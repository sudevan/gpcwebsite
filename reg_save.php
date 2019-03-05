<?php 
include("include.php");
$name=isset($_POST['name']) ? $_POST['name']:'';
$mobile=isset($_POST['mobile']) ? $_POST['mobile']:'';
$email=isset($_POST['email']) ? $_POST['email']:'';
$batch=isset($_POST['batch']) ? $_POST['batch']:'';
$branch=isset($_POST['branch']) ? $_POST['branch']:'';

$query="INSERT INTO `registration`( `name`, `mobile`, `email`, `batch`, `branch`, `IsActive`) VALUES ('$name','$mobile','$email','$batch','$branch',1)";
$c=$conn->query($query);
header('Location: ' . $_SERVER['HTTP_REFERER']);
