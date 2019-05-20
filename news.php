<!DOCTYPE html>
<?php 
include("include.php");

$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = "SELECT `id`, DATE_FORMAT(date,'%d/%m/%Y') as date, `header`, `content`, `content1`, `image`, `link` FROM `news` order by id desc";
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * 4;
	}
	$limit=" limit " . $start . "," . 4;
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
<!--[if gt IE 8]><!--> 

    
    <?php include ("head.php"); ?>
    <!-- Being Page Title -->
   





              <section class="blog py-12" id="blog" style="background-image: url(images/cover.jpg);background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */">
        <div class="container col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <h3 class="text-bl text-center font-weight-bold mb-2" style="color: white">News</h3>
  
           
                
                <!-- blog grid -->
                <form id="frm" action="" method="post">
                    <?php 
//~ $query="SELECT `id`, DATE_FORMAT(date,'%d/%m/%Y') as date, `header`, `content`, `image` FROM `sample`";
//~ $co=$conn->query($query);
//~ $co->setfetchmode(PDO::FETCH_ASSOC);
foreach($result as $ca){

?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 10px">
                    <div class="card  ">
                        <div class="card-header p-0 position-relative">
                            <a href="#">
                                <img class="card-img-bottom" src="admin/<?php  echo $ca['image']; ?>" alt="">
                                <span class="fa fa-newspaper-o  post-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="text-colors let-spa mb-3"><i class="fa fa-calendar-o"></i><?php echo $ca['date']; ?></h6>
                            <h5 class="blog-title card-title font-weight-bold">
                                <a href="<?php echo $ca['link'];?>" target="_blank"><?php echo $ca['header']; ?></a>
                                <p><?php echo $ca['content']; ?></p>
                                <p><strong><?php echo $ca['content1']; ?></strong></p>
                            </h5>
                            
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                         <?php } ?>
                            

           <?php echo $per_page_html; ?>

           </form>   
         
            </div>
      
    </section>
          
    
    <?php include("tail.php"); ?>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
