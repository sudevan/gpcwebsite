<?php
 session_start();
 include("connection.php");
	
 $message="";
 echo "$message";

 if(!empty($_POST["login"])) {
   $sql="SELECT * from adminlogin where username='".$_POST["username"]."' and password='".$_POST["password"]."'";
   $result=$conn->query($sql); 
   $row = $result->fetch_assoc();

 	if(is_array($row)) {
   	$_SESSION["username"] = $row['username'];
   	echo "successfully logined";
   	} else {
   	 $message = "Invalid Username or Password!";
   	}
 }
 if(!empty($_POST["logout"])) {
 	$_SESSION["username"] = "";
session_destroy();
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">admin login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
<form action="loginsample.php" style="margin-left: 5%; margin-right: 5%">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="username" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit"name="login" class="btn btn-default">login</button>
</form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
include("tail.php");
?>