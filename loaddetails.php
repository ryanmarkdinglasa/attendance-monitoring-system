<?php
	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';
	require "vendor/autoload.php";
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	date_default_timezone_set('Asia/Manila');
	$timeDate= date("Y-m-d H:i:s");
 require_once ("include/initialize.php");
 $studenID   =$_POST['IDNO'];
	$con=mysqli_connect("localhost", "root", "", "dbattendance") or die("Database Connection Error!".mysqli_error());
	$query = mysqli_query($con,"SELECT * FROM `tblstudent` WHERE `StudentID`='".$studenID."'");
    $row = mysqli_fetch_array($query);
	$idno=$row['StudentID'];
	$guardianEmail=$row['guardianEmail'];
	$course=$row['CourseID'];
	$year=$row['YearLevel'];
	$name=$row['Lastname'].', '.$row['Firstname']. ' '.$row['Middlename'];
if (isset($_POST['checkattendance'])) {
 	# code...  
 	$timestring = $_POST['stringtime'];
 	$dateObject = new DateTime($timestring);
    $resDate =  $dateObject->format('A');
    $insertTime =  date('h:i A',strtotime($timestring));
    if ($resDate=='AM') {
    	# code...  
		$timecheck='';
    	$validate_verifytimeintimeout_table = validate_verifytimeintimeout($studenID);
    	if ($validate_verifytimeintimeout_table==true) {
    		# code...
    		 $verifytimeintimeout = new VerifyTimeinTimeout();
    		 $row_verify  = $verifytimeintimeout->single_verifytimeintimeout($studenID);
    		 $vefication = $row_verify->Verification; 
    		 // echo $vefication;  
				switch ($vefication) {
		   			case 'TimeIn':
		   				# code... 
		   			       TIMEOUT_VERIFY_UPDATE($studenID,$insertTime);
		   			       $r = validate_timetable($studenID,Date('Y-m-d')); 
						   if ($r == true) {
						   	# code...
						   	// echo "true";
						   		TIMETABLEUPDATE_TIMEOUT_AM($studenID,$insertTime);
						   }else{
						   	// echo "false"; 
								TIMETABLE_TIMEIN_AM_INSERT($studenID,$insertTime);
						   } 
		   				break;
		   			case 'TimeOut': 
		   				# code... 
		   				  TIMEIN_VERIFY_UPDATE($studenID,$insertTime);
		   				   $r = validate_timetable($studenID,Date('Y-m-d')); 
						   if ($r == true) {
						   	# code...
						   	// echo "true";
						   		TIMETABLE_TIMEIN_AM_INSERT($studenID,$insertTime);
								
						   }else{
						   	// echo "false"; 
								TIMETABLE_TIMEIN_AM_INSERT($studenID,$insertTime);
						   }

		   				break;
		   			 
		   		}

    			  
    	}else{
    		 TIMEIN_VERIFY_INSERT($studenID,$insertTime);
             TIMETABLE_TIMEIN_AM_INSERT($studenID,$insertTime);
			 //$timecheck='Time-In:'.$insertTime;
    	}	 
    }else if ($resDate=='PM') {
    	# code...

    	$validate_verifytimeintimeout_table = validate_verifytimeintimeout($studenID);

    	if ($validate_verifytimeintimeout_table==true) {
    		# code...

    		 $verifytimeintimeout = new VerifyTimeinTimeout();
    		 $row_verify  = $verifytimeintimeout->single_verifytimeintimeout($studenID);
    		 $vefication = $row_verify->Verification; 
				switch ($vefication) {
		   			case 'TimeIn': 
		   				# code... 
		   			       TIMEOUT_VERIFY_UPDATE($studenID,$insertTime);
		   			       $r = validate_timetable($studenID,Date('Y-m-d')); 
						   if ($r == true) {
						   	TIMETABLEUPDATE_TIMEOUT_PM($studenID,$insertTime);
						   }else{
							TIMETABLE_TIMEIN_PM_INSERT($studenID,$insertTime);	
						   } 
		   				break;
		   			case 'TimeOut': 
		   				# code... 
		   				  TIMEIN_VERIFY_UPDATE($studenID,$insertTime);
		   				   $r = validate_timetable($studenID,Date('Y-m-d')); 
						   if ($r == true) {
						   		TIMETABLEUPDATE_TIMEIN_PM($studenID,$insertTime);
						   }else{
								TIMETABLE_TIMEIN_PM_INSERT($studenID,$insertTime);
						   }
		   				break;
		   		}
    	}else{
    		 TIMEIN_VERIFY_INSERT($studenID,$insertTime);
             TIMETABLE_TIMEIN_PM_INSERT($studenID,$insertTime);
    	}
    }
	$timecheck='Time: '.$insertTime;
	//sendEmail($timecheck,$idno,$name,$guardianEmail,$course,$year);
	//sendEmail($idno,$name,$guardianEmail,$course,$year);
 
 }
 

