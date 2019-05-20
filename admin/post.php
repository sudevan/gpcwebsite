<?php
include("include.php");

		$itemname=isset($_POST['itemname']) ? $_POST['itemname']:'';

		$query="select distinct category as k from albums where category like '%$itemname%'";
		$stmt=$conn->query($query); $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$datalist_option='';
		
		foreach($result as $r) {
			$datalist_option .="<option id=\"data_id\" data-id=\"".$r['k']."\" data-code=\"".$r['k']."\" value=\"".$r['k']."\" />";
		}
		echo $datalist_option;

