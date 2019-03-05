 <?php

	include("include.php"); 
	$a4=isset($_POST['a4']) ? $_POST['a4']:'';
  $val=$conn->query("SELECT id,content from ticker where id='$a4'");
  $val->setfetchmode(PDO::FETCH_ASSOC);
 
  
  while($v=$val->fetch())
  {
echo $v['id'].','.$v['content']; }
    ?>
