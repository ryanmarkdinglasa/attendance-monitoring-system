<?php 
//include($_SERVER['DOCUMENT_ROOT'].'\www\attendancemonitoring\include\initialize.php');
require_once('include/initialize.php');
error_reporting(0);
//check if the user is not  logged in
	if(!isset($_SESSION["ACCOUNT_ID"]))
	{
		//if logged in already, redirect to home.php
		header("location: login.php");
		exit;
	}


$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
	case '1' :
        $title="Home";	
		$content='home.php';		
		break;
	case '2' :
			$title="Home";	
			$content='home.php';		
			break;			
	default :
	    $title="Home";	
		$content ='home.php';		
}
require_once("theme/templates.php");
?>