<?php
	session_start();
	//error_reporting(E_ALL);
	
	//check if the user is not yet logged in
	if(! isset($_SESSION["ACCOUNT_ID"]))
	{
		//if user is not yet logged in, force him or her to go back to login.php
		header("location: login.php");
		exit;
	}	
	else{
		//destroy the session
		$_SESSION = array(); //empty the session array variable
		session_destroy();
		unset($_SESSION);
		header("location: login.php");
		exit; //force exit in order to force the script to stop execution
	}			
?>
