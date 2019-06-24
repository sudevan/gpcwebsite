<?php 
include"head.php";
include "connection.php";

 ?>
 <style type="text/css">
    body{
        background-color:rgba(220,220,220, 0.3);
    }
     img{
        padding: 5px;
     }
     .adminform{
        display: none;
     }
     .bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
  color:#ffffff;
  font-size: 20px;
  background-color: rgb(0,0,0,.5);

}
 </style>
 <div class="gallery " id="gallery" style="padding :20px;">
        <div class="container">
            <h3 class="text-bl font-weight-bold mb-2" style="border-bottom: 1px solid black;">OFFICERS</h3>
            <div class="row no-gutters">
 <?php
                        $sql = "SELECT * FROM images where album='officers' order by id asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
        $position=$row['position'];
echo "<div class='col-md-4 gallery-grid1 container'><img src='$path' alt='image' class='img-fluid'><div class='bottom-right'><b>$position</b></div></div>";
}}
?> <br><br>
    <div class="gallery " id="gallery" style="margin-top: 20px;">
        <div class="container">
            <h3 class="text-bl  font-weight-bold mb-2" style="border-bottom: 1px solid black;">ACHIEVEMETS</h3>
            <div class="row no-gutters">
 <?php
                        $sql = "SELECT * FROM images where album='iedcachieve' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 

           </form></div></div></div>
    <!-- //gallery -->
    <div class="gallery " id="gallery" style="margin-top: 20px;">
        <div class="container">
            <h3 class="text-bl font-weight-bold mb-2" style="border-bottom: 1px solid black;">EVENTS</h3>
            <div class="row no-gutters">
 <?php
                        $sql = "SELECT * FROM images where album='iedcevent' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
</div></div></div>
 <?php 
 include"tail.php";
  ?>