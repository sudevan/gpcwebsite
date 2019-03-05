<?php 

$data = array();
function add_persons( $table,$databasefields,$data )
{
	$sql="INSERT INTO $table (";
	$first=true;
	foreach($databasefields as $value)
	{
		if(!$first)
		{
			$sql.=",";
		}
		else {
			$first=false;		
		}
		$sql.="$value";
	}
	$sql.=") values ";
	$insertfieds=$sql;
	//$sql="";
	$firstrow=true;
	foreach($data as $row )
	{
		
		if($firstrow == false)
		{
			$sql.=",";
			
			
		}
		else {
				$firstrow=false;	
		}
		//$sql=$insertfieds;
		
		//for coma between tuples

		$first=true;
		foreach($row as $key=> $value)
		{
			//for coma within tuples for different fields
			if(!$first)
			{
				$sql.=",";
			}
			else {
				$first=false;
				$sql.="(";	
			}
			$sql.="'$value'";
		}
		
		$sql.=")";
		
}

	echo $sql;
	
}

#reading uploaded data into an array
$data=array();
if ( $_FILES['file']['tmp_name'] )
{	
 $dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
 $rows = $dom->getElementsByTagName( 'Row' );
 $first_row = true;
 foreach ($rows as $row)
 {
 	
   if ( !$first_row )
   {

     $cells = $row->getElementsByTagName( 'Cell' );
     $index = 1;
     foreach( $cells as $cell )
     {
       $ind = $cell->getAttribute( 'Index' );
       if ( $ind != null ) $index = $ind;
       $student[$title[$index]]= $cell->nodeValue;
       $index += 1;
     }
     $data[] = $student;
     //add_person( $first, $middle, $last, $email );
     }
   else 
   {
   	$first_row = false;
   	$index = 1;
   	$cells = $row->getElementsByTagName( 'Cell' );
   	 foreach( $cells as $cell ){
   	 	$ind = $cell->getAttribute( 'Index' );
   	 	if ( $ind != null ) $index = $ind;
	 		$title[$index] = $cell->nodeValue;
	 		$index += 1;
   	 }

   	}
   	
 }
 //print_r($data);
 #$title=array(admissionno,name,departmentid);
 $test="student";
 add_persons($test,$title,$data);
 }
?>
<html>
<body>

</body>
</html>
