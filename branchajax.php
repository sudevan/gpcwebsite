<?php
  include("include.php");

  
 $query="select master_branch.id,master_branch.branch from master_branch ";
  $val1=$conn->query($query);
  $val1->setfetchmode(PDO::FETCH_ASSOC);?>
	<option value="">select</option>
	<?php while($v1=$val1->fetch()){ ?>
	
	
		<option value="<?php echo $v1['id'];?>" ><?php echo $v1['branch'];   ?></option>               
	<?php } ?>
   
