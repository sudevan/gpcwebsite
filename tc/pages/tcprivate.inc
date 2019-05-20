<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
session_start();

$applicationHeader="APPLICATION FOR ISSUING T.C , COURSE AND CONDUCT CERTIFICATE AND SSLC BOOK";
#saving the student data to file
$datadirectory="../studentdata";
$defaultValueFilename=$datadirectory."/defaultvalues.json";

$tcheading="TRANSFER CERTIFICATE";
$font="Times";

$descriptionwidth=95; //widthof the data in leftside content of the form
$studentdatawidth=80; //data length of right side data
$linegap=7.3; // line width


$college=$_SERVER['HTTP_HOST'];
if($college=='iptgptc.ac.in') {
	$departments=array("Computer Engineering","Electronics Engineering","Printing Technology");
}
else {
	$departments=array("Civil Engineering","Computer Hardware Engineering","Electronics Engineering",
"Electrical and Electronics Engineering","Instrumentation Engineering","Mechanical Engineering");
	}
	
	
$tcdata=array(
array("tcno","TC NO","required","text"),
array("admno","ADMN NO","required","text"),
array("name","Name of Pupil ( in Block Letters )","required","text"),
array("dob","Date of Birth according to admission Register ( In figures )","required","date"),
array("department","Department","required","select",$departments),
array("religion","Religion","required","text"),
array("community","Community","required","text"),
array("workingDays","No of working days up-to the date","required","text"),
array("attendance","No.of working days the pupil attended","required","text"),
array("conduct","Conduct","required","text"),
array("b_feepaid","Whether the pupil has paid all the fee due to the institution","required","select",array("No","Yes")),
array("bFeeconcession","whether the pupil was in receipt of fee concession","required","select",array("No","Yes")),
array("guardianname","Name of Guardian","required","text"),
array("guardianrelation","Guardian relationship with pupil","required","select",array("Father","Mother","Uncle","Husband")),
//array("category","Category","required","text"),
array("Nationality"," Nationality ","required","select",array("Indian")),
//array("dateOfadmission","Admission Date","required","date"),
array("lastenrolledClass","Class to which the pupil was enrolled/promoted","required","select",array("1","2","3","4","5","6")),
//array("dobwords","Date of Birth according to admission Register ( in words )","required","text"),
array("promotiondate","Date of Admission or promotion to that class","required","date"),
array("b_promoted","Whether qualified for promotion to a higher standard","required","text"),
array("lastAttendanceDate","Date of pupil's last attendance at Institution","required","date"),
array("rollRemovedDate","Date on which the name was removed from the rolls","required","date"),
array("reasonForLeaving","Reason for leaving the institution","required","text"),
array("dateofApplication","Date of application for certificate","required","date"),
array("datOfOIssue","Date of issue of the certificate","optional","date"),
array("proceedinginstitute","Institution to which the pupil intends proceeding","optional","text"),
array("vaccination","Date of last vaccination","optional","date"),
array("phone","Mobile Number","required","text"),
array("collegeName","Name of Educational Institution","required","text"),
array("idmark","Identification marks of student, if any","optional","text"),
array("accountno","Bank Account Number(for Caution deposit)","required","text"),
array("ifsc","IFSC","required","text"),
array("bankname","Bank Name","required","text"),
array("bankbranch","Bank Branch","required","text"),
array("preparedby","Prepared by    ","required","text"),
array("verifiedby","Verified by  ","required","text")
);

/* form entries for default values*/
$tcdefaultdata=array(
array("tcno","TC NO","required","text"),
array("collegeName","Name of Educational Institution","required","text"),
array("dateOfadmission","Admission Date","required","date"),
array("category","Category","required","text"),
array("Nationality"," Nationality ","required","select",array("Indian")),
array("lastenrolledClass","Class to which the pupil was enrolled/promoted","required","select",array("1","2","3","4","5","6")),
array("promotiondate","Date of Admission or promotion to that class","required","date"),
array("b_promoted","Whether qualified for promotion to a higher standard","required","text"),
array("b_feepaid","Whether the pupil has paid all the fee due to the institution","required","select",array("No","Yes")),
array("bFeeconcession","whether the pupil was in receipt of fee concession","required","select",array("No","Yes")),
array("lastAttendanceDate","Date of pupil's last attendance at Institution","required","date"),
array("rollRemovedDate","Date on which the name was removed from the rolls","required","date"),
array("reasonForLeaving","Reason for leaving the institution","required","text"),
array("proceedinginstitute","Institution to which the pupil intends proceeding","required","text"),
array("workingDays","No of working days up-to the date","required","text"),
array("attendance","No.of working days the pupil attended","required","text"),
array("conduct","Conduct","required","text"),
array("preparedby","Prepared by    ","required","text"),
array("verifiedby","Verified by  ","required","text")
);