if (isset($_POST['name'])) {
 	# code...
 	$sql = "SELECT * FROM `tblstudent`  s, `tblcourse` c WHERE s.`CourseID`=c.`CourseID` AND StudentID='".$studenID."'";
 	$mydb->setQuery($sql);
    @$cur = $mydb->loadSingleResult();
	$name=trim(''.@$cur->Firstname. ' ' .@$cur->Lastname) ;
	if($name==''){
		echo 'None';
	}else{
		echo $name;
	}
    
 }
if (isset($_POST['idno'])) {
 	# code...
 	$sql = "SELECT * FROM `tblstudent`  s, `tblcourse` c WHERE s.`CourseID`=c.`CourseID` AND StudentID='".$studenID."'";
 	$mydb->setQuery($sql);
    @$cur = $mydb->loadSingleResult();
	$idno=trim(''.@$cur->idno) ;
	if($idno==''){
		echo 'None';
	}else{
		echo $idno;
	}
    
 }

  if (isset($_POST['course'])) {
 	# code...
 	$sql = "SELECT * FROM `tblstudent`  s, `tblcourse` c WHERE s.`CourseID`=c.`CourseID` AND StudentID='".$studenID."'";
 	$mydb->setQuery($sql);
    @$cur = $mydb->loadSingleResult();
	$course=trim(''.@$cur->CourseCode) ;
	if($course==''){
		echo 'None';
	}else{
		echo $course;
	}
    
 }

 if (isset($_POST['year'])) {
 	# code...
 	$sql = "SELECT * FROM `tblstudent`  s, `tblcourse` c WHERE s.`CourseID`=c.`CourseID` AND StudentID='".$studenID."'";
 	$mydb->setQuery($sql);
    @$cur = $mydb->loadSingleResult();
	$yearlevel=trim(''.@$cur->YearLevel) ;
	if($yearlevel==''){
		echo 'None';
	}else{
		echo $yearlevel;
	}
   
 }

  if (isset($_POST['img'])) {
 	# code...
 	$sql = "SELECT * FROM `tblstudent`  s, `tblcourse` c WHERE s.`CourseID`=c.`CourseID` AND StudentID='".$studenID."'";
 	$mydb->setQuery($sql);
    @$cur = $mydb->loadSingleResult();
    $photo=trim("".@$cur->StudPhoto);
	if ($photo == ''){
		$photo='images/error_user.png';
		echo '<img title="profile image" id="imgprofile" class="img-hover"   src='.$photo.' />';
	}else{
		$photos='student/'.$photo;
		echo '<img title="profile image" id="imgprofile" class="img-hover"   src='.$photos.' />';
	}
	//echo $photo;
    
 }

// $Attendance_message = '<h2>Attendance Checked</h2>';
function sendEmail($timecheck,$idno,$name,$email,$course,$year){
				$mail = new PHPMailer(true);
				$flag=false;
				date_default_timezone_set('Asia/Manila');
				$timeDate= date("Y-m-d H:i:s");
				try {
				  $mail->isSMTP();
				  $mail->Host = 'smtp.gmail.com';
				  $mail->SMTPAuth = true;
				  // Gmail ID which you want to use as SMTP server
				  $mail->Username = 'nphilsca@gmail.com';
				  // Gmail Password
				  $mail->Password = 'jxzdbtlmqgcayyem';
				  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
				  $mail->Port = 587;
				  // Email ID from which you want to send the email
				  $mail->setFrom('nphilsca@gmail.com');
				  // Recipient Email ID where you want to receive emails
				  $mail->addAddress(''.$email.'');
				  $mail->isHTML(true);
				  $mail->Subject = "Attendance Notification";
				  $mail->Body = "
							<p>Attendance Check: 
							<br>
							<br>
							$timecheck
							<br>
							ID Number: $idno
							<br>
							Name: $name
							<br>
							Course & Year: $course - $year Year
							<br>
							<br>
							
							Best Regards,
							<br>
							PHILSCA</p>";
				  $mail->send();
				  $flag=true;
				} catch (Exception $e) {
					$flag= false;
				}
		return $flag;
	}

 function TIMEIN_VERIFY_INSERT($id,$time){
 	 if (student_notexist($id)) return;
 	$verifytimeintimeout = New VerifyTimeinTimeout();
 	$verifytimeintimeout->StudentID = $id;
 	$verifytimeintimeout->TimeIn = $time;
 	$verifytimeintimeout->Verification = 'TimeIn';
 	$verifytimeintimeout->DateValidation = Date('Y-m-d');
 	$verifytimeintimeout->create();

 }

 function TIMEIN_VERIFY_UPDATE($id,$time){

 	$verifytimeintimeout = New VerifyTimeinTimeout(); 
 	$verifytimeintimeout->Verification = 'TimeIn';
 	$verifytimeintimeout->TimeIn = $time;
 	$verifytimeintimeout->DateValidation = Date('Y-m-d');
 	$verifytimeintimeout->update($id);
 	
 }

 function TIMEOUT_VERIFY_UPDATE($id,$time){

   if (validate_time_interval2($id,'TimeIn',$time)) return;

 	$verifytimeintimeout = New VerifyTimeinTimeout(); 
 	$verifytimeintimeout->TimeOut = $time;
 	$verifytimeintimeout->Verification = 'TimeOut';
 	$verifytimeintimeout->DateValidation = Date('Y-m-d');
 	$verifytimeintimeout->update($id);
 }

