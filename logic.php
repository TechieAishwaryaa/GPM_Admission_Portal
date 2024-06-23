<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {



function sy() {
	try {
	
		$tf="0";
		$of="0";
		$total="0";
	
		$cat=$_POST['selectcate'];
		if($cat=="open")
		{
			$tf="6000/-";
			$of="1550/-";
			$total="7550/-";
		}
		if($cat=="scst")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="tfws")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="ews")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="vjnt")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="obc")
		{
			$tf="3000/-";
			$of="1550/-";
			$total="4550/-";
		}


    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "gpm";

    $photofile = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];
    
    $payfile = $_FILES['payssname']['name'];
    $paytmp = $_FILES['payssname']['tmp_name'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO secondyear (roll, enrollment, branch, class, sname, fname, mname, gender, mobile, line1, line2, taluka, district, pincode, state, parentname, parentmobile, yearselect, photo, marks_obtained1, marks_obtained2, marks_out_of1, marks_out_of2, percentage1, percentage2, doc1, doc2, doc3,doc4, sem1, sem2, refid, payssname,category, accname) 
        VALUES (:roll, :enrollment, :branch, :class, :sname, :fname, :mname, :gender, :mobile, :line1, :line2, :taluka, :district, :pincode, :state, :parentname, :parentmobile, :yearselect, :photo, :marks_obtained1, :marks_obtained2, :marks_out_of1, :marks_out_of2, :percentage1, :percentage2, :doc1, :doc2, :doc3,:doc4, :sem1, :sem2, :refid, :payssname, :category, :accname)");

        $stmt->bindParam(':roll', $_POST['roll']);
        $stmt->bindParam(':enrollment', $_POST['enrollment']);
        $stmt->bindParam(':branch', $_POST['branch']);
        $stmt->bindParam(':class', $_POST['class']);
        $stmt->bindParam(':sname', $_POST['sname']);
        $stmt->bindParam(':fname', $_POST['fname']);
        $stmt->bindParam(':mname', $_POST['mname']);
        $stmt->bindParam(':gender', $_POST['gender']);
        $stmt->bindParam(':mobile', $_POST['mobile']);
        $stmt->bindParam(':line1', $_POST['line1']);
        $stmt->bindParam(':line2', $_POST['line2']);
        $stmt->bindParam(':taluka', $_POST['taluka']);
        $stmt->bindParam(':district', $_POST['district']);
        $stmt->bindParam(':pincode', $_POST['pincode']);
        $stmt->bindParam(':state', $_POST['state']);
        $stmt->bindParam(':parentname', $_POST['parentname']);
        $stmt->bindParam(':parentmobile', $_POST['parentmobile']);
        $stmt->bindParam(':yearselect', $_POST['yearselect']);
        $stmt->bindParam(':photo', $photofile);
        $stmt->bindParam(':marks_obtained1', $_POST['marksObtained1']);
        $stmt->bindParam(':marks_obtained2', $_POST['marksObtained2']);
        $stmt->bindParam(':marks_out_of1', $_POST['marksOutOf1']);
        $stmt->bindParam(':marks_out_of2', $_POST['marksOutOf2']);
        $stmt->bindParam(':percentage1', $_POST['percentage1']);
        $stmt->bindParam(':percentage2', $_POST['percentage2']);
        $stmt->bindParam(':doc1', $_FILES['doc1']['name']);
        $stmt->bindParam(':doc2', $_FILES['doc2']['name']);
        $stmt->bindParam(':doc3', $_FILES['doc3']['name']);
        $stmt->bindParam(':doc4', $_FILES['doc4']['name']);
        $stmt->bindParam(':sem1', $_FILES['sem1doc']['name']);
        $stmt->bindParam(':sem2', $_FILES['sem2doc']['name']);

        
        
        $stmt->bindParam(':refid', $_POST['refid']);
        $stmt->bindParam(':accname', $_POST['accname']);
        $stmt->bindParam(':payssname', $payfile);


        $caste1="NO";
		$ncl1="NO";
		$ic1="NO";
		$rc1="NO";
		$pay1="NO";
		$count=0;
		
        move_uploaded_file($phototmp,"secondyear/". $photofile);
        move_uploaded_file($_FILES['doc1']['tmp_name'],"secondyear/". $_FILES['doc1']['name']);
		if($_FILES['doc1']['name']!="")
		{
			$caste1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc2']['tmp_name'],"secondyear/". $_FILES['doc2']['name']);
		if($_FILES['doc2']['name']!="")
		{
			$ncl1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc3']['tmp_name'],"secondyear/". $_FILES['doc3']['name']);
		if($_FILES['doc3']['name']!="")
		{
			$ic1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc4']['tmp_name'],"secondyear/". $_FILES['doc4']['name']);
		if($_FILES['doc4']['name']!="")
		{
			$rc1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['sem1doc']['tmp_name'],"secondyear/". $_FILES['sem1doc']['name']);$count++;
        move_uploaded_file($_FILES['sem2doc']['tmp_name'],"secondyear/". $_FILES['sem2doc']['name']);$count++;
		 move_uploaded_file($_FILES['doc5']['tmp_name'],"secondyear/". $_FILES['doc5']['name']);$count++;
		  move_uploaded_file($_FILES['doc6']['tmp_name'],"secondyear/". $_FILES['doc6']['name']);$count++;
        move_uploaded_file($_FILES['payssname']['tmp_name'],"secondyear/". $_FILES['payssname']['name']);
		if($_FILES['payssname']['name']!="")
		{
			$pay1="YES";
			$count++;
		}
        $stmt->bindParam(':category', $_POST['selectcate']);
        $stmt->execute();
        
		
		$r=$_POST['roll'] ;
		$e=$_POST['enrollment'];
		$c=$_POST['class'];
		$b=$_POST['branch'];
		$sn=$_POST['sname']; 
		$fn=$_POST['fname'] ;
		$mn=$_POST['mname'];
	
		$ad1=$_POST['line1'] ;     
		$ad2=$_POST['line2'];
		$tal=$_POST['taluka'];
		$pin=$_POST['pincode'];
		$dis=$_POST['district'];
		$stat=$_POST['state'];
		$pname=$_POST['parentname'];
		$stumob=$_POST['mobile'];
		$pmob= $_POST['parentmobile'];
		$mo1=$_POST['marksObtained1'];
		$mou1=$_POST['marksOutOf1'];
		$res1=$_POST['res1'];
		$mo2=$_POST['marksObtained2'];
		$mou2=$_POST['marksOutOf2'];
		$res2=$_POST['res2'];
		$adhr = $_POST['adharno'];
		
		require('fpdf.php');
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','','16');
		$pdf->MultiCell(122,7," Roll No:$r   \n Enrollment No: $e \n Class:$c  \n Branch:$b ",0,'L');
		$pdf->Image("secondyear/$photofile",140,1,50,40);
		$pdf->Ln();
		
		
		 $pdf->SetFont('Arial','B','16');
		$pdf->Cell(176,10,"Application Form",0,1,'C');
		$pdf->Cell(176,7,"Admission to $c Diploma in $b",0,1,'C');
		$pdf->Cell(176,7,"for the Academic Year 2023-24",0,1,'C');
		
		 $pdf->SetFont('Arial','','14');
		 $pdf->Cell(176,7,"",0,1,'L');
		$pdf->Cell(176,7,"To,",0,1,'L');
		$pdf->Cell(176,7,"The Principal,",0,1,'L');
		$pdf->Cell(176,7,"Government Polytechnic,",0,1,'L');
		$pdf->Cell(176,7,"Miraj.",0,1,'L');
		
		$pdf->Cell(176,7,"",0,1,'L');
		
		$pdf->Cell(176,7,"Respected Sir,",0,1,'L');
		$pdf->Cell(176,7,"I herewith apply for the admission to $c Diploma in $b",0,1,'L');
		$pdf->Cell(176,7,"for the academic year 2023-24.My paticulars are as below",0,1,'L');
		
		$pdf->Cell(176,7,"",0,1,'L');
		
		$pdf->Cell(176,7,"A) Name in Full:  $sn $fn $mn",0,1,'L');
		$pdf->Cell(176,7,"B) Gender: ".$_POST['gender'],0,1,'L');
		$pdf->Cell(50,7,"C) Permanent Address:  ",0,0,'L');
		$pdf->MultiCell(120,7," $ad1  $ad2 $tal  $pin  $dis,$stat ",0,'');
		  
		 $pdf->Cell(176,7,"D) Student Insurance Nominee Name-Parents/Father/Mother:  $pname",0,1,'L');
		  $pdf->Cell(176,7,"E) Mobile Number:  $stumob",0,0,'L');
		  $pdf->Cell(2,7,"  Parent Mobile Number: $pmob ",0,1,'R');
		 $pdf->Cell(176,7,"F)Result Pass/Fail/ATKT/Carryon/OTO",0,1,'L');
		 $pdf->Cell(10,7,"",1,0,'L');
		 $pdf->Cell(60,7,"Sem",1,0,'L');
		 $pdf->Cell(40,7,"Marks Obtained",1,0,'L');
		 $pdf->Cell(40,7,"Marks Out Of",1,0,'L');
		 $pdf->Cell(40,7,"Result",1,1,'L');
		 
		 $pdf->Cell(10,7,"1",1,0,'L');
		 $pdf->Cell(60,7,"Sem I",1,0,'L');
		 $pdf->Cell(40,7,"$mo1 ",1,0,'L');
		 $pdf->Cell(40,7,"$mou1",1,0,'L');
		 $pdf->Cell(40,7,"$res1",1,1,'L');
		 
		 $pdf->Cell(10,7,"2",1,0,'L');
		 $pdf->Cell(60,7,"Sem II",1,0,'L');
		 $pdf->Cell(40,7,"$mo2",1,0,'L');
		 $pdf->Cell(40,7,"$mou2",1,0,'L');
		 $pdf->Cell(40,7,"$res2",1,1,'L');
		 
		 $pdf->Cell(10,7,"3",1,0,'L');
		 $pdf->Cell(60,7,"Sem III",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,1,'L');
		 
		 $pdf->Cell(10,7,"4",1,0,'L');
		 $pdf->Cell(60,7,"Sem IV",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,1,'L');
		 
		 $pdf->Cell(10,7,"5",1,0,'L');
		 $pdf->Cell(140,7,"Caste",1,0,'L');
		 $pdf->Cell(40,7,"$caste1",1,1,'L');
		 
		 $pdf->Cell(10,7,"6",1,0,'L');
		 $pdf->Cell(140,7,"Non Creamy Layer Certificate",1,0,'L');
		 $pdf->Cell(40,7,"$ncl1",1,1,'L');
		 
		 $pdf->Cell(10,7,"7",1,0,'L');
		 $pdf->Cell(140,7,"Aadhar No",1,0,'L');
		 $pdf->Cell(40,7,"$adhr",1,1,'L');
		 
		 $pdf->Cell(10,7,"8",1,0,'L');
		 $pdf->Cell(140,7,"Income Certificate",1,0,'L');
		 $pdf->Cell(40,7,"$ic1",1,1,'L');
		 
		 $pdf->Cell(10,7,"9",1,0,'L');
		 $pdf->Cell(140,7,"Scholarship Form",1,0,'L');
		 $pdf->Cell(40,7,"$rc1",1,1,'L');
		 
		 $pdf->Cell(10,7,"10",1,0,'L');
		 $pdf->Cell(140,7,"Payment Done",1,0,'L');
		 $pdf->Cell(40,7,"$pay1",1,1,'L');
		 
		 
		 $pdf->Cell(40,7,"",0,1,'L');
		 $pdf->Cell(40,7,"Total no. of certificates enclosed:$count",0,1,'L');
		 
		 $pdf->Cell(40,7,"",0,1,'L');
		 $pdf->Cell(40,7,"",0,1,'L');
		 
		 
		 $pdf->SetFont('Arial','B','14');
		 $pdf->Cell(40,7,"Fee Paid By Student",0,1,'L');
		 
		 $pdf->SetFont('Arial','','14');
		 $pdf->Cell(30,7,"Tution Fee",1,0,'L');
		 $pdf->Cell(40,7,"Rs.  $tf     ",1,1,'L');
		 
		 $pdf->Cell(30,7,"Other Fee",1,0,'L');
		 $pdf->Cell(40,7,"Rs. $of      ",1,1,'L');
		 
		 $pdf->Cell(30,7,"Total Fee",1,0,'L');
		 $pdf->Cell(40,7,"Rs.   $total    ",1,1,'L');
		 
		 $pdf->Cell(40,7,"",0,1,'L');
		 $pdf->Cell(40,7,"",0,1,'L');
		 
		 $pdf->SetFont('Arial','B','14');
		 $pdf->Cell(160,7,"Declaration",0,1,'C');
		 $pdf->SetFont('Arial','','14');
		 $pdf->MultiCell(190,7,"I hereby undertake to obey the rules and regulations enforced by the Government Polytechnic Miraj. I hereby declare that the information given above is true and correct and no material or Information is willfully suppressed by me.\n\nI am aware that if I fail to pay the necessary fees for the term within stipulated time, my registration will be automatically cancelled\n\n\n",0,'L');
		 
		 $pdf->Cell(165,7,"__________________",0,1,'R');
		 $pdf->Cell(160,7,"Date:_______",0,0,'L');
		 $pdf->Cell(2,7,"Signature of student",0,1,'R');
	 
		 $pdf->Ln();
		 $pdf->Ln();
		 $pdf->Cell(167,7,"__________________",0,1,'R');
		 $pdf->Cell(162,7,"Signature of HOD",0,1,'R');
		 
		 $pdf->Ln();
		 
		 $pdf->Ln();
		 $pdf->Cell(180,7,"For office use only",1,1,'L');
		 $pdf->Ln();
		 $pdf->Ln();
		 $pdf->Cell(60,7,"__________________",0,0,'L');
		 $pdf->Cell(60,7,"______________",0,0,'C');
		 $pdf->Cell(60,7,"______________",0,1,'R');
		 
		 $pdf->Cell(60,7,"Clerk(Student Section)",0,0,'l');
		 $pdf->Cell(60,7,"Cashier",0,0,'C');
		 $pdf->Cell(80,7,"Registrar",0,1,'C');
		 
		$pdf->Output();
   
   }
   catch (PDOException $e) {

    if ($e->getCode() === '23000') {
        // Handle the specific error code (23000) for Integrity constraint violation
        
        // You can check the error message to determine if it's a duplicate entry error
        if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
			echo "<center><h2>Form already submited</h2></center>";
            
        } else {
            // Handle other types of integrity constraint violations if needed
        }
    } else {
        // Handle other types of PDOExceptions or re-throw the exception
        throw $e;
    }
}
}
  
   
        
    function ty() {
		try{
		$tf="0";
		$of="0";
		$total="0";
	
		$cat=$_POST['selectcate'];
		if($cat=="open")
		{
			$tf="6000/-";
			$of="1550/-";
			$total="7550/-";
		}
		if($cat=="scst")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="tfws")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="ews")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="vjnt")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="obc")
		{
			$tf="3000/-";
			$of="1550/-";
			$total="4550/-";
		}

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "gpm";

    $photofile = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];
        
	$payfile = $_FILES['payssname']['name'];
    $paytmp = $_FILES['payssname']['tmp_name'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $conn->prepare("INSERT INTO thirdyear (roll, enrollment, branch, class, sname, fname, mname, gender, mobile, line1, line2, taluka, district, pincode, state, parentname, parentmobile, yearselect, photo, marks_obtained1, marks_obtained2, marks_obtained3, marks_obtained4, marks_out_of1, marks_out_of2, marks_out_of3, marks_out_of4, percentage1, percentage2,  percentage3, percentage4, doc1, doc2, doc3, doc4, sem1, sem2, sem3, sem4, redid, payssname, category, accname) 
		VALUES (:roll, :enrollment, :branch, :class, :sname, :fname, :mname, :gender, :mobile, :line1, :line2, :taluka, :district, :pincode, :state, :parentname, :parentmobile, :yearselect, :photo, :marks_obtained1, :marks_obtained2, :marks_obtained3, :marks_obtained4, :marks_out_of1, :marks_out_of2, :marks_out_of3, :marks_out_of4, :percentage1, :percentage2, :percentage3, :percentage4, :doc1, :doc2, :doc3, :doc4, :sem1, :sem2, :sem3, :sem4, :redid, :payssname, :category, :accname)");
				
        $stmt->bindParam(':roll', $_POST['roll']);
        $stmt->bindParam(':enrollment', $_POST['enrollment']);
        $stmt->bindParam(':branch', $_POST['branch']);
        $stmt->bindParam(':class', $_POST['class']);
        $stmt->bindParam(':sname', $_POST['sname']);
        $stmt->bindParam(':fname', $_POST['fname']);
        $stmt->bindParam(':mname', $_POST['mname']);
        $stmt->bindParam(':gender', $_POST['gender']);
        $stmt->bindParam(':mobile', $_POST['mobile']);
        $stmt->bindParam(':line1', $_POST['line1']);
        $stmt->bindParam(':line2', $_POST['line2']);
        $stmt->bindParam(':taluka', $_POST['taluka']);
        $stmt->bindParam(':district', $_POST['district']);
        $stmt->bindParam(':pincode', $_POST['pincode']);
        $stmt->bindParam(':state', $_POST['state']);
        $stmt->bindParam(':parentname', $_POST['parentname']);
        $stmt->bindParam(':parentmobile', $_POST['parentmobile']);
        $stmt->bindParam(':yearselect', $_POST['yearselect']);
        $stmt->bindParam(':photo', $photofile);
        $stmt->bindParam(':marks_obtained1', $_POST['marksObtained1']);
        $stmt->bindParam(':marks_obtained2', $_POST['marksObtained2']);
        $stmt->bindParam(':marks_obtained3', $_POST['marksObtained3']);
        $stmt->bindParam(':marks_obtained4', $_POST['marksObtained4']);
        $stmt->bindParam(':marks_out_of1', $_POST['marksOutOf1']);
        $stmt->bindParam(':marks_out_of2', $_POST['marksOutOf2']);
        $stmt->bindParam(':marks_out_of3', $_POST['marksOutOf3']);
        $stmt->bindParam(':marks_out_of4', $_POST['marksOutOf4']);
        $stmt->bindParam(':percentage1', $_POST['percentage1']);
        $stmt->bindParam(':percentage2', $_POST['percentage2']);
        $stmt->bindParam(':percentage3', $_POST['percentage3']);
        $stmt->bindParam(':percentage4', $_POST['percentage4']);
        $stmt->bindParam(':doc1', $_FILES['doc1']['name']);
        $stmt->bindParam(':doc2', $_FILES['doc2']['name']);
        $stmt->bindParam(':doc3', $_FILES['doc3']['name']);
        $stmt->bindParam(':doc4', $_FILES['doc4']['name']);
        $stmt->bindParam(':sem1', $_FILES['sem1doc']['name']);
        $stmt->bindParam(':sem2', $_FILES['sem2doc']['name']);
        $stmt->bindParam(':sem3', $_FILES['sem3doc']['name']);
        $stmt->bindParam(':sem4', $_FILES['sem4doc']['name']);

        // $stmt->bindParam(':bankname', $_POST['bankname']);
        // $stmt->bindParam(':bankacc', $_POST['bankacc']);
        // $stmt->bindParam(':upiid', $_POST['upiid']);
        $stmt->bindParam(':redid', $_POST['refid']);
        $stmt->bindParam(':accname', $_POST['accname']);
        $stmt->bindParam(':payssname', $payfile);
		
		 $caste1="NO";
		$ncl1="NO";
		$ic1="NO";
		$rc1="NO";
		$pay1="NO";
		$count=0;

        move_uploaded_file($phototmp,"thirdyear/". $photofile);
        move_uploaded_file($_FILES['doc1']['tmp_name'],"thirdyear/". $_FILES['doc1']['name']);
		if($_FILES['doc1']['name']!="")
		{
			$caste1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc2']['tmp_name'],"thirdyear/". $_FILES['doc2']['name']);
		if($_FILES['doc2']['name']!="")
		{
			$ncl1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc3']['tmp_name'],"thirdyear/". $_FILES['doc3']['name']);
		if($_FILES['doc3']['name']!="")
		{
			$ic1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc4']['tmp_name'],"thirdyear/". $_FILES['doc4']['name']);
		if($_FILES['doc4']['name']!="")
		{
			$rc1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['sem1doc']['tmp_name'],"thirdyear/". $_FILES['sem1doc']['name']);$count++;
        move_uploaded_file($_FILES['sem2doc']['tmp_name'],"thirdyear/". $_FILES['sem2doc']['name']);$count++;
        move_uploaded_file($_FILES['sem3doc']['tmp_name'],"thirdyear/". $_FILES['sem3doc']['name']);$count++;
        move_uploaded_file($_FILES['sem4doc']['tmp_name'],"thirdyear/". $_FILES['sem4doc']['name']);$count++;
		move_uploaded_file($_FILES['doc5']['tmp_name'],"thirdyear/". $_FILES['doc5']['name']);$count++;
		move_uploaded_file($_FILES['doc6']['tmp_name'],"thirdyear/". $_FILES['doc6']['name']);$count++;
        move_uploaded_file($_FILES['payssname']['tmp_name'],"thirdyear/". $_FILES['payssname']['name']);
		if($_FILES['payssname']['name']!="")
		{
			$pay1="YES";
			$count++;
		}
        $stmt->bindParam(':category', $_POST['selectcate']);
		$stmt->execute();
        
		
		$r=$_POST['roll'] ;
		$e=$_POST['enrollment'];
		$c=$_POST['class'];
		$b=$_POST['branch'];
		$sn=$_POST['sname']; 
		$fn=$_POST['fname'] ;
		$mn=$_POST['mname'];
	
		$ad1=$_POST['line1'] ;     
		$ad2=$_POST['line2'];
		$tal=$_POST['taluka'];
		$pin=$_POST['pincode'];
		$dis=$_POST['district'];
		$stat=$_POST['state'];
		$pname=$_POST['parentname'];
		$stumob=$_POST['mobile'];
		$pmob= $_POST['parentmobile'];
		$mo1=$_POST['marksObtained1'];
		$mou1=$_POST['marksOutOf1'];
		$res1=$_POST['res1'];
		$mo2=$_POST['marksObtained2'];
		$mou2=$_POST['marksOutOf2'];
		$res2=$_POST['res2'];
		$mo3=$_POST['marksObtained3'];
		$mou3=$_POST['marksOutOf3'];
		$res3=$_POST['res3'];
		$mo4=$_POST['marksObtained4'];
		$mou4=$_POST['marksOutOf4'];
		$res4=$_POST['res4'];
		$adhr = $_POST['adharno'];
		
		
	
	require('fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','','16');
	$pdf->MultiCell(122,7," Roll No:$r   \n Enrollment No: $e \n Class:$c  \n Branch:$b ",0,'L');
	$pdf->Image("thirdyear/$photofile",140,1,50,40);
	$pdf->Ln();
	
	
	 $pdf->SetFont('Arial','B','16');
	$pdf->Cell(176,10,"Application Form",0,1,'C');
	$pdf->Cell(176,7,"Admission to $c Diploma in $b",0,1,'C');
	$pdf->Cell(176,7,"for the Academic Year 2023-24",0,1,'C');
	
	 $pdf->SetFont('Arial','','14');
	 $pdf->Cell(176,7,"",0,1,'L');
	$pdf->Cell(176,7,"To,",0,1,'L');
	$pdf->Cell(176,7,"The Principal,",0,1,'L');
	$pdf->Cell(176,7,"Government Polytechnic,",0,1,'L');
	$pdf->Cell(176,7,"Miraj.",0,1,'L');
	
	$pdf->Cell(176,7,"",0,1,'L');
	
	$pdf->Cell(176,7,"Respected Sir,",0,1,'L');
	$pdf->Cell(176,7,"I herewith apply for the admission to $c Diploma in $b",0,1,'L');
	$pdf->Cell(176,7,"for the academic year 2023-24.My paticulars are as below",0,1,'L');
	
	$pdf->Cell(176,7,"",0,1,'L');
	
	$pdf->Cell(176,7,"A) Name in Full:  $sn $fn $mn",0,1,'L');
	$pdf->Cell(176,7,"B) Gender: ".$_POST['gender'],0,1,'L');
	$pdf->Cell(50,7,"C) Permanent Address:  ",0,0,'L');
	$pdf->MultiCell(120,7," $ad1  $ad2 $tal  $pin  $dis,$stat ",0,'');
	  
	 $pdf->Cell(176,7,"D) Student Insurance Nominee Name-Parents/Father/Mother:  $pname",0,1,'L');
	  $pdf->Cell(176,7,"E) Mobile Number:  $stumob",0,0,'L');
	  $pdf->Cell(2,7,"  Parent Mobile Number: $pmob ",0,1,'R');
	 $pdf->Cell(176,7,"F)Result Pass/Fail/ATKT/Carryon/OTO",0,1,'L');
	 $pdf->Cell(10,7,"",1,0,'L');
	 $pdf->Cell(60,7,"Sem",1,0,'L');
	 $pdf->Cell(40,7,"Marks Obtained",1,0,'L');
	 $pdf->Cell(40,7,"Marks Out Of",1,0,'L');
	 $pdf->Cell(40,7,"Result",1,1,'L');
	 
	 $pdf->Cell(10,7,"1",1,0,'L');
	 $pdf->Cell(60,7,"Sem I",1,0,'L');
	 $pdf->Cell(40,7,"$mo1 ",1,0,'L');
	 $pdf->Cell(40,7,"$mou1",1,0,'L');
	 $pdf->Cell(40,7,"$res1",1,1,'L');
	 
	 $pdf->Cell(10,7,"2",1,0,'L');
	 $pdf->Cell(60,7,"Sem II",1,0,'L');
	 $pdf->Cell(40,7,"$mo2",1,0,'L');
	 $pdf->Cell(40,7,"$mou2",1,0,'L');
	 $pdf->Cell(40,7,"$res2",1,1,'L');
	 
	 $pdf->Cell(10,7,"3",1,0,'L');
	 $pdf->Cell(60,7,"Sem III",1,0,'L');
	 $pdf->Cell(40,7,"$mo3",1,0,'L');
	 $pdf->Cell(40,7,"$mou3",1,0,'L');
	 $pdf->Cell(40,7,"$res3",1,1,'L');
	 
	 $pdf->Cell(10,7,"4",1,0,'L');
	 $pdf->Cell(60,7,"Sem IV",1,0,'L');
	 $pdf->Cell(40,7,"$mo4",1,0,'L');
	 $pdf->Cell(40,7,"$mou4",1,0,'L');
	 $pdf->Cell(40,7,"$res4",1,1,'L');
	 
	 $pdf->Cell(10,7,"5",1,0,'L');
	 $pdf->Cell(140,7,"Caste",1,0,'L');
	 $pdf->Cell(40,7,"$caste1",1,1,'L');
	 
	 $pdf->Cell(10,7,"6",1,0,'L');
	 $pdf->Cell(140,7,"Non Creamy Layer Certificate",1,0,'L');
	 $pdf->Cell(40,7,"$ncl1",1,1,'L');
	 
	 $pdf->Cell(10,7,"7",1,0,'L');
	 $pdf->Cell(140,7,"Aadhar No",1,0,'L');
	 $pdf->Cell(40,7,"$adhr",1,1,'L');
	 
	 $pdf->Cell(10,7,"8",1,0,'L');
	 $pdf->Cell(140,7,"Income Certificate",1,0,'L');
	 $pdf->Cell(40,7,"$ic1",1,1,'L');
	 
	 $pdf->Cell(10,7,"9",1,0,'L');
	 $pdf->Cell(140,7,"Scholarship Form",1,0,'L');
	 $pdf->Cell(40,7,"$rc1",1,1,'L');
	 
	 $pdf->Cell(10,7,"10",1,0,'L');
	 $pdf->Cell(140,7,"Payment Done",1,0,'L');
	 $pdf->Cell(40,7,"$pay1",1,1,'L');
	 
	 
	 $pdf->Cell(40,7,"",0,1,'L');
	 $pdf->Cell(40,7,"Total no. of certificates enclosed:$count",0,1,'L');
	 
	 $pdf->Cell(40,7,"",0,1,'L');
	 $pdf->Cell(40,7,"",0,1,'L');
	 
	 
	 $pdf->SetFont('Arial','B','14');
	 $pdf->Cell(40,7,"Fee Paid By Student",0,1,'L');
	 
	 $pdf->SetFont('Arial','','14');
	 $pdf->Cell(30,7,"Tution Fee",1,0,'L');
	 $pdf->Cell(40,7,"Rs.  $tf     ",1,1,'L');
	 
	 $pdf->Cell(30,7,"Other Fee",1,0,'L');
	 $pdf->Cell(40,7,"Rs. $of      ",1,1,'L');
	 
	 $pdf->Cell(30,7,"Total Fee",1,0,'L');
	 $pdf->Cell(40,7,"Rs.   $total    ",1,1,'L');
	 
	 $pdf->Cell(40,7,"",0,1,'L');
	 $pdf->Cell(40,7,"",0,1,'L');
	 
	 $pdf->SetFont('Arial','B','14');
	 $pdf->Cell(160,7,"Declaration",0,1,'C');
	 $pdf->SetFont('Arial','','14');
	 $pdf->MultiCell(190,7,"I hereby undertake to obey the rules and regulations enforced by the Government Polytechnic Miraj. I hereby declare that the information given above is true and correct and no material or Information is willfully suppressed by me.\n\nI am aware that if I fail to pay the necessary fees for the term within stipulated time, my registration will be automatically cancelled\n\n\n",0,'L');
	 
	 $pdf->Cell(165,7,"__________________",0,1,'R');
	 $pdf->Cell(160,7,"Date:_______",0,0,'L');
	 $pdf->Cell(2,7,"Signature of student",0,1,'R');
 
	 $pdf->Ln();
	 $pdf->Ln();
	 $pdf->Cell(167,7,"__________________",0,1,'R');
	 $pdf->Cell(162,7,"Signature of HOD",0,1,'R');
	 
	 $pdf->Ln();
	 
	 $pdf->Ln();
	 $pdf->Cell(180,7,"For office use only",1,1,'L');
	 $pdf->Ln();
	 $pdf->Ln();
	 $pdf->Cell(60,7,"__________________",0,0,'L');
	 $pdf->Cell(60,7,"______________",0,0,'C');
	 $pdf->Cell(60,7,"______________",0,1,'R');
	 
	 $pdf->Cell(60,7,"Clerk(Student Section)",0,0,'l');
	 $pdf->Cell(60,7,"Cashier",0,0,'C');
	 $pdf->Cell(80,7,"Registrar",0,1,'C');
	 
	$pdf->Output();
    }
	catch (PDOException $e) {
 
	 if ($e->getCode() === '23000') {
		 // Handle the specific error code (23000) for Integrity constraint violation
		 
		 // You can check the error message to determine if it's a duplicate entry error
		 if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
			 echo "<center><h2>Form already submited</h2></center>";
			 
		 } else {
			 // Handle other types of integrity constraint violations if needed
		 }
	 } else {
		 // Handle other types of PDOExceptions or re-throw the exception
		 throw $e;
	 }
 }
 }

    function dsy() {
try{
		$tf="0";
		$of="0";
		$total="0";
	
		$cat=$_POST['selectcate'];
		if($cat=="open")
		{
			$tf="6000/-";
			$of="1550/-";
			$total="7550/-";
		}
		if($cat=="scst")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="tfws")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="ews")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="vjnt")
		{
			$tf="00/-";
			$of="1550/-";
			$total="1550/-";
		}
		if($cat=="obc")
		{
			$tf="3000/-";
			$of="1550/-";
			$total="4550/-";
		}
		

    $servername = "localhost:3308";
    $username = "root";
    $password = "";
    $dbname = "gpm";

    $photofile = $_FILES['photo']['name'];
    $phototmp = $_FILES['photo']['tmp_name'];

    $payfile = $_FILES['payssname']['name'];
    $paytmp = $_FILES['payssname']['tmp_name'];

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO dsy (roll, enrollment, branch, class, sname, fname, mname, gender, mobile, line1, line2, taluka, district, pincode, state, parentname, parentmobile, yearselect, photo, marks_obtained3, marks_obtained4, marks_out_of3, marks_out_of4,  percentage3, percentage4, doc1, doc2, doc3,doc4, sem3, sem4, redid, payssname, category, accname,doc5,doc6) 
        VALUES (:roll, :enrollment, :branch, :class, :sname, :fname, :mname, :gender, :mobile, :line1, :line2, :taluka, :district, :pincode, :state, :parentname, :parentmobile, :yearselect, :photo, :marks_obtained3, :marks_obtained4, :marks_out_of3, :marks_out_of4, :percentage3, :percentage4, :doc1, :doc2, :doc3,:doc4, :sem3, :sem4, :redid, :payssname, :category, :accname,:doc5,:doc6)");

        $stmt->bindParam(':roll', $_POST['roll']);
        $stmt->bindParam(':enrollment', $_POST['enrollment']);
        $stmt->bindParam(':branch', $_POST['branch']);
        $stmt->bindParam(':class', $_POST['class']);
        $stmt->bindParam(':sname', $_POST['sname']);
        $stmt->bindParam(':fname', $_POST['fname']);
        $stmt->bindParam(':mname', $_POST['mname']);
        $stmt->bindParam(':gender', $_POST['gender']);
        $stmt->bindParam(':mobile', $_POST['mobile']);
        $stmt->bindParam(':line1', $_POST['line1']);
        $stmt->bindParam(':line2', $_POST['line2']);
        $stmt->bindParam(':taluka', $_POST['taluka']);
        $stmt->bindParam(':district', $_POST['district']);
        $stmt->bindParam(':pincode', $_POST['pincode']);
        $stmt->bindParam(':state', $_POST['state']);
        $stmt->bindParam(':parentname', $_POST['parentname']);
        $stmt->bindParam(':parentmobile', $_POST['parentmobile']);
        $stmt->bindParam(':yearselect', $_POST['yearselect']);
        $stmt->bindParam(':photo', $photofile);
        $stmt->bindParam(':marks_obtained3', $_POST['marksObtained3']);
        $stmt->bindParam(':marks_obtained4', $_POST['marksObtained4']);
        $stmt->bindParam(':marks_out_of3', $_POST['marksOutOf3']);
        $stmt->bindParam(':marks_out_of4', $_POST['marksOutOf4']);
        $stmt->bindParam(':percentage3', $_POST['percentage3']);
        $stmt->bindParam(':percentage4', $_POST['percentage4']);
        $stmt->bindParam(':doc1', $_FILES['doc1']['name']);
        $stmt->bindParam(':doc2', $_FILES['doc2']['name']);
        $stmt->bindParam(':doc3', $_FILES['doc3']['name']);
        $stmt->bindParam(':doc4', $_FILES['doc4']['name']);
		 
        $stmt->bindParam(':sem3', $_FILES['sem3doc']['name']);
        $stmt->bindParam(':sem4', $_FILES['sem4doc']['name']);

        // $stmt->bindParam(':bankname', $_POST['bankname']);
        // $stmt->bindParam(':bankacc', $_POST['bankacc']);
        // $stmt->bindParam(':upiid', $_POST['upiid']);
        $stmt->bindParam(':redid', $_POST['refid']);
        $stmt->bindParam(':accname', $_POST['accname']);
        $stmt->bindParam(':payssname', $payfile);
		
		$stmt->bindParam(':doc5', $_FILES['doc5']['name']);
		  $stmt->bindParam(':doc6', $_FILES['doc6']['name']);
		 $caste1="NO";
		$ncl1="NO";
		$ic1="NO";
		$rc1="NO";
		$pay1="NO";
		$count=0;

        move_uploaded_file($phototmp,"dsy/". $photofile);
        move_uploaded_file($_FILES['doc1']['tmp_name'],"dsy/". $_FILES['doc1']['name']);
		if($_FILES['doc1']['name']!="")
		{
			$caste1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc2']['tmp_name'],"dsy/". $_FILES['doc2']['name']);
		if($_FILES['doc2']['name']!="")
		{
			$ncl1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc3']['tmp_name'],"dsy/". $_FILES['doc3']['name']);
		if($_FILES['doc3']['name']!="")
		{
			$ic1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['doc4']['tmp_name'],"dsy/". $_FILES['doc4']['name']);
		if($_FILES['doc4']['name']!="")
		{
			$rc1="YES";
			$count++;
		}
        move_uploaded_file($_FILES['sem3doc']['tmp_name'],"dsy/". $_FILES['sem3doc']['name']);$count++;
        move_uploaded_file($_FILES['sem4doc']['tmp_name'],"dsy/". $_FILES['sem4doc']['name']);$count++;
        move_uploaded_file($_FILES['doc5']['tmp_name'],"dsy/". $_FILES['doc5']['name']);$count++;
		move_uploaded_file($_FILES['doc6']['tmp_name'],"dsy/". $_FILES['doc6']['name']);$count++;
        move_uploaded_file($_FILES['payssname']['tmp_name'],"dsy/". $_FILES['payssname']['name']);
		if($_FILES['payssname']['name']!="")
		{
			$pay1="YES";
			$count++;
		}
        $stmt->bindParam(':category', $_POST['selectcate']);
        
        $stmt->execute();
        
        
		
		$r=$_POST['roll'] ;
		$e=$_POST['enrollment'];
		$c=$_POST['class'];
		$b=$_POST['branch'];
		$sn=$_POST['sname']; 
		$fn=$_POST['fname'] ;
		$mn=$_POST['mname'];
	
		$ad1=$_POST['line1'] ;     
		$ad2=$_POST['line2'];
		$tal=$_POST['taluka'];
		$pin=$_POST['pincode'];
		$dis=$_POST['district'];
		$stat=$_POST['state'];
		$pname=$_POST['parentname'];
		$stumob=$_POST['mobile'];
		$pmob= $_POST['parentmobile'];
		$mo3=$_POST['marksObtained3'];
		$mou3=$_POST['marksOutOf3'];
		$res3=$_POST['res3'];
		$mo4=$_POST['marksObtained4'];
		$mou4=$_POST['marksOutOf4'];
		$res4=$_POST['res4'];
		$adhr = $_POST['adharno'];
		
		
		require('fpdf.php');
		$pdf=new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','','16');
		$pdf->MultiCell(122,7," Roll No:$r   \n Enrollment No: $e \n Class:$c  \n Branch:$b ",0,'L');
		$pdf->Image("secondyear/$photofile",140,1,50,40);
		$pdf->Ln();
		
		
		 $pdf->SetFont('Arial','B','16');
		$pdf->Cell(176,10,"Application Form",0,1,'C');
		$pdf->Cell(176,7,"Admission to $c Diploma in $b",0,1,'C');
		$pdf->Cell(176,7,"for the Academic Year 2023-24",0,1,'C');
		
		 $pdf->SetFont('Arial','','14');
		 $pdf->Cell(176,7,"",0,1,'L');
		$pdf->Cell(176,7,"To,",0,1,'L');
		$pdf->Cell(176,7,"The Principal,",0,1,'L');
		$pdf->Cell(176,7,"Government Polytechnic,",0,1,'L');
		$pdf->Cell(176,7,"Miraj.",0,1,'L');
		
		$pdf->Cell(176,7,"",0,1,'L');
		
		$pdf->Cell(176,7,"Respected Sir,",0,1,'L');
		$pdf->Cell(176,7,"I herewith apply for the admission to $c Diploma in $b",0,1,'L');
		$pdf->Cell(176,7,"for the academic year 2023-24.My paticulars are as below",0,1,'L');
		
		$pdf->Cell(176,7,"",0,1,'L');
		
		$pdf->Cell(176,7,"A) Name in Full:  $sn $fn $mn",0,1,'L');
		$pdf->Cell(176,7,"B) Gender: ".$_POST['gender'],0,1,'L');
		$pdf->Cell(50,7,"C) Permanent Address:  ",0,0,'L');
		$pdf->MultiCell(120,7," $ad1  $ad2 $tal  $pin  $dis,$stat ",0,'');
		  
		 $pdf->Cell(176,7,"D) Student Insurance Nominee Name-Parents/Father/Mother:  $pname",0,1,'L');
		  $pdf->Cell(176,7,"E) Mobile Number:  $stumob",0,0,'L');
		  $pdf->Cell(2,7,"  Parent Mobile Number: $pmob ",0,1,'R');
		 $pdf->Cell(176,7,"F)Result Pass/Fail/ATKT/Carryon/OTO",0,1,'L');
		 $pdf->Cell(10,7,"",1,0,'L');
		 $pdf->Cell(60,7,"Sem",1,0,'L');
		 $pdf->Cell(40,7,"Marks Obtained",1,0,'L');
		 $pdf->Cell(40,7,"Marks Out Of",1,0,'L');
		 $pdf->Cell(40,7,"Result",1,1,'L');
		 
		 $pdf->Cell(10,7,"1",1,0,'L');
		 $pdf->Cell(60,7,"Sem I",1,0,'L');
		 $pdf->Cell(40,7,"NA ",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,1,'L');
		 
		 $pdf->Cell(10,7,"2",1,0,'L');
		 $pdf->Cell(60,7,"Sem II",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,0,'L');
		 $pdf->Cell(40,7,"NA",1,1,'L');
		 
		 $pdf->Cell(10,7,"3",1,0,'L');
		 $pdf->Cell(60,7,"Sem III",1,0,'L');
		 $pdf->Cell(40,7,"$mo3",1,0,'L');
		 $pdf->Cell(40,7,"$mou3",1,0,'L');
		 $pdf->Cell(40,7,"$res3",1,1,'L');
		 
		 $pdf->Cell(10,7,"4",1,0,'L');
		 $pdf->Cell(60,7,"Sem IV",1,0,'L');
		 $pdf->Cell(40,7,"$mo4",1,0,'L');
		 $pdf->Cell(40,7,"$mou4",1,0,'L');
		 $pdf->Cell(40,7,"$res4",1,1,'L');
		 
		 $pdf->Cell(10,7,"5",1,0,'L');
		 $pdf->Cell(140,7,"Caste",1,0,'L');
		 $pdf->Cell(40,7,"$caste1",1,1,'L');
		 
		 $pdf->Cell(10,7,"6",1,0,'L');
		 $pdf->Cell(140,7,"Non Creamy Layer Certificate",1,0,'L');
		 $pdf->Cell(40,7,"$ncl1",1,1,'L');
		 
		 $pdf->Cell(10,7,"7",1,0,'L');
		 $pdf->Cell(140,7,"Aadhar No",1,0,'L');
		 $pdf->Cell(40,7,"$adhr",1,1,'L');
		 
		 $pdf->Cell(10,7,"8",1,0,'L');
		 $pdf->Cell(140,7,"Income Certificate",1,0,'L');
		 $pdf->Cell(40,7,"$ic1",1,1,'L');
		 
		 $pdf->Cell(10,7,"9",1,0,'L');
		 $pdf->Cell(140,7,"Scholarship Form",1,0,'L');
		 $pdf->Cell(40,7,"$rc1",1,1,'L');
		 
		 $pdf->Cell(10,7,"10",1,0,'L');
		 $pdf->Cell(140,7,"Payment Done",1,0,'L');
		 $pdf->Cell(40,7,"$pay1",1,1,'L');
		 
		 
		 $pdf->Cell(40,7,"",0,1,'L');
		 $pdf->Cell(40,7,"Total no. of certificates enclosed:$count",0,1,'L');
		 
		 $pdf->Cell(40,7,"",0,1,'L');
		 $pdf->Cell(40,7,"",0,1,'L');
		 
		 
		 $pdf->SetFont('Arial','B','14');
		 $pdf->Cell(40,7,"Fee Paid By Student",0,1,'L');
		 
		 $pdf->SetFont('Arial','','14');
		 $pdf->Cell(30,7,"Tution Fee",1,0,'L');
		 $pdf->Cell(40,7,"Rs.  $tf     ",1,1,'L');
		 
		 $pdf->Cell(30,7,"Other Fee",1,0,'L');
		 $pdf->Cell(40,7,"Rs. $of      ",1,1,'L');
		 
		 $pdf->Cell(30,7,"Total Fee",1,0,'L');
		 $pdf->Cell(40,7,"Rs.   $total    ",1,1,'L');
		 
		 $pdf->Cell(40,7,"",0,1,'L');
		 $pdf->Cell(40,7,"",0,1,'L');
		 
		 $pdf->SetFont('Arial','B','14');
		 $pdf->Cell(160,7,"Declaration",0,1,'C');
		 $pdf->SetFont('Arial','','14');
		 $pdf->MultiCell(190,7,"I hereby undertake to obey the rules and regulations enforced by the Government Polytechnic Miraj. I hereby declare that the information given above is true and correct and no material or Information is willfully suppressed by me.\n\nI am aware that if I fail to pay the necessary fees for the term within stipulated time, my registration will be automatically cancelled\n\n\n",0,'L');
		 
		 $pdf->Cell(165,7,"__________________",0,1,'R');
		 $pdf->Cell(160,7,"Date:_______",0,0,'L');
		 $pdf->Cell(2,7,"Signature of student",0,1,'R');
	 
		 $pdf->Ln();
		 $pdf->Ln();
		 $pdf->Cell(167,7,"__________________",0,1,'R');
		 $pdf->Cell(162,7,"Signature of HOD",0,1,'R');
		 
		 $pdf->Ln();
		 
		 $pdf->Ln();
		 $pdf->Cell(180,7,"For office use only",1,1,'L');
		 $pdf->Ln();
		 $pdf->Ln();
		 $pdf->Cell(60,7,"__________________",0,0,'L');
		 $pdf->Cell(60,7,"______________",0,0,'C');
		 $pdf->Cell(60,7,"______________",0,1,'R');
		 
		 $pdf->Cell(60,7,"Clerk(Student Section)",0,0,'l');
		 $pdf->Cell(60,7,"Cashier",0,0,'C');
		 $pdf->Cell(80,7,"Registrar",0,1,'C');
		 
		$pdf->Output();
    }
	catch (PDOException $e) {
 
	 if ($e->getCode() === '23000') {
		 // Handle the specific error code (23000) for Integrity constraint violation
		 
		 // You can check the error message to determine if it's a duplicate entry error
		 if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
			 echo "<center><h2>Form already submited</h2></center>";
			 
		 } else {
			 // Handle other types of integrity constraint violations if needed
		 }
	 } else {
		 // Handle other types of PDOExceptions or re-throw the exception
		 throw $e;
	 }
 }
 }

        if($_POST['class'] == "Second year") {
            sy();
        }

        if($_POST['class'] == "Third year") {
            ty();
        }

        if($_POST['yearselect'] == "DSY") {
            dsy();
        }

        $conn = null;


		

	}

?>