$tcapplicationdata=array(

array("admno","ADMN NO","required","text"),
array("name","Name of Pupil ( in Block Letters )","required","text"),
array("department","Department","required","select",$departments),
array("lastenrolledClass","class in which the pupil was last enrolled","optional","select",array("1","2","3","4","5","6")),
array("rollno","Class Roll no","optional","text"),
array("email","Email Address","required","text"),
array("phone","Mobile Number","required","text"),
array("guardianname","Name of Guardian","required","text"),
array("guardianrelation","Guardian relationship with pupil","required","select",array("Father","Mother","Uncle","Husband")),
array("religion","Religion","required","text"),
array("community","Community","required","text"),
array("category","Category","required","select",array("General","Scheduled Cast","Scheduled Tribe","Other backward Cast","Other")),
array("Nationality"," Nationality ","required","select",array("Indian")),
array("dob","Date of Birth according to admission Register ( In figures )","required","date"),
//array("b_promoted","Whether qualified for promotion to that class","required","select",array(Yes)),
//array("workingDays","No of working days up-to the date","required","text"),
//array("attendance","No.of working days the pupil attended","required","text"),
array("lastAttendanceDate","Date of pupil's last attendance at Institution","required","date"),
//array("rollRemovedDate","Date on which the name was removed from the rolls","required","date"),
array("reasonForLeaving","Reason for leaving the institution","required","select",array("Course Completed","Course discontinued")),
array("proceedinginstitute","Institution to which the pupil intends proceeding","optional","select",array("Result not announced","Higher Studies","other")),
array("yearOfStudy","Years Of Study","optional","text"),
array("bFeeconcession","whether the pupil was in receipt of fee concession","required","select",array("No","Yes")),
array("accountno","Bank Account Number(for Caution deposit)","required","text"),
array("ifsc","IFSC","required","text"),
array("bankname","Bank Name","required","text"),
array("bankbranch","Bank Branch","required","text")
);

function reformatDate($date,$oldformat="Y-m-d",$newformat="d/m/Y") {
		$retval =  date_format(date_create_from_format($oldformat, $date),$newformat);
		return $retval;
}

function mergerarray_ext($array1,$array2) {
	if($array1!=null and $array2 !=null) {
	/*remember to put saved data as second to avoid default value overwriting default values */
		$retval=  array_merge($array1,$array2);
	}elseif($array1 == null) {
		$retval=$array2;
	}else {
		$retval=$array1;
	}
	return $retval;
	
}
function getStudentData($admissionno) {
	global $defaultValueFilename;

	if($admissionno != "") {
		$studentdata=readSavedData($admissionno);
	}
	//append the default values to the data
	if(file_exists($defaultValueFilename))
	{
		$defaultvaluearray = json_decode(file_get_contents($defaultValueFilename),true);	
		$retval=mergerarray_ext($defaultvaluearray,$studentdata);
		if(! array_key_exists('attendance',$studentdata) )
		{
			$retval['attendance']=$defaultvaluearray['attendance'];
		}
	}
	return $retval;
}

function readSavedData($admissionno)
{
	global $datadirectory,$conn;
	$filename=$datadirectory."/".$admissionno.".json";
	if (array_key_exists('usertype',$_SESSION))
	{
		$usertype = $_SESSION['usertype'];
	}
	if(file_exists($filename) &&  $usertype=='academic')
	{
		$studentdata = json_decode(file_get_contents($filename),true);

	}
	else{
		
		$sql="SELECT name, departmentname as department FROM student, department WHERE admissionno ='$admissionno' AND student.departmentid = department.departmentid";
		
		$result=$conn->query($sql);
		$studentdata = $result->fetch_assoc();
	}
	return $studentdata;
}


function savestudentdatajson($student) {

		global $datadirectory;
		$filename=$datadirectory."/".$student->admno.".json";

		$existingdata = getStudentData($student->admno);
		$student=mergerarray_ext($existingdata,(array)$student);
	try {
	   $fp = fopen($filename, 'w') ;
	    if (! $fp) {
	        throw new Exception("Could not open the file $filename!");
	    }
	}
	catch (Exception $e) {
		    echo "Error (File: ".$e->getFile().", line ".
		          $e->getLine()."): ".$e->getMessage();
		}
		fwrite($fp, json_encode($student));
		fclose($fp);
		return (object)$student;
}

