<?php
include("head.php");

include("connection.php");
$target_dir = "images/";
$album="";
$target_file = $target_dir . basename($_FILES["file_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $check = getimagesize($_FILES["file_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {

        echo"<script>alert('File is not an image');</script>";
        echo "<script>window.location.href='photos.php'</script>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo"<script>alert('Sorry, file already exists.');</script>";
        echo "<script>window.location.href='photos.php'</script>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file_image"]["size"] > 50000000) {
    echo"<script>alert('Sorry, your file is too large.');</script>";
        echo "<script>window.location.href='photos.php'</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
echo"<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        echo "<script>window.location.href='photos.php'</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo"<script>alert('Sorry, your file was not uploaded.');</script>";
        echo "<script>window.location.href='photos.php'</script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $target_file)) {
    	$filename=$_FILES["file_image"]["name"];
        echo "The file ". basename( $_FILES["file_image"]["name"]). " has been uploaded.";
        echo"<script>alert('uploaded successfully');</script>";
        echo "<script>window.location.href='photos.php'</script>";

    } else {
        echo "<script>alert('error uploading file');</script>";
         echo "<script>window.location.href='photos.php'</script>";
}
	 $sql="INSERT INTO images (name,imgpath,type,album) VALUES ('$filename','$target_file','$imageFileType','normal')";
	 $result=mysqli_query($conn,$sql);
	 if ($result) {
 		echo "uploaded successfully";
	 }
	 else{
	 	echo "error uploading";
	 }
	}
include("tail.php");
?>