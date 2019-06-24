<?php 
session_start();
if($_SESSION['usertype']==="admin")
{
			include("head.php");
			
		 ?>
				 <div class="row" style="padding:30px;">
				 <div class="col-md-1"></div>
								<div class="col-md-4" style="background-color:grey;color:white;padding:30px;">
								<div class="form-group">
								<form name="newsform" id="newsform" method="post" action="announcement.php" class="adminform">
		<B><H4><U>NEWS</U></H4></B>

       <label for="#date">Enter the Date</label>
      <input class="form-control" name="date" type="date" id="date">
	 
		<label for="#headline">Enter the Headline</label>
	      <input class="form-control" name="headline" type="text" id="headline">

		  <label for="#story">Enter the Story</label>
      <textarea class="form-control" name="story" rows="5" id="story"></textarea>

	  <label for="#link">Enter the news link</label>
	  <input class="form-control" type="text" name="link" id="link">
			<label for=""></label>
          <input class="btn btn-success form-control" name="add" type="submit" id="add" value="addnews">
    
		</form></div></div>

          <div class="col-md-1"></div>
			<div class="col-md-4" style="background-color:black;color:white;padding:30px;">
            <form name="announcement" id="newsform" method="post" action="announcement.php" class="adminform">
					
			<B><H4><U>ANNOUNCEMENT</U></H4></B>

					<label for="fromdate">Enter The from date</label>
					<input class="form-control" name="fromdate" type="date" id="fromdate">

					<label for="todate">Enter The to date</label>
					<input class="form-control" name="todate" type="date" id="todate">

					<label for="head">Enter The Headline</label>
					<input class="form-control" name="head" type="text" id="head">

					<label for="announcement">Enter The announcement</label>
					<textarea class="form-control"  rows="5" name="announcement" id="announcement"></textarea>

					<label for="link">Enter The Link</label>
					<input class="form-control" type="text" name="link" id="link">
					<label for=""></label>
					<input name="announce" class="btn btn-success form-control" type="submit" id="announce" value="announce">
					

			</form> </div>
</div>

					</div>
<div class="row">
<div class="col-md-1"></div>
	<div class="col-md-3" style="padding:30px;background-color:#ffc299;">
						<h4>TO UPLOAD DIRECTOR IMAGES</h4>
		<form action="image.php" method="post" enctype="multipart/form-data" class="adminform">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="director">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
           </form>
		   </div>
		   <div class="col-md-3"style="padding:30px;background-color:#ffb380;">

					<H4>TO UPLOAD JAYAKUMAR'S IMAGES</H4	>
					<form action="image.php" method="post" enctype="multipart/form-data" class="adminform" >
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="JK">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
		   </form> 
		   </div>
		   <div class="col-md-3"style="padding:30px;background-color:#ffa366;">

	<H4>TO UPLOAD CHE IMAGES</H4>
		   <form action="image.php" method="post" enctype="multipart/form-data">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="che">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
           </form>
		   </div>  
		   </div>

		   <div class="row"> 
		   <div class="col-md-1"></div>
		   <div class="col-md-3"style="padding:30px;background-color:#ffffff;">

			<h4>TO UPLOAD ADMINISTRATIVE IMAGES</h4>
		   <form action="image.php" method="post" enctype="multipart/form-data" class="adminform">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="adminblock">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
           </form> 
		   </div>
		   <div class="col-md-3"style="padding:30px;background-color:#99c2ff;">

			<H4>TO UPLOAD ALUMNI IMAGES</H4>
		   <form action="image.php" method="post" enctype="multipart/form-data" class="adminform">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="Alumni">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
           </form> 
		   </div>
		   <div class="col-md-3"style="padding:30px;background-color:#ffffff;">

		   <h4>TO UPLOAD COLLEGE IMAGES</h4>
		   <form action="image.php" method="post" enctype="multipart/form-data">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="college">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
           </form> 
		   </div>
		   </div>
		   <div class="row">
		   <div class="col-md-1"></div>
		   <div class="col-md-3"style="padding:30px;background-color:#99ff99;">

		   	<h4>TO UPLOAD NEWSLETTER IMAGES</h4>
		   <form action="image.php" method="post" enctype="multipart/form-data" class="adminform">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="newsletter">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
           </form> 
		   </div>

		   <div class="col-md-3" style="padding:30px;background-color:#80ff80;">

			<h4>TO UPLOAD IEDC IMAGES</h4>
		   <form action="image.php" method="post" enctype="multipart/form-data" class="adminform">
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="iedcachieve">
	<input type="submit"class="btn btn-secondary" name="upload" value="upload">
</form>
</div>
<div class="col-md-3"style="padding:30px;background-color:#66ff66;">

					<H4>TO UPLOAD OTHER IMAGES</H4	>
					<form action="#" method="#" enctype="multipart/form-data" class="adminform" >
    add new image<input type="file" name="file_image">
    <input type="hidden" name="album" value="JK">
    <input type="submit"class="btn btn-secondary" name="upload" value="upload">
		   </form> 
		   </div>

</div>

	
					<?php 
			   include("tail.php");
}
else{
echo"you are not authorised";
}
		?>