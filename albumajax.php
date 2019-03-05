 <?php
  include("include.php");
  $val=$conn->query("select distinct name,id from albums order by name ");
  $val->setfetchmode(PDO::FETCH_ASSOC);
  
 ?> 
 <option value="">select</option>
 <?php while($v=$val->fetch())
  {
  ?>
     
    <option value="<?php echo $v['id'];?>"><?php echo $v['name'];?></option>
  
    <?php }
    ?>
