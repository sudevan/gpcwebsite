
<?php
 // INCLUDE THE phpToPDF.php FILE

include("tcprivate.inc");	
require("../../fpdf181/fpdf.php"); 

include("connection.php");

function printtable ($pdf,$dueclearlist) {
	
	
	 $arraywidth1=35;
	 $arraywidth2=55	;
	  $w = array($arraywidth1, $arraywidth2, $arraywidth1, ($arraywidth2));
	 $arrayhight=8;
	$header=array("Section","Signature & Name","Section","Signature & name");
	
	//how many repeated data per row. here 2 due clear box
	$dataperrow=2;
	for($i=0;$i<count($header);$i++)
	{
		$pdf->Cell($w[$i],$arrayhight,$header[$i],1,0,'C');
	}
	$pdf->Ln();
	$j=1;
	foreach ($dueclearlist as $key=>$value) {
			$pdf->Cell($arraywidth1,$arrayhight,$key,1,0,'C'); // dept name
			$pdf->Cell($arraywidth2,$arrayhight,$value,1,0,'C');//for signature
			if($j >= $dataperrow)	
			{
				$pdf->Ln();
				$j=1;
			}
			else {
				$j++;
		}
	}
	// for printing blank boxes of the total columns are not multiple of 2
	if($j >= $dataperrow) {
		$pdf->Cell($arraywidth1,$arrayhight,"",1,0,'C'); // dept name
		$pdf->Cell($arraywidth2,$arrayhight,"",1,0,'C');//for signature
		$pdf->Ln();
	}
		
}

//getting data from POST and store it into student structure
//echo "Hello";
//print_r($_POST, $return = null);
if (!isset($student)) 
    $student = new stdClass();
foreach ($_POST as $key=>$value) {
	$student->$key=$value;
}

$regex = "/^(E|\d)\d+\$/";


