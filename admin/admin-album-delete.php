 <?php

include("include.php");
$id=$_GET['temp'];
$content=isset($_POST['content']) ? $_POST['content']:'';
 $q="DELETE FROM `albums` WHERE id='$id'";
	 $a=$conn->query($q);
	 header("location:admin-album.php");
