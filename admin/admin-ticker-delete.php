 <?php

include("../include.php");
$id=$_GET['temp'];
$content=isset($_POST['content']) ? $_POST['content']:'';
 $q="DELETE FROM `ticker` WHERE id='$id'";
	 $a=$conn->query($q);
	 header("location:admin-ticker.php");
