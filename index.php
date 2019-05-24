
<!DOCTYPE html>
<html lang="zxx">
		<?php 
        	include("head.php");
		 ?>
		<!-- carousel -->
		<section class="bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000" style="width: 100%;height: 50vh">
					<div class="carousel-inner" >
						<div class="carousel-item active">
							<img class="d-block w-100img-responsive" src="images/slideshow/1.JPG" alt="First slide" style="width: 100%;height: 50vh">
							
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img-responsive" src="images/slideshow/2.JPG" alt="Second slide" style="width: 100%;height:50vh">
							
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img-responsive" src="images/slideshow/3.JPG" alt="Third slide" style="width: 100%;height: 50vh">
							
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img-responsive" src="images/slideshow/4.JPG" alt="Third slide" style="width: 100%;height: 50vh">
							
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img-responsive" src="images/slideshow/5.JPG" alt="Third slide" style="width: 100%;height: 50vh">
							
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
				<div class="col-lg-6" style="border-radius: 10px;">
						<div style="padding: 10px;text-align: justify;">
							<h3 class="" style="color: black;border-bottom: 3px solid red">vision</h3>
							<ol>
								<li class="text-bl">
									To be a centre of excellence in engineering education for providing valuable resources to industries and society.
								</li>
							</ol>
						</div>
						<div style="padding: 10px;text-align: justify;">
								<h3 class="" style="color: black;border-bottom: 3px solid red">Mission</h3>
							<ol style="line-height: 30px">
							    <li class="text-bl">Providing quality education in engineering and technology</li>
								<li  class="text-bl">Involving in the development of society through technology transfer, entrepreneurship and industry interaction</li>
								<li class="text-bl"> To inculcate social responsibility and ethical values among students through value education</li>
							</ol>
							<style type="text/css">
								h4
								{
									line-height: 40px; 	
								}
							</style>
						</div>
					</div>
			</div>
			</div>
			</div>
		</section>
		<!-- carousel -->
		
                            
    	<!-- vision-missioin and principal's message -->
        <section class="bg-white">
			<div class="container">
				<div class="row  text-center bg-white">
		    		<div class="col-lg-6 " style="padding: 0">
		    			<marquee direction="left"> <a class="text-bl" style="font-size: 20px" href="https://goo.gl/forms/teDeKxfPVjcxf22D2" target="_blank">STUDENT REGISTRATION</a></marquee>
		    		</div>
		    		
		    		<div class="col-lg-6" style="padding: 0">
		    			<marquee direction="left"> <a class="text-bl" style="font-size: 20px" 	href="https://forms.gle/NrHQrr9s26xKAVnHA" target="_blank">APPLY FOR TC</a></marquee>
		    		</div>
    			</div>
    		</div>
   
		</section>
		<style type="text/css">
			.grid-containe{
					  display: grid;
					  grid-template-columns: repeat(auto-fill,minmax(250px,1fr));
					  grid-gap: 20px;
					  
					  padding: 10px;
			}
