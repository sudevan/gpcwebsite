<?php include("head.php");
include "connection.php";
 ?>


<style type="text/css">
	.gridi{
		display: grid;
		grid-template-columns: repeat(auto-fill,minmax(130px,1fr));
		grid-gap: 15px;
	    padding: 10px;
	    padding-left: 100px;	
	    padding-right: 100px;

	}
	.gridi > div{
		text-align: center;
		border-bottom:1px solid red;
		padding: 10px;
		background-color:rgba(0,0,255,0.1);
	}
	.gridi > div > img{
		border-radius: 100%;
	}
</style>
<section>
	<div class="container">
		<div style="padding: 10px">
			<form method="get" action="organization.php">
			<button class="btn btn-danger" style="border-radius: 0;">MECHANICAL</button>
			<button class="btn btn-success" style="border-radius: 0;">CIVIL</button>
			<button class="btn btn-primary" style="border-radius: 0;">COMPUTER</button>
			<button class="btn btn-warning" style="border-radius: 0;">E E E</button>
			<button class="btn btn-info" style="border-radius: 0;">ELECTRONICS</button>
			<button class="btn btn-light" style="border-radius: 0;color: black">INSTRUMENTATION</button>
		</form>
		</div>
								<form name="newsform" id="newsform" method="post" action="announcement.php" class="adminform"enctype="multipart/form-data">
  <table width="50%" border="0" cellspacing="0" cellpadding="0">

  
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    	<td>Enter the PEN</td>
    	<td><input type="text" name="pen" id="pen"></td>
    </tr>    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Enter The Name</td>
      <td><input name="name" type="text" id="name"></td>
    </tr>    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Enter The Designation</td>
      <td><input name="designation" id="designation"></td>
    </tr>    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Enter The Department</td>
      <td><input type="text" name="department" id="department"></td>
    </tr>    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    	<td>add new image</td><td><input type="file" name="file_image"></td>
	
    </tr>    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    	<td><input type="submit" name="upload" value="add staff"></td>
    </tr>
  </table>
  </form>

		
			<h4  style="text-transform: uppercase;border-bottom: 1px solid black;"><?php echo "Department"; ?></h4>
			<!-- hod -->
			<h6 style="text-transform: uppercase;text-align: center;">Head of Department</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>
			</div>
			<!-- lecturers -->
			<h6 style="text-transform: uppercase;text-align: center;">Lecturers</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>
			</div>
			<!-- labstaff -->
			<h6 style="text-transform: uppercase;text-align: center;">Lab staff</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>
			</div>
			<!-- apprentis -->
			<h6 style="text-transform: uppercase;text-align: center;">Apprentis</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>	
			</div>	
		</div>

		
	</div>
</section>

<?php 
if (isset($_POST['upload'])) {
	$pen=$_POST['pen'];
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$department=$_POST['department'];
		$target_dir = "";
		$album="";
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
 ?>

<?php include("tail.php") ?>