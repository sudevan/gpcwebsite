<?php
session_start();
include("include.php");

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <title>GPTC Palakkad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Government Polytechnic College">
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/modernizr.js"></script>
    
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
    <meta name="google-site-verification" content="sGGrhiBUnOzW5K1WJ7klR8k1z7HrqyFPH8yfGcue_BY" />
    <style type="text/css">
        .myfont
        {
            font-family: 'Karla', sans-serif;
        }

    </style>
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">

</head>
<body>

    <div id="popUp"><div class="floatingPop"><a href="reg.html"><img src="images/reglogo.png" /></a></div><div id="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div><img src="images/alu.jpeg"/></div>
    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="departments.html">Departments</a> </li>
                <li><a href="activities.html">Activities</a> </li>
                <li><a href="staff.html">Staff</a> </li>
                <li><a href="albums.php">Gallery</a></li>
                <li><a href="links.html">Links</a> </li>
                <li><a href="#">Students Union</a> </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="reg.html">Alumni2017</a></li>
            </ul> <!-- /.main_menu -->
            <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul> <!-- /.social_icons -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 header-left">
                    <ul class="small-links">
                        <li><i class="fa fa-phone"></i>&nbsp;&nbsp; Ph : 0491 257 2640</li>
                        
                    </ul>
                </div> <!-- /.header-left -->

                <div class="col-md-4">
                    <div class="logo">
                        <a href="index.html" title="Universe" rel="home">
                            <img src="images/logo.png" alt="palakkad poly logo">
                        </a>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 header-right">
                    <ul class="small-links">
                        
                        <li><i class="fa fa-envelope"></i> <a href="mailto:palakkadpolytechnic@gmail.com"> &nbsp;&nbsp;palakkadpolytechnic@gmail.com</a> </li>
                    </ul>
                </div> <!-- /.header-right -->
            </div>
        </div> <!-- /.container -->

        <div class="nav-bar-main" role="navigation">
            <div class="">
                <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                        <ul class="main-menu sf-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="departments.html">Departments</a> </li>
                <li><a href="activities.html">Activities</a> </li>
                <li><a href="staff.html">Staff</a> </li>
                <li><a href="grievance-cell.php">Grievance Redressal</a> </li>
                <li><a href="albums.php">Gallery</a></li>
                <li><a href="links.html">Links</a> </li>
                <li><a href="#">Students Union</a> </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="reg.html">Alumni2017</a></li>
                        </ul> <!-- /.main-menu -->

                        <ul class="social-icons pull-right">
                            <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                        </ul> <!-- /.social-icons -->
                </nav> <!-- /.main-navigation -->
            </div> <!-- /.container -->
        </div> <!-- /.nav-bar-main -->

    </header> <!-- /.site-header -->
	          <div class="col-sm-6">
               
                   <h4 class="blog-grid-title">Tenders</h4>
                                

                <div >
                    <div  >
                        <table style="width:100%" border="1">
                            <tr>
                                <th>S.No</th>
                                <th>Description</th>
                                <th>Due date and time</th>
                                <th>Opening date and time</th>
                            </tr>
                    <?php
                        $sql="SELECT description,DATE_FORMAT(duedate, '%d/%m/%Y %H:%i') as duedate,DATE_FORMAT(openingtime, '%d/%m/%Y %H:%i') as openingtime,filelocation FROM tender where duedate>now()";
                        $val=$conn->query($sql);
                        $val->setfetchmode(PDO::FETCH_ASSOC);
                        $index=1;
                        while($v=$val->fetch())
                        {        
                            $description=$v['description'];
                            $location=$v['filelocation'];
                            $duedate=$v['duedate'];
                            $openingtime=$v['openingtime'];
                                echo "<tr>\n";
                                echo "<td>$index</td>";
                                echo "<td> <a href='$location' target='_blank'>$description </a></td>";
                                echo "<td>$duedate</td>";
                                echo "<td>$openingtime  </td>";
                                echo "</tr>\n";
                                $index++;

                        }
                        ?>

                    </table>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 --> 
<br>
<br>
<br>

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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="departments.html">Departments</a></li>
                            <li><a href="activities.html">Activities</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget"><h4 class="footer-widget-title"><br></h4>
                        <ul class="list-links">
                            <li><a href="staff.html">Staff</a></li>
                            <li><a href="albums.php">Gallery</a></li>
                            <li><a href="links.html">Links</a></li>
                            <li><a href="#">Students Union</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Useful Links</h4>
                        <ul class="list-links">
                            <li><a href="links.html">Exam registration/Results</a></li>
                            <li><a href="links.html">syllabus and curriculum</a></li>
                            <li><a href="links.html">AICTE Approval</a></li>
                            <li><a href="links.html">AICTE Schemes and Scholarships</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title"><br></h4>
                        <ul class="list-links">
                            
                            <li><a href="links.html">National Digital Library</a></li>
                            <li><a href="links.html">DoTE</a></li>
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
    <script src="js/jquery.webticker.min.js"></script>
    <script>
        $(function(){
           // $('#popUp').delay(1500).show(400);
            })
        $("#webticker-update-example").webTicker({
            height:'50px'
            });
        $('#close-btn').click(function(){
            $('#popUp').hide(400);
            });
    </script>

<script src="./js/complaint.js"></script>
</body>
</html>