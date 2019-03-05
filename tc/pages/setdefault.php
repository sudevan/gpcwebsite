<!doctype html>	
<?php


include('tcprivate.inc');

if (!isset($default)) 
    $default = new stdClass();

foreach ($_POST as $key=>$value) {
	$default->$key=$value;
	
}

try {
   $fp = fopen($defaultValueFilename, 'w') ;
    if (! $fp) {
        throw new Exception("Could not open the file $defaultValueFilename!");
    }
}
catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}

fwrite($fp, json_encode($default));
fclose($fp);

?>
<html>
<h1>File saved </h1>
<a href="../index.html" >Home</a>   

</html>

