<?php
 // session_start();
 include("connection.php");
	


 $username=$_GET['username'];
 $password=$_GET['password'];
   $sql="SELECT * from adminlogin where username='$username' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows > 0){
  
    echo "login";
    	} else {
   	 echo "$sql";
   	}
 
?>


 
  

 
  