function printfield($pdf,$item,$value="",$taboffset=0) {

	global $slNO,$linegap,$descriptionwidth,$studentdatawidth,$subItemNo;
	
	$printborder =1;
		

	//$pdf->Cell(6,$linegap,$no.".",0,0,"R");	
	
	//check whether the data oe description fit in one line or not
	$stringwidthitem=$pdf->GetStringWidth($item);
	$stringwidthvalue=$pdf->GetStringWidth($value);
	
	if($stringwidthitem > $descriptionwidth or $stringwidthvalue > $studentdatawidth) {
		
		$x = $pdf->GetX();
	   $y = $pdf->GetY();
	   
		if($stringwidthitem > $stringwidthvalue) {

			$pdf->MultiCell($descriptionwidth,$linegap,$item,$printborder,"L",0);
			
			$nexlinex = $pdf->GetX();
    		$nextliney = $pdf->GetY();
    		$hightofbox=$nextliney-$y;		
			
			//wraping text if the length not fit in cells

			$pdf->SetXY($x+$descriptionwidth,$y);
			if($stringwidthvalue > $studentdatawidth) {
				$pdf->MultiCell(0,$linegap,$value,$printborder,"L");
				$pdf->SetXY($nexlinex,$nextliney);
			}
			else {
				$pdf->Cell(0,$hightofbox,$value,$printborder,1,"L");
			}
			
			
			
		}
		else {
			
			$pdf->SetXY($x+$descriptionwidth,$y);		
			$pdf->MultiCell(0,$linegap,$value,$printborder,"L",0);
			
			$nexlinex = $pdf->GetX();
    		$nextliney = $pdf->GetY();
    		$hightofbox=$nextliney-$y;
    			
			$pdf->SetXY($x,$y);
			$pdf->Cell($descriptionwidth,$hightofbox,$item,$printborder,1,"L");
		}
		
		
	}
	else {
			$pdf->Cell($descriptionwidth,$linegap,$item,$printborder,0,"L");
			$pdf->Cell(0,$linegap,$value,$printborder,1,"L");
		}

}

function dateTowords($num)
{
	$num=(int)$num;
	$datestring = array(
	1=>"FIRST",
	2=>"SECOND",
	3=>"THIRD",
	4=>"FOURTH",
	5=>"FIFTH",
	6=>"SIXTH"
	);
	$rettext="";
	if($num <= 6)
	{
		return $datestring[$num];
	}
	return(numberTowords($num));

}

function numberTowords($num)
{ 
	if($num == 2000)
	{
		return "TWO THOUSAND";
	}
	$ones = array(
	0 =>"ZERO", 
	1 => "ONE", 
	2 => "TWO", 
	3 => "THREE", 
	4 => "FOUR", 
	5 => "FIVE", 
	6 => "SIX", 
	7 => "SEVEN", 
	8 => "EIGHT", 
	9 => "NINE", 
	10 => "TEN", 
	11 => "ELEVEN", 
	12 => "TWELVE", 
	13 => "THIRTEEN", 
	14 => "FOURTEEN", 
	15 => "FIFTEEN", 
	16 => "SIXTEEN", 
	17 => "SEVENTEEN", 
	18 => "EIGHTEEN", 
	19 => "NINETEEN",
	"014" => "FOURTEEN" 
	); 
	$tens = array( 
	0 => "ZERO",
	1 => "TEN",
	2 => "TWENTY", 
	3 => "THIRTY", 
	4 => "FORTY", 
	5 => "FIFTY", 
	6 => "SIXTY", 
	7 => "SEVENTY", 
	8 => "EIGHTY", 
	9 => "NINETY" 
	); 
	$hundreds = array( 
	"HUNDRED", 
	"THOUSAND", 
	"MILLION", 
	"BILLION", 
	"TRILLION", 
	"QUARDRILLION" 
	); //limit t quadrillion 
	
	$num = number_format($num,2,".",","); 
	$num_arr = explode(".",$num); 
	$wholenum = $num_arr[0]; 
	$decnum = $num_arr[1]; 
	$whole_arr = array_reverse(explode(",",$wholenum)); 
	krsort($whole_arr,1); 
	$rettxt = ""; 
	foreach($whole_arr as $key => $i){
		while(substr($i,0,1)=="0")
			$i=substr($i,1,5);
		if($i < 20){ 
			$rettxt .= $ones[$i]; 
		}elseif($i < 100){ 
			if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)]; 
			if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)]; 
		}else{ 
			if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
			if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)]; 
			if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)]; 
		} 
		if($key > 0){ 
			$rettxt .= " ".$hundreds[$key]." "; 
		} 
	} 
	if($decnum > 0){ 
		$rettxt .= " and "; 
	if($decnum < 20){ 
		$rettxt .= $ones[$decnum]; 
	}elseif($decnum < 100){ 
		$rettxt .= $tens[substr($decnum,0,1)]; 
		$rettxt .= " ".$ones[substr($decnum,1,1)]; 
		} 
	} 
	return $rettxt; 
} 

?>