// `StudentID`, `TimeInAM`, `TimeOutAM`, `TimeInPM`, `TimeOutPM`, `AttendDate`
function TIMETABLE_TIMEIN_AM_INSERT($id,$time){
  if (student_notexist1($id)) return;
	$timetable = New TimeTable();
	$timetable->StudentID = $id;
	$timetable->TimeInAM =  $time;
	$timetable->AttendDate = Date('Y-m-d'); 
	$timetable->create();  
	attendance_message();
	echo "<h5>Time-In : {$time}</h5></div>";
}

function TIMETABLE_TIMEIN_PM_INSERT($id,$time){
   if (student_notexist1($id)) return;
	$timetable = New TimeTable();
	$timetable->StudentID = $id;
	$timetable->TimeInPM =  $time;
	$timetable->AttendDate = Date('Y-m-d'); 
	$timetable->create();
	attendance_message(); 
	echo "<h5>Time-In : {$time}</h5></div><br><br>";

}
 
function TIMETABLEUPDATE_TIMEIN_AM($id,$time){
	global $mydb;
 	if(time_exists($id,date('Y-m-d'),'TimeInAM')) return;
	$sql = "UPDATE `tbltimetable` SET `TimeInAM`= '{$time}' WHERE DATE(`AttendDate`) = '".Date('Y-m-d')."' AND `StudentID`='" .$id. "'";
	$mydb->setQuery($sql);
	$mydb->executeQuery();
    attendance_message();
	echo "<h5>Time-In : {$time}</h5></div>"; 
}

function TIMETABLEUPDATE_TIMEOUT_AM($id,$time){
	global $mydb;
 
	if(time_exists($id,date('Y-m-d'),'TimeOutAM')) return;

    if (validate_time_interval($id,date('Y-m-d'),'TimeInAM',$time)) return;

	$sql = "UPDATE `tbltimetable` SET `TimeOutAM`= '{$time}' WHERE DATE(`AttendDate`) = '".Date('Y-m-d')."' AND `StudentID`='" .$id. "'";
	$mydb->setQuery($sql);
	$mydb->executeQuery();
    attendance_message();
	echo "<h5>Time-Out : {$time}</h5></div>";
}
  
