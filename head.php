	<?php 
	
	include("connection.php");
	
   ?>
	<head>
	<title>Govt. Polytechnic College, Palakkad</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="keywords" content="Studies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css/styl.css" type="text/css" media="all">
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style-custom.css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="css/bootnavbar.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico/favicon.ico" />


    <meta name="description" content="Multi level hover dropdown Navbar for bootstrap 4">
    <meta name="keywords" content="Multi level hover dropdown Navbar for bootstrap 4">
	<style type="text/css">
		body{
    padding: 0px;
    margin: 0px;
}
	</style>
	  <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="js/jquery-latest.pack.js" type="text/javascript"></script>
<script src="js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
  $(".newsticker-jcarousellite").jCarouselLite({
    vertical: true,
    hoverPause:true,
    visible: 3,
    auto:500,
    speed:1000
  });
});
</script>
<style type="text/css">
  
</style>
</head>

<body>
	<nav class="navbar navbar-dark navbar-expand-lg navbar-light  " style="background: #123073; padding: 0px;margin:0px;height:auto;">
		
		 
		<a class="navbar-bran" href="#">
          <img src="logo1.png" style="height:auto;"  alt="" style="border-color-bottom: 10px solid red" class="img-fluid">
        </a>
         <div class="ml-auto head">
         	<ol class="padding10">
         		<li><a href="" class="text-wh"><i class="fa fa-phone"></i>0491 257 2640</a></li>
         		<li><a class="text-wh" style="text-transform: lowercase;" href="mailto:palakkadpolytechnic@gmail.com"><i class="fa fa-envelope text-wh"></i> palakkadpolytechnic@gmail.com</a></li>
         	</ol>

         </div>
		<?php
		if(isset($_SESSION['usertype']))
		{
		if($_SESSION['usertype']==="admin")
		{
		?><form action="adminlogin.php" method="post">
         <input class="btn btn-danger" type="submit" style="padding: 3px;margin-right: 5px"  id="login" name="logoutadmin" value="logout">
		 </form>
		<?php 
		}
		}
		?>
     
  <button class="navbar-toggler ml-auto"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


</nav>
<nav class="navbar navbar-expand-lg navbar  light bg-light sticky-top mr-auto" style="background:rgba(220,220,220);padding: 0px;border-bottom: 1px solid #2f4f4f">
  
<div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav">
    	        <!-- home -->
   			    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
   			    <!-- about us -->
   			    <li class="nav-item dropdown">
   			      <a href="#" class="nav-link dropdown-toggle" id="aboutus"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
   			      <ul class="dropdown-menu" aria-labelledby="aboutus">
   			      	<li><a href="pdf_files/g_body.pdf" target="_blank" class="dropdown-item">Governing Body</a></li>
   			      	<li><a href="pdf_files/g_body.pdf" target="_blank" class="dropdown-item">College Academic Counsil</a></li>
