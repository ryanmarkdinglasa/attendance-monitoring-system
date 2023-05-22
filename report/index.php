<?php
error_reporting(0);
require_once('../include/initialize.php');
//check if the user is not  logged in
	if(!isset($_SESSION["ACCOUNT_ID"]))
	{
		//if logged in already, redirect to home.php
		header("location: login.php");
		exit;
	}
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'tallyofvotes' :  
	$title ='Tally of Votes';
		$content    = 'tallyofvotes.php';		
		break;
	case 'candidate' :
	$title ='Candidate';
		$content    = 'candidates_report.php';		
		break;
	case 'attendance' : 
	$title ='Attendance'; 
		$content    = 'attendance_report.php';		
		break; 
	case 'event' : 
	$title ='Events'; 
		$content    = 'event_report.php';		
		break; 
	case 'logs' : 
	$title ='Logs'; 
		$content    = 'userlogs.php';		
		break; 
	case 'electionwinners' :  
	$title ='Election Winners';
		$content    = 'electionwinners.php';		
		break;
 
	  default : 
		$title ='Attendance'; 
		$content    = 'attendance_report.php';		
		break; 	
}
  // include '../modal.php';
require_once '../theme/templates.php';
?>


  
