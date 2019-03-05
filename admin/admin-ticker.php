<!DOCTYPE html>
<?php 
include("../include.php");

$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = "SELECT `id` ,`content` ,`link` FROM `ticker` order by id desc";
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * 3;
	}
	$limit=" limit " . $start . "," . 3;
	$pagination_statement = $conn->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/3);
		if($page_count>1) {
			
			for($i=1;$i<=$page_count;$i++){
				
				if($i==$page){
					
					
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $conn->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
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
               
                <li><a href="admin-news.php">News</a></li>
                <li><a href="admin-events.php">Events</a> </li>
                   <li class="active"><a href="admin-ticker.php">Web ticker</a> </li>
                  
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
                           
                            <li><a href="admin-news.php">News</a></li>
                            <li><a href="admin-events.php">Events</a> </li>
                               <li class="active"><a href="admin-ticker.php">Web ticker</a> </li>
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
   


    <div class="container">
        <div class="row">
<form action="tickersave.php" method="post">
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="" style="width: 100%; height: 50px;"></div>
                  <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Ticker Content</span>
                            </span>
                           
                            <textarea name="content" id="content" class="form-control" maxlength="50"></textarea>
                        </div>
                         <div class="col-md-10 input-group">
                            <span class="input-group-addon">
                                <span>Hyperlink</span>
                            </span>
                            <input type="text" name="link" id="link" class="form-control" maxlength="255"  />
                        </div>
 <input type="hidden" id="tickid" name="tickid" >
                <div class="container">
					<input type="hidden" id="estatus" name="estatus" value="0">
                   <button class="btn btn-primary">ADD</button>
                </div>
                </form>
                <form id="frm" action="" method="post">
                <div class="container">
                    <table class="table admin-list">
                        <tr>
                            <th style="width: 15px;">No</th>
                            <th>Ticker Content</th>
                           
                            <th style="width: 25px;">Edit</th>
                        </tr>
                       <?php $i=$start+1;; foreach($result as $ca){?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo substr($ca['content'],0,100); ?>...</td>
                           
                          
                            <td><a href="javascript:void(0)" onclick="edit(this,'<?php echo $ca['id']; ?>')"><form method="get" action="saleinvoiceedit.php"><input type="hidden" name="txtedit_transaction" id="txtedit_transaction" value="0" />
<input type="hidden" name="id" id="id" value="<?php  echo $ca['id']; ?>" /><i class="fa fa-pencil" aria-hidden="true"></i></form></a></td>
                            <td><a href="javascript:void(0)" onclick="edit1(this,'<?php echo $ca['id']; ?>')"><form method="get" action="saleinvoiceedit.php"><input type="hidden" name="txtedit_transaction" id="txtedit_transaction" value="0" />
<input type="hidden" name="id" id="id" value="<?php  echo $ca['id']; ?>" /><i class="fa fa-trash-o" aria-hidden="true"></i></form></a></td>
                        </tr>
                        
                   <?php $i++; } ?>
                    </table>
                </div>
               
                <?php echo $per_page_html; ?>

 </form>
          

               

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
<script>

function edit(e,id) {

$('#txtedit_transaction').val(id);
var myvar = id;

  $.ajax({
		url:"getcontent.php",
		method:"post",
		 data:{a4:myvar}
		}).done(function(data){
					var res=data.split(",");
			$("#content").text(res[1]);
			$("#tickid").val(res[0]);
			$("#link").val(res[2]);
			
			$("#estatus").val(3);
		});
}

function edit1(e,id) {

$('#txtedit_transaction').val(id);
var myvar = id;
//alert(myvar);
'<%Session["temp"] = "' + myvar +'"; %>';
window.location="admin-ticker-delete.php?temp=" + myvar;
}
</script>
</body>
</html>
