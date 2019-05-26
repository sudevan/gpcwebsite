<?php
 // session_start();
 include("connection.php");
	


 $username=$_POST['username'];
 $password=$_POST['password'];
   $sql="SELECT * from adminlogin where username='$username' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows > 0){
  
    echo "1";
    	} else {
   	 echo "0"
   	}
 
?>


 
  

 
  


