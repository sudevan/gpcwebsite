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
    <script src="js/jquery-1.10.2.min.js"></script>
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
        slideshow
        {
            width: 300px;
            height: 200px;
        }
    </style>
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
                <li><a href="grievance-cell.php">Grievance Redressal</a> </li>
                <li><a href="albums.php">Gallery</a></li>
                <li><a href="links.html">Links</a> </li>
                <li><a href="#">Students Union</a> </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="reg.html">Alumni</a></li>
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
                <li class="active"><a href="index.php">Home</a></li>
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
                <li><a href="reg.html">Alumni</a></li>
                <li><a href="http://117.211.126.232/moodle">Moodle</a></li>
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
    
    <div class="container">
        <div class="row" style="background-color:#bceef1">
            <div class="col-sm-6" >
                <h2>Vision</h2>
                <font size="3" color="red">
                    To be a centre of excellence in engineering education for providing valuable resources to industries and society.
                </font>
                <h2>Mission</h2>
                <font size="3" color="red">
              
                <ol type="I"> 
                <li>Providing quality education in engineering and technology </li>
                <li >Involving in the development of society through technology transfer, entrepreneurship and industry interaction</li>
                <li>To inculcate social responsibility and ethical values among students through value education</li>
             </ol>
  
            </font>
            <h2 class="blinking"> <a href="https://goo.gl/forms/teDeKxfPVjcxf22D2"> Student Registration </a></h2>
            </div>
            <div class="col-sm-6">
                <div class="main-slideshow">
                    <div class="flexslider" >
                        <ul class="slides">
                    <?php
                        $dir = "./images/slideshow";

                        $images = glob($dir . "/*{.jpg,.png}",GLOB_BRACE);

                        foreach($images as $file)
                        {
                                echo "<li>\n";
                                echo "<img src='$file' alt='$file' \n";
                                echo "</li>\n";
                        }
                        ?>

                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
        </div>
            <div class="row">
           <div style="clear: both; width: 100%; height: 5px;"></div>
            <div class="col-md-12">
				
                <div class="ticker">
                    <ul id="webticker-update-example"  >
						<?php 
						$qu="SELECT `id`, `content`, `link` FROM `ticker`";
						$c=$conn->query($qu);
						$c->setfetchmode(PDO::FETCH_ASSOC);
						while($cc=$c->fetch()){
						 ?>
                        <li data-update="item1" style="font-size:25px;"><a href="<?php echo $cc['link'];?>" target="_blank"><?php echo $cc['content']; ?></a></li>   
                         <?php } ?>
                    </ul>
                </div>
               
            </div>
           
            
            
                    <div class="col-md-12 ">
                        <div class="widget-item" style="text-align: justify;">
                            <h2 class="welcome-text">About GPTC Palakkad</h2>
                            <p>The <strong>Govt.PolyTechnic College</strong>, palakkad was established in the year 1980 under the Directorate of Technical Education,Govt. of Kerala, with noble vision of empowering the people by offering good quality technical education. 
                            The polytechnic college ia approved by AICTE,New Delhi and offer six diploma programmes in Engineering Viz. Civil Engineering, MEchanical Engineering, Electronics Engineering, Instrumentation Technology, Computer Hardware Maintanance and Electrical & Electronics Engineering. 
                            The Polytechnic College is located at Palakkad in Palakkad Taluk, Palakkad District in the heart of palakkad town by national highway 47, spread 33 acres of land of panoramic greenery. Coimbatore International Airport is around 60km away from here.
                            Thirty four years of exemplary performance has established our college as a centre of excellence and is one of the most reputed institution of Kerala. Apart from the regular courses, evening diploma course, vocational courses are offered here. <br> <br> </p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                
        </div>
    </div>
    


    <div class="container">
        <div class="row">
            
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                 <!-- /.row -->

                <div class="row">
                   
            <div class="col-md-4">
             <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Courses</h4>
                        </div>
                        <div class="widget-inner">
                            <ul class="homeCourse">
                                <li>Civil Engineering</li>
                                <li>Civil Engineering (Part-time)</li>
                                <li> Mechanical Engineering </li>
                                <li>Mechanical Engineering (Part-time)</li>
                                <li>Electrical & Electronics Engg</li>
                                <li>Electronics Engineering</li>
                                <li>Electronics Engineering (Part-time)</li>
                                <li>Instrumentation Engineering</li>
                                <li>Instrumentation Engineering(Part-time)</li>
                                <li>Computer Hardware Engineering</li>
                                <li>Computer Hardware Engineering(Part-time)</li>
                            </ul>
                           </div>     
                    </div>
            </div>
                    <!-- Show Latest Blog News -->
                    <div class="col-md-4">
                        <div class="widget-main ">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Latest News</h4>
                            </div> <!-- /.widget-main-title -->
                             <?php 
                   
                    	$query = "SELECT `id`, DATE_FORMAT(date,'%d/%m/%Y') as date, `header`, `content`, `image`, `thumbnail`, `link` FROM `news`   order by id desc limit 3";
                    	$query1=$conn->query($query);
						$query1->setfetchmode(PDO::FETCH_ASSOC);
						
						while($query23=$query1->fetch())
						{
							
                    ?>
                            <div class="widget-inner">
								
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="news.php"><img src="admin/<?php echo $query23['thumbnail'];?>" width="42" height="42" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="<?php echo $query23['link'];?>" target="_blank"><?php echo $query23['header'];?></a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#"><?php echo $query23['date'];?></a></span> <span><a href="#"></a></span></p>
                                   
                                   </div>
                                 
                               <!-- /.blog-list-post -->
                               
                                </div> <!-- /.blog-list-post -->
                                
                            </div> <!-- /.widget-inner -->
                              <?php } ?>
                        <div style="width:100%; height: 22px;"></div>
                        </div> <!-- /.widget-main -->
    
                    </div> <!-- /col-md-6 -->
                    
                    <!-- Show Latest Events List -->
                    <div class="col-md-4">
                        <div class="widget-main page-feed">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Events</h4>
                            </div> <!-- /.widget-main-title -->
                             <?php
              
                    	$query = "SELECT `id`,  date, `header`, `content`, `image`, `thumbnail`, `link` FROM `events`   order by id desc limit 3";
                    	$query1=$conn->query($query);
						$query1->setfetchmode(PDO::FETCH_ASSOC);
						
						while($query23=$query1->fetch())
						{
							$show_issue_date=$query23['date'];
							$time=strtotime($show_issue_date);

                            $month=date("F",$time);
                            $date=date("d",$time);

                        ?>    <div class="widget-inner">
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month"><?php echo substr($month,0,3);?></span>
                                        <span class="s-date"><?php echo $date;?></span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="<?php echo $query23['link'];?>" target="_blank"><?php echo $query23['header'];?></a></h5>
                                        <p class="event-small-meta small-text"><?php echo substr($query23['content'],0,50);?></p>
                                            <div style="width:100%; height: 28px;"></div>
                                    </div>
                                </div>
                                
                            </div> <!-- /.widget-inner -->
                               <?php } ?>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-6 -->

                    
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">College History</h2>
                            <p>The Govt. Polytechnic College, Palakkad is situated in a vast 33 Acres of land adjacent
