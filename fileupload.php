<!DOCTYPE html>
<html>
<body>

<form action="fileupload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload file" name="submit">
</form>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("include.php");
if(isset($_POST['submit']))
{
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	 $q="INSERT INTO `sample`(  `date`, `header`, `content`,`image`) VALUES ('2017-11-15','ertret','rewret','$target_file')";
	 $a=$conn->query($q);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}?>
