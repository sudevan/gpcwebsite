<?php
include("head.php");

include("connection.php");
if(isset($_POST["upload"])) {
	$target_dir = "";
$album="";
	$albumtype=$_POST['album'];
	switch ($albumtype) {
		case 'director':
			$album="director";
		$target_dir="images/DTE/";
			break;
		case 'JK':
			$album="JK";
			$target_dir="images/JK/";
			break;
		case 'che':
			$album="che";
			$target_dir="images/che/";
				break;
		case 'adminblock':
			$album="adminblock";
			$target_dir="images/adblock/";
			break;
		case 'Alumni':
			$album="Alumni";
			$target_dir="images/Alumni/";
			break;
		case 'college':
			$album="college";
			$target_dir="images/college/";
			break;
		case 'newsletter':
			$album="newsletter";
			$target_dir="images/newsletter/";
			break;
		case 'iedcevent':
			$album="iedcevent";
			$target_dir="images/iedc/events/";
			break;
		case 'iedcachieve':
			$album="iedcachieve";
			$target_dir="images/iedc/achievements/";
			break;
		default:
			$album="other";
			$target_dir="images/";
			break;
	}
$target_file = $target_dir . basename($_FILES["file_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
	
    $check = getimagesize($_FILES["file_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {

        echo"<script>alert('image is large or invalid image');</script>";
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
        goto end;


    } else {
        echo "<script>alert('error uploading file');</script>";
         echo "<script>window.location.href='photos.php'</script>";
}	
end:
	 $sql="INSERT INTO images (name,imgpath,type,album) VALUES ('$filename','$target_file','$imageFileType','$album')";
	 $result=mysqli_query($conn,$sql);
	 if ($result) {
 		echo "uploaded successfully";

 		if ($album==="iedcachieve" || $album==="iedcevent") {
        	echo "<script>window.location.href='iedc.php'</script>";
        }
        else{
        echo "<script>window.location.href='photos.php'</script>";
    }
	 }
	 else{
	 	echo "error uploading";
	 }
	}
include("tail.php");
?>