 <?php

include("include.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$name=isset($_POST['name']) ? $_POST['name']:'';
$desc=isset($_POST['desc']) ? $_POST['desc']:'';
 $cat=isset($_POST['cat']) ? $_POST['cat']:'10';

	


 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	 $q="INSERT INTO `albums`( `name`, `thumb`, `description`, `category`) VALUES ('$name','$target_file','$desc','$cat')";
	 $a=$conn->query($q);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
		 $q="INSERT INTO `albums`( `name`,  `description`,  `category`) VALUES ('$name','$desc','$cat')";
	 $a=$conn->query($q);
        echo "Sorry, there was an error uploading your file.";
    }
    header("location:admin-album.php");



?>
