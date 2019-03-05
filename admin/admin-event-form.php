<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Palakkad Poly Technic College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
        
    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    
    <link href="style.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet" media="screen">   
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    <style>
        .event-form .input-group{margin-bottom: 10px;}
    </style>
    
    <!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body>

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
               
                <li><a href="#">News</a></li>
                <li><a href="#">Events</a> </li>
                
            </ul> <!-- /.main_menu -->
            <ul class="social_icons">
                <li><a href="#"><span>Logout</span><i class="fa fa-facebook"></i></a></li>
                
            </ul> <!-- /.social_icons -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->


    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 header-left">
                    
                </div> <!-- /.header-left -->

                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html" title="Universe" rel="home">
                            <img src="images/logo.png" alt="palakkad poly logo">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    
                </div> <!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                           
                            <li><a href="#">News</a></li>
                            <li><a href="#">Events</a> </li>
                            
                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                            <li><a href="#" data-toggle="tooltip" title="Logout"><span style="padding-right: 15px;"></span><i class="fa fa-power-off"></i></a></li>
                           
                        </ul> <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->
    
    
    
    <!-- Being Page Title -->
   


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="" style="width: 100%; height: 50px;"></div>
                <div class="container">
                    <h3>New Event</h3>
                    <form class="event-form" action="addnews.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-4 input-group">
                            <span class="input-group-addon">
                                <span>Date</span>
                            </span>
                            <input type="date" name="date" class="form-control"/>
                        </div>
                        <div class="col-md-6 input-group">
                            <span class="input-group-addon">
                                <span>Image</span>
                            </span>
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control"/>
                        </div>
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Title</span>
                            </span>
                            <input type="text" name="header" id="" class="form-control"/>
                        </div>
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Event Description</span>
                            </span>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
<!--
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Event Description</span>
                            </span>
                            <textarea class="form-control"></textarea>
                        </div>
-->
 <input type="submit" value="Submit" name="submit">
                    </form>
                </div>
                
               <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("include.php");
if(isset($_POST['submit']))
{
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$header=isset($_POST['header']) ? $_POST['header']:'';
$content=isset($_POST['content']) ? $_POST['content']:'';
$date=isset($_POST['date']) ? $_POST['date']:'';
 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	 $q="INSERT INTO `events`(  `date`, `header`, `content`,`image`) VALUES ('$date','$header','$content','$target_file')";
	 $a=$conn->query($q);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>
                


          

               

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">
                
                


                

                

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->

    <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <p>The simple contact form below comes packed within this theme. <br><br>Mailing address:<br>877 Filbert Street<br> Chester, PA 19013</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Favourites</h4>
                        <ul class="list-links">
                            <li><a href="#">A to Z Index</a></li>
                            <li><a href="#">Admissions</a></li>
                            <li><a href="#">Bookstore</a></li>
                            <li><a href="#">Catalog / Classes</a></li>
                            <li><a href="#">Dining</a></li>
                            <li><a href="#">Financial Aid</a></li>
                            <li><a href="#">Graduation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Resources For</h4>
                        <ul class="list-links">
                            <li><a href="#">Future Students</a></li>
                            <li><a href="#">Current Students</a></li>
                            <li><a href="#">Faculty/Staff</a></li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">Postdocs</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Study</h4>
                        <ul class="list-links">
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Apply Now</a></li>
                            <li><a href="#">Scholarships</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">International student enquiries</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-apple"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; Copyright 2014. Universe designed by <a href="#">Esmeth</a></p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="events-list.html">Events</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div> <!-- /.col-md-7 -->
                </div> <!-- /.row -->
            </div> <!-- /.bottom-footer -->

        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
