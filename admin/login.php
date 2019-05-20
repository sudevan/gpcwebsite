<?php
session_start();
include("../include.php");

if(isset($_POST['txtuser_name']) && isset($_POST['txtpwd']))
{

	$uname=$_POST['txtuser_name'];
	$pwd=sha1($_POST['txtpwd']);



	$query="select * from adminlogin where username='$uname' and password='$pwd' and isactive=1";
	$stmt=$conn->query($query); $stmt->setfetchmode(PDO::FETCH_ASSOC); $result=$stmt->fetch();
$_SESSION['UID']=$result['id'];

	if($result) {

		$_SESSION['UID']=$result['id'];
		
	$_SESSION['m']='101';
		

			header("location:admin-news.php");
		
		exit();
	} else {
		$_SESSION['i']='101';
$_SESSION['status']= "username/password is incorrect";
		  header("location:index.html");
		  exit();
		}
	//~ }
//~ else
//~ {
	//~ $_SESSION['in']='100';
	//~ $_SESSION['inid']=$eid;
//~ $_SESSION['stat']= "already logged in";

  //~ header("location:./");
	//~ }
}
?>

