<?php include("head.php") ?>


<style type="text/css">
	.gridi{
		display: grid;
		grid-template-columns: repeat(auto-fill,minmax(130px,1fr));
		grid-gap: 15px;
	    padding: 10px;
	    padding-left: 100px;	
	    padding-right: 100px;

	}
	.gridi > div{
		text-align: center;
		border-bottom:1px solid red;
		padding: 10px;
		background-color:rgba(0,0,255,0.1);
	}
	.gridi > div > img{
		border-radius: 100%;
	}
</style>
<section>
	<div class="container">
		<div style="padding: 10px">
			<form>
			<button class="btn btn-danger" style="border-radius: 0;">MECHANICAL</button>
			<button class="btn btn-success" style="border-radius: 0;">CIVIL</button>
			<button class="btn btn-primary" style="border-radius: 0;">COMPUTER</button>
			<button class="btn btn-warning" style="border-radius: 0;">E E E</button>
			<button class="btn btn-info" style="border-radius: 0;">ELECTRONICS</button>
			<button class="btn btn-light" style="border-radius: 0;color: black">INSTRUMENTATION</button>
		</form>
		</div>
		<div class="Mechanical" style="padding: 10px">
			<h4  style="text-transform: uppercase;border-bottom: 1px solid black;"><?php echo "Department"; ?></h4>
			<!-- hod -->
			<h6 style="text-transform: uppercase;text-align: center;">Head of Department</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>
			</div>
			<!-- lecturers -->
			<h6 style="text-transform: uppercase;text-align: center;">Lecturers</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>
			</div>
			<!-- labstaff -->
			<h6 style="text-transform: uppercase;text-align: center;">Lab staff</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>
			</div>
			<!-- apprentis -->
			<h6 style="text-transform: uppercase;text-align: center;">Apprentis</h6>
			<div class="gridi">
				<div>
					<img src="php code goes here"><h6><?php echo "name"; ?></h6><p><?php echo"PEN Number" ?></p>
				</div>	
			</div>	
		</div>

		
	</div>
</section>



<?php include("tail.php") ?>