.grid-containe > div{
      
      text-align: center;
      padding: 10px;
     transition: all 0.5s ease;

    }
    .grid-containe > div:hover{
    	
    	padding: 0;
    	transform: scale(1);
    }
    #div:hover{
         color: white;
       
         
         background-color:#3575d3;
        
    }
		</style>
		
     



    <style type="text/css">

    </style>
    
    
   
   
   
		<section style="margin-bottom: 10px">
			<div class="container">
				<div class="row" style="padding: 0">
					
					
					<div class="col-lg-4" style="position: relative;">
						<h5 class="text-wh bg-danger" style="padding:10px">News<span class="float-right"><i class="fa fa-newspaper-o"></i></span></h5>
						<!-- <marquee direction="up" behaviour="alternate" style=" border-bottom: 2px solid #dc3545;" scrollamount="3"> -->
							<div style="padding: 10px; ">
								<?php 	
										include("connection.php");
								         $query="SELECT * FROM news ";
								         $result=$conn->query($query);
								         if($result->num_rows>0){
								         	while($row = $result->fetch_assoc()){
								?>
								<h5 style="border-bottom: 1px solid black"><?php echo $row['heading']; ?>(<?php echo $row['date']; ?>)</h5>
								<p class="text-bl" style="font-size: 16px;line-height: normal;font-family: Arial, Helvetica, sans-serif;text-align: justify;margin-bottom: 0"><?php echo $row['news']; ?>
								<a href="<?php echo $row['link']?>" class="float-right">Open</a></p>
								<?php 
									}
	      						   } 
	      						?>
								
							</div>
					   <!-- </marquee> -->

					</div>

					
					<div class="col-lg-4">
						<h5 class="text-wh bg-danger" style="padding:10px">Announcements<span class="float-right"><i class="fa fa-bullhorn"></i></span></h5>
						<div style="padding: 10px;" >
							<?php 
                                $query2="SELECT * FROM announcement";
                                $result2=$conn->query($query2);
                                if($result2->num_rows>0){
                                	while($row2=$result2->fetch_assoc()){
                                		?>

							<h5 style="border-bottom: 1px solid black"><?php echo $row2['heading'] ?>(<?php echo $row2['date'] ?>)</h5>
							<p class="text-bl" style="font-size: 16px;line-height: normal;font-family: Arial, Helvetica, sans-serif;text-align: justify;margin-bottom: 0"><?php echo $row2['announcement'] ?>
							<a href="<?php echo $row2['link']?>" class="float-right">Open</a></p>
								
                                <?php	}
                                }
							 ?>
						</div>

					</div>
                        <style type="text/css">
                        	.down-item-a{
                                        line-height: 20px;border-left: 2px solid #3575d3 ;display:block;padding:3px;font-size: 18px;
                        	}
                        	.down-item-a > span > i{
                                    padding: 8px;
                        	}
                        	.down-item-a > span {
                        		display: inline-block;font-size: 20px;border-radius: 50%;color:#3575d3;
                        	}
                        </style>
					<div class="col-lg-4">
						<h5 class="text-wh bg-danger" style="padding:10px">Downloads<span class="float-right"><i class="fa fa-download"></i></span></h5>
						<div style="padding: 10px; border-bottom: 2px solid #dc3545">
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" style=""><i class="fa fa-newspaper-o" ></i></span>&nbsp;&nbsp;Previous Question Papers
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" style=""><i class="fa fa-book" ></i></span>&nbsp;&nbsp;Prospectus
								</a>
							</div>
							<div style="margin-bottom: 10px">
                                <a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" ><i class="fa fa-newspaper-o" ></i></span>&nbsp;&nbsp;Approvals
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" ><i class="fa fa-institution" ></i></span>&nbsp;&nbsp;NBA Accreditation
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white"><i class="fa fa-address-book aria-hidden='true'"></i></span>&nbsp;&nbsp;Mandatory disclosures
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" ><i class="fa fa-building aria-hidden='true'" ></i></span>&nbsp;&nbsp;Balance Sheets
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" ><i class="fa fa-calendar-check-o aria-hidden='true'" ></i></span>&nbsp;&nbsp;College Calendar
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" ><i class="fa fa-bank aria-hidden='true'" ></i></span>&nbsp;&nbsp;Profile
								</a>
							</div>
							<div style="margin-bottom: 10px">
								<a  href="#" class=" text-bl down-item-a" id="div" style="">
									<span class="bg-white" ><i class="fa fa-line-chart aria-hidden='true'" ></i></span>&nbsp;&nbsp;Annual Report
								</a>
							</div>
							
						</div>
						
					</div>
					
				
			</div>
		</section>
		<section>
			<div class="container">
				<h5 class="bg-light heading">Programs<span class="float-right"><i class="fa fa-graduation-cap"></i></span></h5>

				<div class="grid-containe">
					  <div id="che">
					  	<img src="images/courses/computer.png" style="width: 30%;height: auto;">
					  	<h5>Computer Hardware Engineering</h5>
					  </div>
					  <div>
					  	<img src="images/courses/mech.png" style="width: 30%;height: auto;">
					  	<h5>Mechanical Engineering</h5>
					  </div>
					  <div>
					  	<img src="images/courses/civil.png" style="width: 30%;height: auto;">
					  	<h5>Civil Engineering</h5>
					  </div>
					  <div>
					  	<img src="images/courses/ec.png" style="width: 30%;height: auto;">
					  	<h5>Electronics Engineering</h5>
					  </div>
					  <div>
					  	<img src="images/courses/eee.png" style="width: 30%;height: auto;">
					  	<h5>Electrical & Electronics Engineering</h5>
					  </div>
					  <div>
					  	<img src="images/courses/it.png" style="width: 30%;height: auto;">
					  	<h5>Instrumentation Engineering</h5>
					  </div>
					  <div>
					  	<img src="images/courses/mech.png" style="width: 30%;height: auto;">
					  	<h5>Mechanical Engineering (Evening)</h5>
					  </div>
					   <div>
					  	<img src="images/courses/civil.png" style="width: 30%;height: auto;">
					  	<h5>Civil Engineering(Evening)</h5>
					  </div>
					  
				</div>
				
			</div>
		</section>
		<style type="text/css">
			.grid{
				display: grid;
				grid-gap: 10px;
				grid-template-columns: repeat(auto-fill,minmax(200px,1fr));
				padding: 10px;

			}
			.grid>div{
				text-align: center;
				padding: 20px;
				font-size: 20px;
				transition: transform .2s;

				
			}
			/*.grid>div:hover{
				transform: scale(1.1);
				padding:  20px;
				font-size: 20px;

			}*/
			.danger{
				
				background-color: #4bd7c8;
				color:white;
				
			}
			.danger:hover{
				
				
				transform: scale(1.1);
				padding:  20px;
				font-size: 20px;
			}
			.success{
                background-color: #fd919e;
				color:white;
			}
			.success:hover{
			
				
				transform: scale(1.1);
				padding:  20px;
				font-size: 20px;
			}
			.warning{
				background-color: #ffa64d;
				color: white;
			}
			.warning:hover{
			
				
				transform: scale(1.1);
				padding:  20px;
				font-size: 20px;
			}

		</style>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h5 class="bg-light heading">Mandatory Disclosures<span class="float-right"><i class="fa fa-graduation-cap"></i></span></h5>
						<div class="grid">
							<div class="danger">Board of Governce</div>
							<div class="success">College Advisory Committie</div>
							<div class="warning">Organization chart</div>
							<div class="success">Internal quality assurance cel</div>
							<div class="danger">Grievance cell</div>
							<div class="warning">Anti Ragging committee</div>
							<div class="danger">Anti Ragging squad</div>
							<div class="success">Internal compliance committee
