<!DOCTYPE html>
<?php include("include.php");include("head.php")?>

    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Filter Controls</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
                            <li class="filter" data-filter="all">Show All</li>
                            <?php 
						
                    
                    	$query1 = "SELECT distinct name,id from `albums`";
                    	$query11=$conn->query($query1);
						$query11->setfetchmode(PDO::FETCH_ASSOC);
						
						while($query231=$query11->fetch())
						{?> 
                            <li class="filter" data-filter="<?php echo $query231['id'];?>"><?php echo $query231['name'];?></li>
                           <?php }?>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Type</h4>
                    </div>
                    <div class="widget-inner">
                        <ul class="mixitup-controls">
							<?php 
						
                    
                    	$query12 = "SELECT distinct category from `albums`";
                    	$query112=$conn->query($query12);
						$query112->setfetchmode(PDO::FETCH_ASSOC);
						
						while($query2312=$query112->fetch())
						{
							if($query2312['category']=='0')
							{?> 
                            <li class="filter" data-filter="<?php echo $query2312['category']; ?>" data-order="desc">Default</li>
                            <?php } else {?>
                            <li class="filter" data-filter="<?php echo $query2312['category']; ?>" data-order="asc"><?php echo $query2312['category']; ?></li>
                            <?php }}?>
                           
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-9">
				
                <div class="row">
					
                    
                    <div id="Grid">
                      <?php 
						
                  
                    	$query = "SELECT * from `albums`";
                    	$query1=$conn->query($query);
						$query1->setfetchmode(PDO::FETCH_ASSOC);
						
						while($query23=$query1->fetch())
						{?>  
                    
                    <div class="col-md-4 mix <?php echo $query23['category']; ?> <?php echo $query23['id']; ?> " data-cat="1">
						
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a href="javascript:void(0)" onclick="edit(this,'<?php echo $query23['id']; ?>')"><form method="get" action="saleinvoiceedit.php"><input type="hidden" name="txtedit_transaction" id="txtedit_transaction" value="0" />
										<input type="hidden" name="id" id="id" value="<?php  echo $query23['id']; ?>" />
                                   <img src="admin/<?php echo $query23['thumb'];?>" width="42" height="42" alt="">
                               </form></a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><?php echo $query23['name'];?></h4>
                                <p class="small-text"><?php echo $query23['description'];?></p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
<?php }?>
                    <!-- /.col-md-4 -->

                    </div> <!-- /#Grid -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Load more images</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-9 -->

        </div> <!-- /.row -->
        
    </div> <!-- /.container -->

   <?php include("tail.php") ?>
<script>

	 function edit(e,id) {

$('#txtedit_transaction').val(id);
var myvar = id;
//alert(myvar);
'<%Session["temp"] = "' + myvar +'"; %>';
window.location="gallery.php?temp=" + myvar;
}

</script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