<!--    			      	<li><a href="#" class="dropdown-item">Academic counsil</a></li>
 -->   			      	<li><a href="pdf_files/committi.pdf" class="dropdown-item" target="_blank">Students Counsil</a></li>
   			      	<li><a href="pdf_files/committi.pdf" class="dropdown-item" target="_blank">Ethics Commity</a></li>
   			      	<li><a href="pdf_files/pta.pdf" class="dropdown-item" target="_blank">P T A</a></li>
   			      	<li><a href="pdf_files/c_a_board.pdf" class="dropdown-item" target="_blank">College Advisory Board</a></li>
   			      </ul>
   			    </li>
   			    <!-- academics -->
                <li class="nav-item dropdown">
   			      <a href="#" class="nav-link dropdown-toggle" id="academics"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
   			      <ul class="dropdown-menu" aria-labelledby="academics">
   			      	<li class="nav-item dropdown">
   			      		<a href="#" class="dropdown-item dropdown-toggle" id="dept"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departments</a>
   			      		<ul id="dept" class="dropdown-menu">
   			      			<li><a href="mech.php" class="dropdown-item">Mechanical Engineering</a></li>
   			      			<li><a href="civil.php" class="dropdown-item">Civil Engineering</a></li>
   			      			<li><a href="eee.php" class="dropdown-item">Electrical And Electronics Engineering</a></li>
   			      			<li><a href="electronics.php" class="dropdown-item">Electronics Engineering</a></li>
   			      			<li><a href="chm.php" class="dropdown-item">Computer hardware Engineering</a></li>
   			      			<li><a href="it.<?php  ?>" class="dropdown-item">Instrumentation Engineering</a></li>
   			      			
   			      		</ul>
   			      	</li>

   			      	<li><a href="https://docs.google.com/document/d/e/2PACX-1vSX7-fmQGlSm7pATn2sBhWh6ubw16uW2quQKzDg3x1EG7KZYy5FY8y2ZgzMFrhy8SY4QkgtMdBPFtXL/pub" class="dropdown-item" target="_blank">placement</a></li>
   			      	<li><a href="#" class="dropdown-item">Academic calender</a></li>
   			      	<li><a href="#" class="dropdown-item">college calender</a></li>
   			      	<li><a href="#" class="dropdown-item">Library</a></li>
               <li><a href="http://117.211.126.230/moodle" class="dropdown-item">Moodle</a></li>
                <li><a href="https://docs.google.com/document/d/e/2PACX-1vTnBT9zHsDo22ENPbFEuPoCrObJovxQ8-LPoci2HJTs4LeBoAZuIQ9Qeod_221sWdknIee88HAFkkVB/pub" class="dropdown-item" >Students online utilities</a>
   			      	</li>
   			      </ul>
   			    </li>
   			    <!-- Admissions -->
                  <li class="nav-item dropdown">
                  	<a href="#" class="nav-link dropdown-toggle" id="admissions" role="button" data-toggle="dropdown" aria-haspop="true" aria-expanded="false">Admissions</a>
                     <ul class="dropdown-menu" aria-labelledby="admissions">
                     	<li><a class="dropdown-item" href="http://www.polyadmission.org/index.php?r=site%2Fhome" target="_blank">Apply for admission</a></li>
                     	<li><a class="dropdown-item" href="http://www.polyadmission.org/files/prospectus-2018-en.pdf" target="_blank">Prospectus</a></li>
                     	
                     </ul>
                  </li>
   			    <!-- exams -->
   			    <li class="nav-item"><a class="nav-link" href="https://tekerala.org/" target="_blank">exams</a></li>
   			    <!-- industry -->
   			    <li class="nav-item dropdown">
   			    	<a href="#" class="nav-link dropdown-toggle" id="industry" role="button" data-toggle="dropdown" aria-haspop="true" aria-expanded="false">Industry</a>
   			    	<ul class="dropdown-menu" aria-labelledby="industry">
   			    		<li><a class="dropdown-item" href="comingsoon.php">IIIC</a></li>
   			    		<li><a class="dropdown-item" href="comingsoon.php">MOUs</a></li>
   			    		<li><a class="dropdown-item" href="comingsoon.php">Industrial visit</a></li>
   			    		
   			    	</ul>

   			    </li>
   			    <!-- activities -->
   			    <li class="nav-item dropdown">
   			    	<a href="#" class="nav-link dropdown-toggle" id="activities" role="button" data-toggle="dropdown" aria-haspop="true" aria-expanded="false">Activities</a>
   			    	<ul class="dropdown-menu" aria-labelledby="activities">
   			    		<li><a class="dropdown-item" href="activities.php">NSS</a></li>
   			    		<li><a class="dropdown-item" href="activities.php">NCC</a></li>
   			    		<li><a class="dropdown-item" href="activities.php">I E D C</a></li>
   			    		<li><a class="dropdown-item" href="activities.php">Boomithra Sena</a></li>
   			    		<li><a class="dropdown-item" href="pdf_files/pta.pdf" target="_blank">P T A</a></li>
   			    		
   			    	</ul>

   			    </li>
   			    <!-- iedc -->
   			    <li class="nav-item"><a class="nav-link" href="iedc.php">IEDC</a></li>
   			    <!-- organizations -->
   			    <li class="nav-item dropdown">
   			    	<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" id="Organization" aria-haspopup="true" aria-expanded="false">Organization</a>
   			    	<ul class="dropdown-menu" aria-labelledby="Organization">
   			    		<li><a class="dropdown-item" href="#">Administration</a></li>
   			    		<li><a class="dropdown-item" href="#">H O D</a></li>
   			    		<li><a class="dropdown-item" href="#">Lecturers</a></li>
   			    		<li><a class="dropdown-item" href="#">Lab Staffs</a></li>
   			    		<li><a class="dropdown-item" href="#">Apprenties</a></li>
   			    	</ul>
   			    </li>
   			    <!-- gallery -->
   			    <li class="nav-item"><a class="nav-link" href="photos.php">Gallery</a></li>
   			    <!-- more -->
   			    <li class="nav-item dropdown">
   			    	<a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="more" aria-haspopup="true" aria-expanded="false">More</a>
   			    	<ul class="dropdown-menu" aria-labelledby="more">
   			    		<li><a href="reg.php" class="dropdown-item">Alumni</a></li>
   			    		<li><a href="links.php" class="dropdown-item">More Links</a></li>
   			    		<li><a href="grievance-cell.php" class="dropdown-item">Grievance Submission</a></li>
                <li><a href="https://swayam.gov.in/" class="dropdown-item">Self Learning</a></li>
                <li><a href="https://nptel.ac.in/" class="dropdown-item">NPTEL</a></li>
                <li><a href="https://www.aicte-india.org/feedback/" class="dropdown-item">Feedback Facility</a></li>
   			    		
   			    	</ul>
   			    </li>
   			</ul>
   		</div>
   	</nav>

   



