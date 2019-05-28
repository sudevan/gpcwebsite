<?php
include("tcprivate.inc");	
require("../../fpdf181/fpdf.php"); 
include('connection.php'); 

$sql="SELECT admissionno,tcno,cast(tcissuedate as date) as tcissuedate FROM `tcissue` WHERE tcissuedate IS NOT NULL ORDER by tcno";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$outputfilename="../tcdata/Alltc.pdf";
	$pdf=new FPDF('P','mm','A4');
	while($row = $result->fetch_assoc()) {
		$admissionno=$row['admissionno'];
		$tcno=$row['tcno'];
		$studentarr = getStudentData($admissionno);
		
		//print_r($studentarr['admno']);
		if (!isset($student)) 
	    	$student = new stdClass();
		foreach ($studentarr as $key=>$value) {
			$student->$key=$value;
		}
		$student->tcnumber=$tcno;//tcnumber without year 
		//echo "$student->admno,$student->tcnumber<br>";
		$student->tcissuedate=$row['tcissuedate'];
		if ($student->admno !="") {
			printTC($student,$pdf);
		}
		
		//break;
	}
	$pdf->output("F",$outputfilename);
}

function printTC($student,$pdf)
{
	if($student->dob != "")
	{
		$dob=reformatDate($student->dob);
		$new_birth_date = explode('/', $dob);
		$birth_day=dateTowords($new_birth_date[0]);
		$birth_year=numberTowords($new_birth_date[2]);
		$dateObj = DateTime::createFromFormat('!m', $new_birth_date[1]);//Convert the number into month name
		$birth_month = strtoupper($dateObj->format('F')); 
		$datewords= "$birth_day $birth_month $birth_year";
	}
	else
	{
		//echo "$student->admno";
		return;
	}
	$student->datOfOIssue=$student->tcissuedate;
	$datOfOIssue=reformatDate($student->datOfOIssue);	
	
	$class=dateTowords($student->lastenrolledClass)." Semester ".$student->department;
	
	$dateofApplication=reformatDate($student->dateofApplication);	
	$rollRemovedDate=reformatDate($student->rollRemovedDate);
	$lastAttendanceDate=reformatDate($student->lastAttendanceDate);
	$promotiondate=reformatDate($student->promotiondate);
	$collegeName=$student->collegeName;
	
	$tc=array(
	"TC NO"=>$student->tcnumber."/2018-19",
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
	printpdf($tc,$student,$pdf);
}

function printpdf($tc,$student,$pdf)
{
	global $font,$tcheading;
	
	$pdf->AddPage();
	printBoarder($pdf);

	//printing the heading
	$pdf->SetFont($font,"BU",16);
	$pdf->Cell(0,0,$tcheading,0,1,"C");
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
	//$pdf->output("D","$outputfilename");
}

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