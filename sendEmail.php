<?php
	require_once ("include/initialize.php");
	error_reporting(E_ALL);
	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';
	require "vendor/autoload.php";
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	date_default_timezone_set('Asia/Manila');
	$timeDate= date("Y-m-d H:i:s");
	
	if(isset($_POST['sendEmail'])){
			echo " SEND EMAIL";
				try{
				$send1=sendemail($_POST['guardianEmail']);
					if ($send1){
						echo "Success";				
					}else{
						echo "Tidert1";
					}
				}
				catch(Exception $e){
					echo "tidert2";
				}
				
		}
	function sendemail($email){
				$mail = new PHPMailer(true);
				$flag=false;
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
							<p>Attendacne Check: timeDate
							<br>
							<br>
							ID Number: idno
							<br>
							Name: name
							<br>
							Course: course
							<br>
							Year: year
							<br>
							<br>
							Best Regards,rawr
							<br>
							PHILSCA</p>";
				  $mail->send();
				  $flag=true;
				} catch (Exception $e) {
					$flag= false;
				}
		return $flag;
	}
?>
