 <?php
session_start();
include("connection.php");

$message="";
echo "$message";
if(!empty($_POST["adminlog"])) {

    $username=$_POST['user_name'];
    $password=$_POST['password'];

  $sql="SELECT * from users where email='$username' and password='$password'";
  

  if ($result=$conn->query($sql)) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        
  	$_SESSION["user_name"] = $row['email']; 
      $_SESSION['usertype']=$row['usertype'];
      
        echo"<script> window.location.href='adminpage.php';</script>";
        }
         
}else {
    $message = "Invalid Username or Password!";
    echo"$message";
   }
}
if(!empty($_POST["logoutadmin"])) {
	$_SESSION["user_name"] = "";
  $_SESSION['usertype']="";
    session_destroy();
    echo"<script> window.location.href='index.php';</script>";
}

?> 