if (! preg_match($regex, $student->admno))
{
	echo "<h1> Not a valid admission number </h1>";
	$outputfilename="../studentapplication/blankapplicationform.pdf";
	unset($student);
}
else {
	$outputfilename="../studentapplication/".$student->admno.".pdf";
	$student->name=strtoupper($student->name);

	//store it in actual format display use our format
	$dateobj=date_create($student->dob);
	$dob=date_format($dateobj,"d/m/Y");
	$student->dateofApplication=date("Y-m-d");
	
	$dateobj=date_create($student->dateofApplication);
	$dateofApplication=date_format($dateobj,"d/m/Y");
	
	$dateobj=date_create($student->lastAttendanceDate);
	$lastAttendanceDate=date_format($dateobj,"d/m/Y");
	
	$dateobj=date_create($student->promotiondate);
	//$student->promotiondate=date_format($dateobj,"d/m/Y");
	
	$dateobj=date_create($student->rollRemovedDate);
	
	$rollRemovedDate=date_format($dateobj,"d/m/Y");
	
	$student->address = preg_replace('#\R+#', ' ', $student->address);
	
	$student=savestudentdatajson($student);
	
	$collegeName=$student->collegeName;
	
		//print_r($applicationData);
	$sql="INSERT INTO tcissue(admissionno) values ('$student->admno')";
	$result=$conn->query($sql);
	$sql="SELECT applicationno from tcissue where admissionno='$student->admno'";
	$result=$conn->query($sql);	
	$row = $result->fetch_assoc();
	$tcno=$row['applicationno'];
	
	$sql="SELECT departmentid from department where departmentname='$student->department'";
	$result=$conn->query($sql);	
	$row = $result->fetch_assoc();
	$departmentid=$row['departmentid'];
	
	$sql="INSERT INTO student(admissionno,name,departmentid,email,mobile) values ('$student->admno','$student->name',$departmentid,'$student->email','$student->phone')";
	$result=$conn->query($sql);
	
	$applicationData["Department "]= $student->department;
	
	$applicationData["Last enrolled class"]= $student->lastenrolledClass;
	$applicationData["Roll No "]= $student->rollno;
	$applicationData["Admission No "]= $student->admno;
	$applicationData["Name of the student (in block letters) "]= $student->name;
	//$applicationData["Address (Permanent) "]= $student->address;
	$applicationData["Year Of Studies"]= $student->yearOfStudy;
	$applicationData["Date of birth "]= $dob;
	$applicationData["whether the pupil was in receipt of fee concession"]= $student->bFeeconcession;
	$applicationData["Reason for leaving"]= $student->reasonForLeaving;
	
	
	$applicationData["signature of applicant with date"]="";
	
	if($college=='iptgptc.ac.in') {
		
			$dueclearlist=array("General Workshop"=>"","Applied Science lab"=>"","Library"=>"","Co-op Society"=>"","NSS"=>"","NCC"=>"",
			"Hostel"=>"","Academic section"=>"","Sports"=>"");
			
			$ctdueclearlist=array("CESA"=>"","Computer Lab"=>"","Computer hardware lab"=>"","Digital Electronics lab"=>"","Electronic Circuit lab"=>"");
			$eldueclearlist=array("ESA"=>"","Computer Lab"=>"","Digital Electronics lab"=>"","Electronic Circuit lab"=>"");
			$ptdueclearlist=array("PSA"=>"","Computer Lab"=>"");
			
			
			if($student->department == "Computer Engineering") {
					$dueclearlist=array_merge($dueclearlist,$ctdueclearlist);
				}elseif($student->department == "Electronics Engineering") {
					$dueclearlist=array_merge($dueclearlist,$eldueclearlist);
				}
				elseif($student->department == "Printing Technology") {
					$dueclearlist=array_merge($dueclearlist,$ptdueclearlist);
				}
			}
			else {
				$dueclearlist=array("Workshop"=>"","Applied Science lab"=>"","Library"=>"","Co-op Society"=>"","Physical education"=>"","NSS"=>"","NCC"=>"",
			"Hostel"=>"","Academic section"=>"");
	}
	
	$applicationData["Dues if any to be furnished below"]=$dueclearlist;
	
	$lastAttendanceDate=reformatDate($student->lastAttendanceDate);
	$applicationData["Date of pupil's last attendance at Institution"]=$lastAttendanceDate;
	$applicationData["Total No of working days"]= $student->workingDays;
	$applicationData[" No.of working days the pupil attended"]=$student->attendance;
	$applicationData["Signature of tutor"]="";
	$applicationData["Head of Section"]="";
	$applicationData["Date of application"]=$dateofApplication;
	
	
	
	$pdf=new FPDF('P','mm','A4');
	$pdf->AddPage();
	
	//printing border
	$pdf->Rect(5, 5, 200, 287, 'D');
	
	//printing the heading
	$pdf->SetFont($font,"BU",16);
	$pdf->MultiCell(0,6,"{$collegeName}",0,"C");
	$pdf->Ln(4);
	$pdf->MultiCell(0,8,$applicationHeader,0,"C");
	$pdf->Ln(3);
	
	
	$pdf->SetFont($font,"",10);
	
	printfield($pdf,"Application No",$tcno);
	//printing left column description and data
	foreach ($applicationData as $key=>$value)
	{
		if(is_array($value)) {
				printfield($pdf,$key,"");
			//foreach ($value as $subkey=>$subvalue)
			{
				//in sub menu print with a tab offset
				printtable($pdf,$value);
			}
		}	
		else {
			printfield($pdf,$key,$value);
				
		}
	}
	
	$pdf->Ln(10);
	$pdf->Cell(160,10,"Principal",0,0,"R");
	$pdf->output("F","$outputfilename");
	
	echo "<h1> Your application no is $tcno </h1> <br> ";
	
}
echo "<h1>Subimit the printed/handwritten application to office</h1>";
echo "<a href='$outputfilename' download>Click here to download your application</a>";
echo "<p><a href='../index.html' >Home</a></p>";
?>