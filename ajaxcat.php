<?php
if(isset($_GET['album']) && $_GET['album']!=''){
   $category=isset($_GET['category']) ? $_GET['category']:'0';
	 $query1="select id as k,name as v from ti_category";
					 $val2=$conn->query($query1);
  $val2->setfetchmode(PDO::FETCH_ASSOC);
  
 
  
  ?>
					<option value="">select</option>
	<?php while($v12=$val2->fetch()){ 
		echo $category;
		echo $v12['v'];
		$sel1=''; if($category==$v12['v']) { echo "dsgt" ;$sel1=" selected='selected' ";}  else {echo "else";}?>
		<option value="<?php echo $v12['v'];?>" <?php echo $sel1; ?> ><?php echo $v12['v'];   ?></option>               
	<?php }}
