<!DOCTYPE html>
<?php include("head.php") ?>


<div class="col-lg-6 main_grid_contact" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="form-w3ls p-md-5 p-4">
                        <h4 class="mb-4 sec-title-w3 let-spa text-bl">Alumni meet 2017 Registration</h4>
                        <form action="reg_save.php" method="post">
                            <div class="row">
                                <div class="col-sm-6 form-group pr-sm-1">
                                    <input type="text" name="name" id="name" class="form-control"placeholder="Full Name"/>
                                </div>
                                <div class="col-sm-6 form-group pl-sm-1">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="batch" id="batch" class="form-control" placeholder="eg: 2008 - 2011"/>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="branch" name="branch">
                                 <option>Branch</option>   
                                </select>
                            </div>
                         
                            <div class="input-group1 text-right">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
     <?php include("tail.php") ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/custom.js"></script>
    <script>
		
		
		$.ajax({
			
		url:"branchajax.php",
		method:"post",
	}).done(function(data){
		
		$("#branch").html(data);
	});
	
		
		
        $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 400
});
    </script>
</body>
</html>