to one of the largest Industrial Area of Kerala state. Palakkad district is considered to
be one of the socially and economically backward districts of Kerala. The very
existence of a Government college like ours plays an important role in the social
development of the district.<br><br>Established in <strong>1980,</strong> the College started under the respectful leadership of
Sri. Ramachandra Pisharody, with two speciality-
<strong>3 year engineering Diploma courses in Foundry Technology and Power electronics.</strong><br><br>In the next year<strong> (1981)</strong> itself running beyond the time, a new 3 year diploma course in
<strong>Instrument Technology </strong>started which was a milestone for this college. The course at
that time was rarest among those in the whole world, and its fruits were very sweet
too. Most of the alumni of Instrument Technology course could find their international
career successfully.<br><br>In the year <strong>1984, 3 year Diploma course in Civil Engineering </strong>started and also
standardized the courses Foundry Technology into Mechanical Engineering and Power
Electronics into Electronics Engineering.<br><br>Advent of computer technology in industries, on par with training the younger
generation in the year <strong>1990, Computer Hardware & Maintenance</strong> 3 year diploma
course was started in the college.<br><br>But the absence of diploma course in one of the basic engineering discipline was a
major defiiciency and we could overcome and fulfill this by starting Diploma course in
<strong>Electrical and Electronics Engineering from the year 2014.</strong><br><br><strong>The College also offers Part-time diploma courses</strong> in most of the disciplines for
the working professionals of the nearby industries. The academic rating of our college
is considered to be one of the best in the whole state.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">PLACEMENTS</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="our-campus clearfix">
                                    <ul class="placement-banner">
                                        <li><a target="_blank" href="http://techcloudinnovations.com"><img src="images/campus/tc.jpg" alt=""></a></li>
                                        <li><img src="images/campus/dell.jpg" alt=""></li>
                                        <li><img src="images/campus/ech.jpg" alt=""></li>
                                        <li><img src="images/campus/ef.jpg" alt=""></li>
                                        <li><img src="images/campus/gl.jpg" alt=""></li>
                                        <li><img src="images/campus/inf.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->
            
            <!-- Here begin Sidebar -->
     <!-- /.widget-main -->
    <!-- /.widget-main -->
<!-- /.widget-main -->
            </div>
        </div>
   
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

</body>
</html>