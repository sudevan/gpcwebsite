
<!doctype html>	
<?php
include('tcprivate.inc');
?>

<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
	.palel-primary
	{
		border-color: #bce8f1;
	}
	.panel-primary>.panel-heading
	{
		background:#bce8f1;
		
	}
	.panel-primary>.panel-body
	{
		background-color: #EDEDED;
	}
	 /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
</style>

<script type="text/javascript" >

var obj, dbParam, xmlhttp;

xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 	var myObj = JSON.parse(this.responseText,true);
 	for(var propt in myObj){
	    	 if (document.getElementById(propt)) {
	    		
	    			document.getElementById(propt).value = myObj[propt];	
	    		}
    	}
}
};

$(window).load(function(){
		

    	xmlhttp.open("GET", "dataretrieve.php", true);
		xmlhttp.send();    
 
});

</script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="row">
    <div >
		<div class="panel panel-primary">
			<div class="panel-heading">Student details 
			</div>
			<div class="panel-body">
				<form name="myform" action="setdefault.php" method="POST">
				<?php 
				function displayinputfield($value) {
					
					echo "<div class='form-group col-xs-10 col-sm-4 col-md-4 col-lg-4'>\n";
					echo "<label for='$value[0]'>$value[1]</label>\n";
					
					if($value[3]=="select") {
						echo "<select id='$value[0]' name='$value[0]' class='form-control' data-validation='$value[2]' >\n";
						foreach($value[4] as $option)
						{
							echo "<option>$option</option>\n";
						}	
						echo "</select>\n";			
					}	
					else
					{
						echo "<input id='$value[0]' name='$value[0]' class='form-control' type='$value[3]' data-validation='$value[2]'>\n";
					}
					echo " <span id='error_$value[0]' class='text-danger'></span>\n";
					echo "</div>\n";
					
				}
				
				foreach ($tcdefaultdata as $value) {		
					displayinputfield($value);
				}
			
				?>
					<div class="col-submit col-xs-12" >
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Save</button>

					<button id="reset" type="reset" value="reset" class="btn btn-primary center">Reset</button>
					</div>
				</form>

			</div>
			<div class="panel-footer"> 
			<p>Contact sudevank@gmail.com or 7200668804</p>
			 <h3> <a href="../index.html">Home</a></h3>
		</div>
	</div>
</div>
</body>
</html>
