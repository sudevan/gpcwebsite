<!DOCTYPE html>



  <?php

include("include.php");
$id=$_GET['temp'];

if(isset($_POST['submit']))
{
$target_dir = "uploads/";
$image="image";
$image1="thump";
$filename=$_FILES["fileToUpload"]["name"];
$filename1=$_FILES["fileTothump"]["name"];
$random_digit=rand(0000,9999);
$random_digit1=rand(0000,9999);$extension  = pathinfo($filename, PATHINFO_EXTENSION);
$extension1  = pathinfo($filename1, PATHINFO_EXTENSION);
$target_file1 = $target_dir.$image1.$random_digit1.'.'.$extension1;
$target_file = $target_dir.$image.$random_digit.'.'.$extension ;
$header=isset($_POST['header']) ? $_POST['header']:'';
$content=isset($_POST['content']) ? $_POST['content']:'';
$content1=isset($_POST['content1']) ? $_POST['content1']:'';
$date=isset($_POST['date']) ? $_POST['date']:'';
$link=isset($_POST['link']) ? $_POST['link']:'';
$idew=isset($_POST['idew']) ? $_POST['idew']:'';


	
 $r=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$r1=move_uploaded_file($_FILES["fileTothump"]["tmp_name"], $target_file1);


if ($r && $r1) {
$q="UPDATE `news` SET `date`='$date',`header`='$header',`content`='$content',`content1`='$content1',`image`='$target_file',`thumbnail`='$target_file1',`link`='$link' WHERE id='$idew'";
$a=$conn->query($q);
echo $q;
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              
      } 
else if ($r1) {
$q="UPDATE `news` SET `date`='$date',`header`='$header',`content`='$content',`content1`='$content1',`thumbnail`='$target_file1',`link`='$link' WHERE id='$idew'";
$a=$conn->query($q);
echo $q;

              echo "The file ". basename( $_FILES["fileTothump"]["name"]). " has been uploaded.";
      }
else if ($r)   {
$q="UPDATE `news` SET `date`='$date',`header`='$header',`content`='$content',`content1`='$content1',`image`='$target_file',`link`='$link' WHERE id='$idew'";
$a=$conn->query($q);
echo $q;
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              
      } 
else {
$q="UPDATE `news` SET `date`='$date',`header`='$header',`content`='$content',`content1`='$content1' , `link`='$link' WHERE id='$idew'";
$a=$conn->query($q);
              echo "Sorry, there was an error uploading your file.";
      }
    
    header("location:admin-news.php");
}


?>
                
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
               
              <li class="active"><a href="admin-news.php">News</a></li>
                <li  ><a href="admin-events.php">Events</a> </li>
                 <li><a href="admin-ticker.php">Web ticker</a> </li>
                  <li><a href="admin-album.php">Album</a> </li>
                 <li><a href="admin-gallery.php">Gallery</a> </li>
                
            </ul> <!-- /.main_menu -->
            <ul class="social_icons">
                <li><a href="logout.php"><span>Logout</span><i class="fa fa-facebook"></i></a></li>
                
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
                           
                          <li class="active"><a href="admin-news.php">News</a></li>
                <li ><a href="admin-events.php">Events</a> </li>
                 <li><a href="admin-ticker.php">Web ticker</a> </li>
                  <li><a href="admin-album.php">Album</a> </li>
                 <li><a href="admin-gallery.php">Gallery</a> </li>
                            
                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                            <li><a href="logout.php" data-toggle="tooltip" title="Logout"><span style="padding-right: 15px;"></span><i class="fa fa-power-off"></i></a></li>
                           
                        </ul> <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->
    
    
    
    <!-- Being Page Title -->
   
