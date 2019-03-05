 <?php

include("include.php");
$id=$_GET['temp'];
$content=isset($_POST['content']) ? $_POST['content']:'';
 $q="DELETE FROM `gallery` WHERE id='$id'";
	 $a=$conn->query($q);
	 header("location:admin-gallery.php");
