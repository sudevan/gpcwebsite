<?php
 // INCLUDE THE phpToPDF.php FILE

include("tcprivate.inc");
require("../../fpdf181/fpdf.php");

include('connection.php');

function printPlceAndDate($pdf,$student) 
{
	$place="Palakkad";
	$datOfOIssue=reformatDate($student->datOfOIssue);
	$pdf->Cell(0,5,"Place : $place ",0,1,"L");
	$pdf->Cell(0,5,"Date : $datOfOIssue ",0,1,"L");
	$pdf->Cell(0,2,"Signature of Head of Institution",0,0,"R");

}

function printBoarder($pdf) {
	//printing border
	$pdf->Rect(5, 5, 200, 287, 'D');
	$pdf->Rect(5+1, 5+1, 200-2, 287-2, 'D');
}
function printConductCertificate($pdf,$student)
{
	global $descriptionwidth,$linegap;
	$ccheadings = array("T.E 9","GOVERNMENT OF KERALA","DEPARTMENT OF TECHNICAL EDUCATION","CONDUCT CERTIFICATE");
	$admisiondate="2015-16";
	$enddate="2017-18";
	$branch=$student->department;
	$ccmatter="This is to certify that Shri $student->name was student of this institution from academic year $admisiondate to academic year $enddate. ";
	$ccmatter.= "He/She has Completed the prescribed course of studies for Diploma Examination in  $branch\n\n";
	$conductmatter= "His/Her conduct and character are ";
	$student->conduct="Good";
	$conduct=$student->conduct;
	$pdf->AddPage();
	printBoarder($pdf);	
	
	$pdf->SetFont($font,"BU",16);
	//printing govet of kerala
	//$pdf->Cell($linegap,0,$ccheadings[0],0,1,C);
	//$pdf->Ln(15);
	$pdf->Cell(0,0,$ccheadings[1],0,1,C);
	$pdf->Ln(9);
	$pdf->SetFont($font,"BU",12);
	$pdf->Cell(0,0,$ccheadings[2],0,1,C);
	$pdf->Ln(10);
	
	$pdf->Cell(0,0,$ccheadings[3],0,1,C);
	$pdf->Ln(10);
	
	$pdf->SetFont($font,"",12);
	//institution name
	
	$institution="Name of institution : $student->collegeName";
	$pdf->Cell($descriptionwidth,$linegap,$institution,0,1,L);
	$pdf->Ln(8);	
	$serialNo="SL No :$student->tcno";
	//please note no new line here 
	$pdf->Cell($descriptionwidth,$linegap,$serialNo,0,1,L);
	$pdf->Ln(7);
	$admissionno="Admission No :$student->admno";
	$pdf->Cell($descriptionwidth,$linegap,$admissionno,0,1,L);
	$pdf->Ln(10);
	$pdf->MultiCell(0,10,$ccmatter,0,"L");
	$pdf->Cell($descriptionwidth-33,$linegap,$conductmatter,0,0,L);

	$pdf->SetFont($font,"B",13);
	$pdf->Cell(0,$linegap,"Good",0,1,L);
	$pdf->Ln(10);
	$pdf->SetFont($font,"",12);
	printPlceAndDate($pdf,$student);
	
}
if (!isset($student)) 
    $student = new stdClass();
foreach ($_POST as $key=>$value) {
	$student->$key=$value;
}	

//	$str = file_get_contents($filename);
//	$student=json_decode($str);

	// display use our format
	$dob=reformatDate($student->dob);
	//$dateobj=date_create($student->dob);
	//$dob=date_format($dateobj,"d/m/Y");
	$new_birth_date = explode('/', $dob);
		
	$birth_day=dateTowords($new_birth_date[0]);
	$birth_year=numberTowords($new_birth_date[2]);
	$dateObj = DateTime::createFromFormat('!m', $new_birth_date[1]);//Convert the number into month name
	$birth_month = strtoupper($dateObj->format('F')); 


	$datewords= "$birth_day $birth_month $birth_year";
	$student->datOfOIssue=date("Y-m-d");
	$datOfOIssue=reformatDate($student->datOfOIssue);	
	
	$class=dateTowords($student->lastenrolledClass)." Semester ".$student->department;
	
	$dateofApplication=reformatDate($student->dateofApplication);	
	$rollRemovedDate=reformatDate($student->rollRemovedDate);
	$lastAttendanceDate=reformatDate($student->lastAttendanceDate);
	$promotiondate=reformatDate($student->promotiondate);
	$collegeName=$student->collegeName;
	
	/*getting tc number */
	$sql="SELECT tcno  from tcissue where  admissionno='$student->admno'";
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
	$student->tcno=$tcno."/2018-19";
	$tc=array(
	"TC NO"=>$student->tcno,
	"Admission No" => $student->admno,
	"Name of Educational Institution"=>$collegeName,
	"Whether the polytechnic is a Government or Private"=>"Government",
	"Name of Pupil"=>$student->name,
	"Nationality"=>"Indian",
	"Religion and  Community"=>$student->religion." , ". $student->community,
	//"Whether the candidate belongs to scheduled casts or scheduled tribes or other backward communities or whether he/or she converted from scheduled  casts or scheduled tribes"=>$student->category,
	"Name of Guardian with relationship with pupil"=>$student->guardianname.",".$student->guardianrelation,
	"Date of Birth according to admission Register"=> "$dob ( $datewords )",
	"Class to which the pupil was enrolled/promoted"=>$class,
	"Date of Admission or promotion to that class"=>$promotiondate,
	"Whether qualified for promotion to a higher standard"=>$student->b_promoted,
	"Whether the pupil has paid all the fee due to the institution"=>$student->b_feepaid,
	"Whether the pupil was in receipt of fee concession"=>$student->bFeeconcession,
	"Date of pupil's last attendance at Institution"=>$lastAttendanceDate,
	"Date on which the name was removed from the rolls"=>$rollRemovedDate,
	"No of working days upto the date"=>$student->workingDays,
	"No.of working days the pupil attended"=>$student->attendance,
	"Date of application for certificate"=>$dateofApplication,
	"Date of issue of the certificate"=>$datOfOIssue,
	"Reason for leaving the institution"=>$student->reasonForLeaving,
	"Institution to which the pupil intends proceeding"=>$student->proceedinginstitute,
	"Date of last successful vaccination"=>"",
	"Identification marks of student, if any"=>"",
	"Prepared by    ".$student->preparedby=>"",
	"Verified by  ".$student->verifiedby=>"",
	
	);

//save the student data

$sql="UPDATE tcissue SET tcissuedate=now(), tcno=$tcno where admissionno='$student->admno'";

$result=$conn->query($sql);

savestudentdatajson($student);

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
printBoarder($pdf);

//printing the heading
$pdf->SetFont($font,"BU",16);
$pdf->Cell(0,0,$tcheading,0,1,C);
$pdf->Ln(5);

$pdf->SetFont($font,"",12);

foreach ($tc as $key=>$value)
{
	if(is_array($value)) {
		
		foreach ($value as $subkey=>$subvalue)
		{
			//n sub menu print with a tab offset
			printfield($pdf,$subkey,$subvalue,4);
		}
	}	
	else {
		printfield($pdf,$key,$value);
		
	}


	
}
$pdf->Ln(5);
printPlceAndDate($pdf,$student);
printConductCertificate($pdf,$student);
$outputfilename=$student->admno.".pdf";
//$pdf->output();
$pdf->output("D","$outputfilename");
?>