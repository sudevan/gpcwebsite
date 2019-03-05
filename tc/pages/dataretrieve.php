<?php


include('tcprivate.inc');
include('connection.php');


$admissionno=$_GET['admissionno'];

/*getting tc number */
$sql="SELECT tcno  from tcissue where  admissionno='$admissionno'";
$result=$conn->query($sql);	
$row = $result->fetch_assoc();
$tcno=$row['tcno'];
if ($tcno === NULL ) {
	$sql="SELECT max(tcno)+1 as tcno from tcissue";
	$result=$conn->query($sql);	
	$row = $result->fetch_assoc();
	$tcno=$row['tcno'];
	if ($tcno === NULL ) {
		//not yet initialised
		$tcno=1;
	}	
	
}
$student = getStudentData($admissionno);
$student["tcno"]=$tcno."/2018-19";


echo json_encode($student);

?>
