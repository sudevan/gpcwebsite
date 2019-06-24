<?php 
   include("head.php");
   include("connection.php");

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
 </style>


 <!-- <section>
 	<div class="container">
 		<div class="row">
 			<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
              <div class="MultiCarousel-inner">
                <div class="item">
                   
                       <div class="col-md-12">
					
						<img src="images/DTE/DTE1.jpeg" alt=" " class="img-fluid"  >
				
				       </div>
                 
                </div>
                <div class="item">
                     <div class="col-md-12">
					
						<img src="images/DTE/DTE2.jpeg" alt=" " class="img-fluid" id="myImg">
				
				       </div>
                </div>
                <div class="item">
                     <div class="col-md-12">
					
						<img src="images/DTE/DTE3.jpeg" alt=" " class="img-fluid" id="myImg">
				
				       </div>
                </div>
                <div class="item">
                     <div class="col-md-12">
					
						<img src="images/DTE/DTE4.jpeg" alt=" " class="img-fluid" id="myImg">
				
				       </div>
                </div>
                <div class="item">
                    <div class="col-md-12">
					
						<img src="images/DTE/DTE5.jpeg" alt=" " class="img-fluid" id="myImg">
				
				       </div>
                </div>
                
                
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
 				
 			</div>
 			
 		</div>
 		
 	</div>

</section> -->
<!-- gallery -->
    <div class="gallery " id="gallery">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2">DIRECTOR</h3>
            <div class="row no-gutters">
 <?php
                        $sql = "SELECT * FROM images where album='director' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
</div></div></div>
    <!-- //gallery -->
    <!-- gallery -->
    <div class="gallery " id="gallery">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2">Sri. JAYAKUMAR</h3>
            <div class="row no-gutters">
                <?php
                        $sql = "SELECT * FROM images where album='JK' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
               
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- gallery -->
    <div class="gallery " id="gallery" style="display: none;">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2">CHE Lab</h3>
            <div class="row no-gutters">
                            <?php
                        $sql = "SELECT * FROM images where album='che' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
                  
                
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <div class="gallery " id="gallery">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2">ADMINISTRATIVE BLOCK INAGURATION</h3>
            <div class="row no-gutters">
                              <?php
                        $sql = "SELECT * FROM images where album='adminblock' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
           
             </div>
        </div>
    </div>
    <!-- //gallery -->
    <div class="gallery " id="gallery">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2">ALUMNI</h3>
            <div class="row no-gutters">
                              <?php
                        $sql = "SELECT * FROM images where album='Alumni' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 

            </div>
        </div>
    </div>
    <!-- //gallery -->
    <div class="gallery adminform" id="gallery">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2" >COLLEGE PHOTOS</h3>
            <div class="row no-gutters">
                              <?php
                        $sql = "SELECT * FROM images where album='college' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
           
            </div>
        </div>
    </div>
    <!-- //gallery -->
     <div class="gallery " id="gallery">
        <div class="container">
            <h3 class="text-bl text-center font-weight-bold mb-2">NEWSLETTER</h3>
            <div class="row no-gutters">
                              <?php
                        $sql = "SELECT * FROM images where album='newsletter' order by id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $path=$row['imgpath'];
echo "<div class='col-md-4 gallery-grid1'><img src='$path' alt='image' class='img-fluid'></div>";
}}
?> 
            
            </div>
        </div>
    </div>
    <!-- //gallery -->

 <?php  
    include("tail.php");
  ?>
