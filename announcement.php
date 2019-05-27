<!DOCTYPE html>
<html>
<head>
  <title>news</title>
</head>
<body>


<?php
include("connection.php");
include("head.php");
if (isset($_POST['add'])) {

      $headline=$_POST['headline'];
      $story=$_POST['story'];
      $link=$_POST['link'];
       $var=$_POST['date'];
       $date = str_replace('/', '-', $var );
       $newDate = date("Y-m-d", strtotime($date));
       $sql="INSERT INTO news (date,heading,news,link,isactive) values('$newDate','$headline','$story','$link','1')";
       $result = $conn->query($sql);

if ($result) {
  echo "<script>alert('news inserted');</script>";
}else{
   echo "<script>alert('error during insertion');</script>"; 
}
echo "<script>window.location.href='index.php';</script>";
}
if (isset($_POST['announce'])) {
      $head=$_POST['head'];
      $announcement=$_POST['announcement'];
      $link=$_POST['link'];
       $var1=$_POST['fromdate'];
       $date1 = str_replace('/', '-', $var1);
       $fromdate = date("Y-m-d", strtotime($date1));
        $var2=$_POST['todate'];
       $date2 = str_replace('/', '-', $var2 );
       $todate = date("Y-m-d", strtotime($date2));
       $sql="INSERT INTO announcement(fromdate,todate,headline,content,link) values ('$fromdate','$todate','$head','$announcement','$link')";
$result = $conn->query($sql);

if ($result) {
  echo "<script>alert('announcement inserted');</script>";
}else{
   echo "<script>alert('error during insertion');</script>"; 
}
echo "<script>window.location.href='index.php';</script>";

}
?>
</body>
</html>