</div>
							<div class="danger">Committee for SC/ST
</div>
							<div class="warning">Academic council
</div>
							<div class="danger">Examination monitoring cell
</div>
							<div class="success">Ethics committee
</div>
							<div class="warning">Women empowerment cell
</div>
							<div class="success">Staff development committee
</div>

							<div class="danger">Student welfare committee
</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h5 class="bg-light heading">College History<span class="float-right"><i class="fa fa-bank"></i></span></h5>
						<p class="text-bl" style="padding:10px;padding-top: 10px;text-align: justify;font-size: 14px">
							Govt. Polytechnic College, Palakkad is situated in a vast 33 Acres of land adjacent to one of the largest Industrial Area of Kerala state. Palakkad district is considered to be one of the socially and economically backward districts of Kerala. The very existence of a Government college like ours plays an important role in the social development of the district.
							Established in 1980, the College started under the respectful leadership of Sri. Ramachandra Pisharody, with two speciality- 3 year engineering Diploma courses in Foundry Technology and Power electronics.In the next year (1981) itself running beyond the time, a new 3 year diploma course in Instrument Technology started which was a milestone for this college. The course at that time was rarest among those in the whole world, and its fruits were very sweet too. Most of the alumni of Instrument Technology course could find their international career successfully.<br>In the year 1984, 3 year Diploma course in Civil Engineering started and also standardized the courses Foundry Technology into Mechanical Engineering and Power Electronics into Electronics Engineering.Advent of computer technology in industries, on par with training the younger generation in the year 1990, Computer Hardware & Maintenance 3 year diploma course was started in the college.But the absence of diploma course in one of the basic engineering discipline was a major defiiciency and we could overcome and fulfill this by starting Diploma course in Electrical and Electronics Engineering from the year 2014.The College also offers Part-time diploma courses in most of the disciplines for the working professionals of the nearby industries. The academic rating of our college is considered to be one of the best in the whole state.
						</p>
						
					</div>
					
					
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row" style="padding: 0">
					<div class="col-lg-12">
						<h5 class="bg-light heading">Fecilities<span class="float-right"><i class="fa fa-anchor"></i></span></h5>
								<div class="grid-containe">
					  <div id="che">
					  	<img src="images/fec/book.png" style="width: 40%;height: auto;">
					  	<h5>Library</h5>
					  </div>
					  <div>
					  	<img src="images/fec/bus.svg" style="width: 40%;height: auto;">
					  	<h5>College Bus</h5>
					  </div>
					  <div>
					  	<img src="images/fec/cafe.png" style="width: 40%;height: auto;">
					  	<h5>Canteen</h5>
					  </div>
					  <div>
					  	<img src="images/fec/hostel.svg" style="width: 40%;height: auto;">
					  	<h5>Hostel</h5>
					  </div>
					  <div>
					  	<img src="images/fec/hc.png" style="width: 40%;height: auto;">
					  	<h5>Health Club</h5>
					  </div>
					  <div>
					  	<img src="images/fec/lc.svg" style="width: 40%;height: auto;">
					  	<h5>Language Lab</h5>
					  </div>
					  <div>
					  	<img src="images/fec/pc.svg" style="width: 40%;height: auto;">
					  	<h5>Placement Cell</h5>
					  </div>
					  <div>
					  	<img src="images/fec/bps.svg" style="width: 40%;height: auto;">
					  	<h5>Backup Power Supply</h5>
					  </div>
					  
					
					</div>
					
				</div>
					
					
				</div>
				
			</div>
		</section>

	

	



		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-4" style="margin-bottom: 10px">
					<h5 class="bg-light heading">Drive to us<span class="float-right"><i class="fa fa-car"></i></span></h5>

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.63369908756!2d76.69378!3d10.762688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8cce89f346b04ca5!2sGovernment+Polytechnic+College%2CPalakkad!5e0!3m2!1sen!2sin!4v1558529060466!5m2!1sen!2sin" width="auto" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<style type="text/css">
						.form-contro{
							border:none;
							width: 100%;
							border-bottom: 2px solid #dc3545;
							outline: none;
							background:transparent;
							border-radius: 0;
							margin-bottom: 5px;
							margin-top: 10px;
						}
						.inpu>button{
							background-color: #dc3545;
							color: white;
							display: block;
							width: 100%;
							font-size: 20px;
							border-radius: 10px
						}
						.inpu>button:hover{
						  color: #dc3545;
						  background-color: white;
						  border:2px solid #dc3545;
						}
						.external-links-a{
									line-height: 30px;
									background-color: #dc3545 ;
									display:block;padding: 8px;
									font-size: 15px
								}
								.external-links-span{
									display: inline-block;font-size: 20px;border-radius: 50%;color:#dc3545
								}
								.heading{
									border-left: 2px solid red;padding: 10px;
								}
					</style>
					<div class="col-lg-4" style="margin-bottom: 10px">
						<h5 class="bg-light heading">Send us Message<span class="float-right"><i class="fa fa-envelope-o"></i></span></h5>
						 <form action="#" method="post" style="margin-top: 20px;">
								<div class="row" style="padding: 0">
									<div class="col-sm-6 ">
									<input class="form-contro" type="text" name="Name" placeholder="Name" required="">
									</div>
									<div class="col-sm-6">
									   <input class="form-contro" type="text" name="Phone Number" placeholder="Phone Number" required="">
									</div>
								</div>
								<div class="form-group">
									<input class="form-contro" type="text" name="Subject" placeholder="Subject" required="">
								</div>
								<div class="form-group">
									
									<input class="form-contro" type="email" name="Email" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<textarea name="message" class="form-contro" placeholder="Message" required=""></textarea>
								</div>
								<div class="inpu">
									<button class="btn" type="submit">Send</button>
								</div>
							</form>
					</div>
					<div class="col-lg-4" style="margin-bottom: 10px">
						<h5  class="bg-light heading">External Links<span class="float-right"><i class="fa fa-link"></i></span></h5>
						<div style="margin-bottom: 10px;" >
								<a  href="#" class=" text-wh external-links-a">
									<span class="bg-white external-links-span"><i class="fa fa-edit padding10" aria-hidden='true'></i></span>&nbsp;&nbsp;Exam registration
								</a>
							</div>
							<div style="margin-bottom: 10px;" >
								<a  href="#" class=" text-wh external-links-a">
									<span class="bg-white external-links-span"><i class="fa fa-book padding10" aria-hidden='true'></i></span>&nbsp;&nbsp;Syllabus and curriculum
								</a>
							</div>
							<div style="margin-bottom: 10px;" >
								<a  href="#" class=" text-wh external-links-a">
									<span class="bg-white external-links-span"><i class="fa fa-check padding10" aria-hidden='true'></i></span>&nbsp;&nbsp;AICTE Approval
								</a>
							</div>
							
							<div style="margin-bottom: 10px;" >
								<a  href="#" class=" text-wh external-links-a">
									<span class="bg-white external-links-span" ><i class="fa fa-tags padding10" aria-hidden='true'></i></span>&nbsp;&nbsp;AICTE Schemes and Scholarships
								</a>
							</div>
					</div>
				</div>

			</div>
		</section>
		
				
		
		<?php 
       		include("tail.php");
		?>
	</body>
</html>