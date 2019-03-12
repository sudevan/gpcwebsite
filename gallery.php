<!DOCTYPE html>
<?php
 include("include.php"); 
 include("head.php");
$id=$_GET['temp'];?>
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
<!--
                            <li class="filter" data-filter="all">Show All</li>
-->
                              <?php 

                                      
                                      $query1 = "SELECT  name,id from `albums`";
                                      $query11=$conn->query($query1);
										$query11->setfetchmode(PDO::FETCH_ASSOC);

										while($query231=$query11->fetch())
										{?> 
                                                     <a href="javascript:void(0)" onclick="edit(this,'<?php echo $query231['id']; ?>')"><form method="get" action="saleinvoiceedit.php"><input type="hidden" name="txtedit_transaction" id="txtedit_transaction" value="0" />
										<input type="hidden" name="id" id="id" value="<?php  echo $query231['id']; ?>" /> <li class="filter" data-filter="<?php echo $query231['id'];?>"> <?php echo $query231['name'];?></li></form></a>
                                                    <?php }?>
                        </ul>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                

            </div> <!-- /.col-md-3 -->

            <div class="col-md-9">
                <div class="row">
                    
                    <div id="Grid">
                        <?php 
                        $q="SELECT gallery.*,albums.name as album,albums.category as category from gallery join albums on albums.id=gallery.album_id where album_id='$id'";
                        
                        $c=$conn->query($q);
                        $c->setfetchmode(PDO::FETCH_ASSOC);
                        while($r=$c->fetch()){ ?>
                    
                    <div class="col-md-4 mix <?php echo $r['category']; ?> <?php echo $r['album_id']; ?> " data-cat="1">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <a class="fancybox" data-fancybox-group="gallery1" href="admin/<?php echo $r['image']; ?>">
                                    <img src="admin/<?php echo $r['thumb']; ?>" alt="" />
                                </a>
                            </div>
                            <div class="gallery-content">
                                <h4 class="gallery-title"><?php echo $r['title']; ?></h4>
                                <p class="small-text"><?php echo $r['description']; ?></p>
                            </div>
                        </div> <!-- /.gallery-item -->
                    </div> <!-- /.col-md-4 -->
<?php } ?>
                   
                       
                   

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

    <!-- begin The Footer -->
    <?php  include("tail.php") ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script>
     function edit(e,id) {

$('#txtedit_transaction').val(id);
var myvar = id;
//alert(myvar);
'<%Session["temp"] = "' + myvar +'"; %>';
window.location="gallery.php?temp=" + myvar;
}
    
    
    </script>
</body>
</html>