function TIMETABLEUPDATE_TIMEIN_PM($id,$time){
global $mydb;
     
	if(time_exists($id,date('Y-m-d'),'TimeInPM')) return; 

	$sql = "UPDATE `tbltimetable` SET `TimeInPM`= '{$time}' WHERE DATE(`AttendDate`) = '".Date('Y-m-d')."' AND `StudentID`='" .$id. "'";
	$mydb->setQuery($sql);
	$mydb->executeQuery();
	attendance_message();
	echo "<h5>Time-iN : {$time}</h5></div>";

}
function TIMETABLEUPDATE_TIMEOUT_PM($id,$time){
global $mydb;
 	
 	if(time_exists($id,date('Y-m-d'),'TimeOutPM')) return;

 	if (validate_time_interval($id,date('Y-m-d'),'TimeInPM',$time)) return;

	$sql = "UPDATE `tbltimetable` SET `TimeOutPM`= '{$time}' WHERE DATE(`AttendDate`) = '".Date('Y-m-d')."' AND `StudentID`='" .$id. "'";
	$mydb->setQuery($sql);
	$mydb->executeQuery();
	attendance_message();
	echo "<h5>Time-Out : {$time}</h5></div>";
 }

 function validate_timetable($id,$date){
 	global $mydb;

 	$sql ="SELECT * FROM `tbltimetable` WHERE  `StudentID`='{$id}' AND  date(`AttendDate`)='{$date}'";
 	$mydb->setQuery($sql);
	$result = $mydb->executeQuery();  
 	 $maxrow = $mydb->num_rows($result);

 	 if ($maxrow > 0) {
 	 	# code...
 	 	$time_table_validate = $mydb->loadSingleResult();
 	 	return true;
 	 }else{
 	 	return false;
 	 } 
 }

  function validate_verifytimeintimeout($id){
  	global $mydb;
 	$sql ="SELECT * FROM `tblverifytimeintimeout` WHERE  `StudentID`='{$id}'";
 	$mydb->setQuery($sql);
	$result = $mydb->executeQuery();  
 	 $maxrow = $mydb->num_rows($result);
 	 if ($maxrow > 0) {
 	 	# code...
 		$rowverifytimeintimeout = $mydb->loadSingleResult();
 	 	return true;
 	 }else{
 	 	return false;
 	 } 
 }
 

 function time_exists($id,$date,$tfield){ 
 	global $mydb;
 	$sql ="SELECT * FROM `tbltimetable` WHERE  `StudentID`='{$id}' AND  date(`AttendDate`)='{$date}'";
 	$mydb->setQuery($sql);
	$result = $mydb->executeQuery();  
 	 $max = $mydb->num_rows($result);
 	$row = $mydb->loadSingleResult();
    $flag=0;
    for($i=0;$i<$max;$i++){
      if($row->$tfield!=''){
        $flag=1; 
        echo "<div class='alert alert-danger'>*Attendance is already checked.</div>";
        break;
      }
    }
    return $flag;
  }

  function validate_time_interval($id,$date,$tfield,$time_now){
  	global $mydb;
   

  	$sql ="SELECT * FROM `tbltimetable`  WHERE  `StudentID`='{$id}' AND  date(`AttendDate`)='{$date}'";
 	$mydb->setQuery($sql); 
 	$row = $mydb->loadSingleResult();

 	 $tfrom= time_from($row->$tfield);
     $tto = time_to($time_now);
               
     $tinterval = round(abs($tto  - $tfrom) / 60 ,2);

	    $flag=0;
	    for($i=0;$i<$max;$i++){
	 
	      if($tinterval < 16){
	        $flag=1;
	        echo "<div class='alert alert-danger'>*Attendance is already checked.</div>";
	        break;
	      }


     }
    return $flag;

  }

  function validate_time_interval2($id,$tfield,$time_now){ 
global $mydb;

  	$sql ="SELECT * FROM `tblverifytimeintimeout`  WHERE  `StudentID`='{$id}'";
 	$mydb->setQuery($sql);
	$result = $mydb->executeQuery();  
 	 $max = $mydb->num_rows($result);
 	$row = $mydb->loadSingleResult();

 	 $tfrom= time_from($row->$tfield);
     $tto = time_to($time_now);
               
     $tinterval = round(abs($tto  - $tfrom) / 60 ,2);

	    $flag=0;
	    for($i=0;$i<$max;$i++){
	 
	      if($tinterval < 16){
	        $flag=1; 
	        break;
	      }


     }
    return $flag;

  }

   function student_notexist($id){ 
   	global $mydb;

		$sql ="SELECT * FROM `tblstudent`  WHERE  `StudentID`='{$id}'";
		$mydb->setQuery($sql);
		$result = $mydb->executeQuery();  
		$max = $mydb->num_rows($result);
	    $flag=0; 
	 
	      if($max < 1){
	        $flag=1; 
	        echo "<div class='alert alert-danger'>*ID is not registered in the system.</div>";
	      } 
    return $flag;

  }
   function student_notexist1($id){ 
global $mydb;

		$sql ="SELECT * FROM `tblstudent`  WHERE  `StudentID`='{$id}'";
		$mydb->setQuery($sql);
		$result = $mydb->executeQuery();  
		$max = $mydb->num_rows($result);

	    $flag=0; 
	 
	      if($max < 1){
	        $flag=1;  
	      } 
    return $flag;

  }

 function time_from($time){ 
		$dateObject = new DateTime($time);
		$resHr =  $dateObject->format('H:i'); 
	      return  strtotime($resHr);  
 }
  function time_to($time){
  		$dateObject = new DateTime($time);
		$resHr  =  $dateObject->format('H:i'); 
	    return  strtotime($resHr); 
  }

  function attendance_message(){
     echo "<div class='alert alert-success' style=''><h6>Attendance Checked</h6>"; 
  }

 

 ?>