<?php 
$query="SELECT `id`, `date`, `header`, `content`,`content1`, `image` , `thumbnail`, `link` FROM `news` where id='$id'";
$ca=$conn->query($query);
$ca->setfetchmode(PDO::FETCH_ASSOC);
while($cr=$ca->fetch()){

?>

    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="" style="width: 100%; height: 50px;"></div>
                <div class="container">
                    <h3>Edit News</h3>
                    <form class="event-form" action="admin-news-edit.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-4 input-group">
                            <span class="input-group-addon">
                                <span style="color:#6b90ad">Date</span>
                            </span>
                            <input type="hidden" name="idew" value="<?php echo $cr['id']; ?>">
                            <input type="date" name="date" class="form-control" value="<?php echo $cr['date']; ?>"/>
                        </div>
                        <div class="col-md-6 input-group">
                            <span class="input-group-addon">
                                <span>thumbnail</span>
                            </span>
                            <input type="file" name="fileTothump" id="fileToUpload" class="form-control" src="<?php echo $cr['thumbnail']; ?>"/>
                             <span class="input-group-addon">
                                <span style="color:#6b90ad">150x115</span>
                            </span>
                        </div>
                          
                         <img src="<?php echo $cr['thumbnail']; ?>" alt="" height="42" width="42">
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Full size Image</span>
                            </span>
                           
                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" value="<?php echo $cr['image']; ?>"/>
                             <span class="input-group-addon">
                                <span style="color:#6b90ad">800x450</span>
                            </span>
                        </div>
                         
                        
                        <img src="<?php echo $cr['image']; ?>" alt="" height="42" width="42">
                       
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span style="color:#6b90ad">Title</span>
                            </span>
                            <input type="text" name="header" id="" class="form-control" maxlength="50"value="<?php echo $cr['header']; ?>"/>
                        </div>
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Event Description</span>
                            </span>
                            <textarea name="content" class="form-control" maxlength="1250"><?php echo $cr['content']; ?></textarea>
                        </div>
                   

                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Event Description</span>
                            </span>
                            <textarea class="form-control" name="content1" maxlength="500"><?php echo $cr['content1']; ?></textarea>
                        </div>
                        <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Hyperlink</span>
                            </span>
                            <input type="text" name="link" id="" class="form-control" value ="<?php echo $cr['link'];?>"maxlength="255"  />
                        </div>
     <?php
					}
					?>
 <div class="col-md-10 input-group" style="text-align:center">
 <input type="submit" value="Submit" name="submit" class="btn btn-primary">
 </div>
                    </form>
                </div>
                
             


          

               

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">
                
                


                

                

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->

     <!-- begin The Footer -->
        <!-- begin The Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <p>Government Polytechnic College <br>Kodumbu P O<br>Palakkad 678551<br><br>Ph:0491 257 2640</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Favourites</h4>
                        <ul class="list-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Departments</a></li>
                            <li><a href="#">Facilities</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title"><br></h4>
                        <ul class="list-links">
                            <li><a href="#">Staff</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Links</a></li>
                            <li><a href="#">Students Union</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Useful Links</h4>
                        <ul class="list-links">
                            <li><a href="#">Exam registration/Results</a></li>
                            <li><a href="#">syllabus and curriculum</a></li>
                            <li><a href="#">AICTE Approval</a></li>
                            <li><a href="#">AICTE Schemes and Scholarships</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title"><br></h4>
                        <ul class="list-links">
                            
                            <li><a href="#">National Digital Library</a></li>
                            <li><a href="#">DoTE</a></li>
                        </ul>
                    </div>
                </div>
               <!-- <div class="col-md-3">
                    <div class="footer-widget">
                        <ul class="footer-media-icons">
                            
                        </ul>
                    </div>
                </div>-->
            </div> <!-- /.row -->

            <div class="bottom-footer">
                <div class="row">
                    <div class="col-md-5">
                        <p class="small-text">&copy; Copyright 2017 GPTC Palakkad.  designed by <a href="http://www.techcloudinnovations.com" target="_blank">TechCloud Innovations.</a></p>
                    </div> <!-- /.col-md-5 -->
                    <div class="col-md-7">
                        <ul class="footer-nav">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-youtube"></a></li>
                            <!--<li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="#" class="fa fa-apple"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>-->
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
