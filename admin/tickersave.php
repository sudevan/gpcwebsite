 <?php

include("../include.php");
$content=isset($_POST['content']) ? $_POST['content']:'';
$estatus=isset($_POST['estatus']) ? $_POST['estatus']:'';
$tickid=isset($_POST['tickid']) ? $_POST['tickid']:'';
$link=isset($_POST['link']) ? $_POST['link']:'';

if($estatus==0){
 $q="INSERT INTO `ticker`( `content`, `link`) VALUES('$content','$link')";
	 $a=$conn->query($q);
	 
	 header("location:admin-ticker.php");
 }
 if($estatus==3){
	 
	 $a1="UPDATE `ticker` SET `content`='$content',`link`='$link' WHERE id='$tickid'";
	  $q1=$conn->query($a1);
	 
	 header("location:admin-ticker.php");
	 
	 }
