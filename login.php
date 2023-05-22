
<?php
	
	//session_start(); //start the session first
	error_reporting(E_ALL);
	require_once('include/initialize.php');
	//check if the user is already logged in
	if(isset($_SESSION["username"]))
	{
		//if logged in already, redirect to home.php
		header("location: index.php");
		exit;
		
	}
	
	
	//if the user clicks the login button	
	if(isset($_POST["login"]))
	{
	  $email = trim($_POST['username']);
	  $upass  = trim($_POST['password']);
	  $h_upass = sha1($upass);
	  $message='none';
	  
	   if ($email == '' OR $upass == '') {

		 $message="display:block;";
			 
		} else {  
	  //it creates a new objects of member
		$user = new User();
		//make use of the static function, and we passed to parameters
		$res = $user::userAuthentication($email, $h_upass);
		if ($res==true) { 
		   message("You logon as ".$_SESSION['ACCOUNT_TYPE'].".","success");
		   
		   $sql="INSERT INTO `tbllogs` (`USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) 
			  VALUES (".$_SESSION['ACCOUNT_ID'].",'".date('Y-m-d H:i:s')."','".$_SESSION['ACCOUNT_TYPE']."','Logged in')";
			  $mydb->setQuery($sql);
			  $mydb->executeQuery();

		  if ($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
				header("location: index.php");
				exit;
		  }elseif($_SESSION['ACCOUNT_TYPE']=='Registrar'){
				header("location: index.php");
				exit;

		  }else{
				$message="display:block;";
				header("location: login.php");
				exit;
		  }
		}else{
			$message="display:block;";
		}
	}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewpport" content= "width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge,Chrome=1">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<title></title>
		<script src="js/script.js"></script>
		<link rel="shortcut icon" href="../images/ico/favicon.ico">
		<link rel="shortcut icon" href="images/ico/favicon.ico">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/w3.css" rel="stylesheet">
		<style>
			body{
				background:rgb(240,242,245);
			}
		</style>
	</head>
	<body>
		<div class=" w3-container ">
			<div class="l-form">
				<div id="" class="w3-animate-zoom ">
					
					<form action="login.php" method="POST" id="login_form" class="form w3-white w3-card-2">
						<h2 class="form__title">Sign in</h2>
						<div class="form__warn form__div" id="warning" style="<?php echo$message ?>"	>
							<label><b>Wrong Credentials</b></label>
							<p>Invalid username or password</p>
						</div>
						<div class="form__div">
							<input type="text" name="username" id="username" class="form__input" placeholder=" " required> 
							<label for="" class="form__label">Username</label>
						</div>
						<div class="form__div">
							<input type="password" name="password" id="password" class="form__input" placeholder=" " required>
							<label for="" class="form__label">Password</label>
						</div>
						<button onclick="signUp()" type="button" class="form__reg" style="color:rgb(25,49,83);">Check Attendance</button>
						<input onclick="" type="submit"  class="form__button" id ="login" name="login" value="Sign In" />
						</form>
					</div>	
				</div>
			</div>
		</div>
	</body>
	<footer style="margin-top:-50px;">
		<center>
			<hr>
			<span>&copy; 2023 Attendance Monitoring System | PHILSCA</span>
		</center>
	</footer>
	<script>	
			function signUp() {
		location.href = "check_attendance.php";
		}
			
		$(window).on('load',function(){
				$(".loader").fadeOut(100);
				$(".content").fadeIn(100);
			 });
	</script>
	<style>
	<?php
	include'static/css/style.css';
	include'static/css/w3.css';
	?>
	</style>
</html>