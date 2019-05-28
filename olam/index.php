<!DOCTYPE html>
<html>
<head>
	<title>OLAM2K19 RESULT</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>



  <div class="col-sm-8">
    <center><h3>OLAM2K19 RESULT</h3></center>
    <center><h4><a href="https://docs.google.com/spreadsheets/d/1cT2xeFK3zo9_u2cnW3ldGQaSRp7z0HGbAgt83Sk92fw/edit?usp=sharing"> Click Here for Detailed Result</a></h4></center>

      <h3 class='text-bl text-center font-weight-bold mb-2'>OLAM 2K19</h3><h6 class='text-colors text-center let-spa mb-5'></h6><div class='gallery py-5' id='gallery'><div class='container py-xl-5 py-lg-3'><div class='row no-gutters'><div class='col-md-12 gallery-grid1' style="background: beige">
       <?php
        $dir = "./images";
        $images = glob($dir . "/*{.jpg,.png}",GLOB_BRACE);
        $count=0;
        foreach($images as $file)
        {
 
            echo "<a href='#' > <img src='$file' id='$count' alt='$file' style='width=100%' onclick='pop(this.id)' class='img-thumb'/></a>  \n";
            $count++;

        }
        ?>
        </div></div></div></div>
<div id="myModal" class="modal">
  <span class="close" onclick="fade()">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
   
</body>

<style type="text/css">
  .img-thumb{
    width: 150px;
    height: auto;
    box-shadow: 0 0 2px 1px grey;
    margin-left: 10px;
  }
  img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<script type="text/javascript">var modal = document.getElementById('myModal');
  function pop(arg){
  

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById(arg);
var modalImg = document.getElementById("img01");

  modal.style.display = "block";
  modalImg.src = img.src;
  
}

// Get the <span> element that closes the modal
 function fade() { 

  modal.style.display = "none";
}
</script>
</body>
</html>