<?php
error_reporting(E_ALL);
require_once("include/initialize.php"); 
?>
<?php 
                $date = new DateTime();
                $datenow = $date->format('l, F jS, Y');  
				$showname='';
				$showcourse='';
				$showyear='';
				$showimg='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge,Chrome=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Attendance Monitoring System</title>  
    <!-- core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/css/animate.min.css" rel="stylesheet">
    <link href="css/css/prettyPhoto.css" rel="stylesheet">
    <link href="css/css/main.css" rel="stylesheet">
    <link href="css/css/responsive.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link href="css/datepicker.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="select2/select2.min.css">
	<link href="css/nav-button-custom.css" rel="stylesheet" media="screen">
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	
 <body id="login" >  
 	<style type="text/css">
  body
    {
    /background:url(../images/attendancebg.jpg)  ;
    /background-repeat: no-repeat;
    /height: 700px; /* You must set a specified height */
    /background-position: center; /* Center the image */
    /background-size:   cover;
	background:rgb(240,242,245);
    } 
  #imgview {
  	max-height: 50%;
  }
  #img_profile {
	  padding:20px 20px;
  }
  #img_profile > img{
    /min-height: 50%;
    width: 280px;
    height:280px;
    /max-height: 50%;
  }
   .context{
	   margin:0 auto;
	   /border:1px solid red;
	   width:350px;
	   /float:left;
   }
	.nav,footer{
		width:100%;
		height:80px;
		background:rgb(25,49,83);
	}
 .border{
	 border:1px solid red;
 }
 .containers{
	 margin-top:-70px;
 }
 .con{
	/border:1px solid green;
	width:320px;
	height:490px;
	margin:0 auto;
	border-radius:5px;
 }
 .btn-white{
	 background:white;
	 color:rgb(25,49,83);
	 border-radius:20px;
	 width:100px;
 }
 .id-text{
	 text-decoration:none;
	 list-style:none;
	 padding:5px 5px 5px 0px;
	/border:1px solid red;
	margin:0px -30px;
	width:300px;
 }
 .list-text{
	 margin:0 auto;
	 width:100%;
	 /border:1px solid blue;
 }
 .time-check{
	 /border:1px solid red;
	 height:90px;
	 position:relative;
 }
  </style>
	<div>
		<div class="nav">
			<div>
				<img class="" width="300px" height="75px" style="float:left;margin:0px 30px;" src="images/philsca-official-logo.png">
				<a href="login.php" class="btn btn-white" style="float:right;margin:20px 30px;"><b>Sign In</b></a>
			</div>
		</div>
    </div>
	<section id="feature" class="transparent-bg">
        <div class="container" style="margin-top:-60px;"> 
			<center>
				<h2 style="font-size:40px">Student Attendance</h2>
			</center>
			<center><div class="time-check  alert "id="check_attendance" name="check_attendance" style="color:red;"></div></center><br>
            <div class=" content" style="margin:0 auto;height:590px;">
                <div class="features">
					<button onclick="authenticateUser()"class="btn btn-primary"title="Authenticate a enrolled student">Authenticate Student</button>
					<div class="con w3-card-4">
						<div class=" context ">
                            <div class="panel" id="imgview" style="width:320px;height:320px;">            
                                <div id="img_profile" class="panel-body">
                                    <img title="profile image" id="imgprofile" class="img-hover"   src="images/user.jpg">
                                </div> 
								<div class=""> 
									<form method="POST" style="display:none;">
										<li class="id-text text-right" style="display: ;"><span class="pull-left">faceID</span><input class="faceID" type="text" id="faceID" name='faceID'></li>
										
										<button id='btn-face' name='btn-face' value='btn-face' type='submit'>btn-face
										</button>
									</form>
									<ul class="list-text">
										<li class="id-text text-right" style="display:none;"><span class="pull-left">inputID</span><input class="StudentID" type="text" id="StudentID" name='StudentID' value='<?php echo $row['StudentID'];?>'></li>
										<li class="id-text text-right"><span class="pull-left">IDNO</span><label id='idno' name='idno'></label></li>
										<li class="id-text  text-right"><span class="pull-left">Name</span><label id="name" name='name'></label></li>
										<li class="id-text  text-right"><span class="pull-left">Course</span><label id="course" name='course'></label></li>
										<li class="id-text  text-right"><span class="pull-left">Year</span><label id="year" name='year'></label></li>
									</ul> 
									<input type="hidden" id='guardianEmail' name='guardianEmail' value='' /> 
									<input type="hidden" id='sendidno' name='sendidno' value='' /> 
									<input type="hidden" id='sendname' name='sendname' value='' /> 
									<input type="hidden" id='sendyear' name='sendyear' value='' /> 
									<input type="hidden" id='sendcourse' name='sendcourse' value='' /> 
									<button style="display:none;"type="submit" value="attsubmit" name="attsubmit" id="attsubmit" class="attsubmit btn btn-primary"> Submit</button>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<div class="wow fadeInDown " style=""> 
			<center>
				<h6 style="text-align: center;"></h6><span id="tick2" class="" >
				</span>&nbsp;|   <?php echo $datenow; ?>
			</center>
		</div>
		<br>
	</body>
    <footer id="footer" class="midnight-blue" style="background:rgb(25,49,83);margin-top:px; ">
        <div class="container" >
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023 Attendance Monitoring System | PHILSCA
                </div> 

            </div>
        </div>
    </footer>
	<div id="faceio-modal"></div>
 <script src="jquery/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js/jquery.prettyPhoto.js"></script>
    <script src="js/js/jquery.isotope.min.js"></script>
    <script src="js/js/main.js"></script>
    <script src="js/js/wow.min.js"></script>
    <script src="select2/select2.full.min.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
  document.getElementById("btn-face").addEventListener("click", function(event) {
    event.preventDefault();
    var faceID = document.getElementById("faceID").value;
	var email='';
    $.ajax({
      type: "POST",
      url: "getStudentData.php",
      data: { faceID: faceID },
      success: function(response) {
        var student = JSON.parse(response);
        document.getElementById("StudentID").value = student.StudentID;
        document.getElementById("idno").innerHTML  = student.StudentID;
        document.getElementById("sendidno").value  = student.StudentID;
        document.getElementById("sendname").value = student.Lastname +', '+student.Firstname+' '+student.Middlename;
        document.getElementById("sendcourse").value = student.CourseCode;
        document.getElementById("sendyear").value = student.YearLevel+' Year';
        document.getElementById("guardianEmail").value = student.guardianEmail;
        document.getElementById("attsubmit").click();
      }
    });
	setTimeout(function() {
	  var guardianEmail = document.getElementById("guardianEmail").value;
	  var idno = document.getElementById("sendidno").value;
	  var name = document.getElementById("sendname").value;
	  var course = document.getElementById("sendcourse").value;
	  var year = document.getElementById("sendyear").value;
	  var Digital=new Date();
		var hours=Digital.getHours();
		var minutes=Digital.getMinutes();
		var seconds=Digital.getSeconds();
		var dn="PM";
		if (hours<12)
		dn="AM";
		if (hours>12)
		hours=hours-12;
		if (hours==0)
		hours=12;
		if (minutes<=9)
		minutes="0"+minutes;
		if (seconds<=9)
		seconds="0"+seconds;
		var ctime=hours+":"+minutes+" "+dn;
		var message = "Attendance: " + ctime +", "+ idno + " " + name + " " + course + "-" + year + " Year";
	  const options = {
	  method: 'POST',
	  url: 'https://rapidprod-sendgrid-v1.p.rapidapi.com/mail/send',
	  headers: {
		'content-type': 'application/json',
		'X-RapidAPI-Key': '3e7b41810dmsh36643b0730bb46fp1ab16bjsnf465416451bc',
		'X-RapidAPI-Host': 'rapidprod-sendgrid-v1.p.rapidapi.com'
	  },
	  data: '{"personalizations":[{"to":[{"email":"'+guardianEmail+'"}],"subject":"Attendance Check"}],"from":{"email":"nphilsca@gmail.com"},"content":[{"type":"text/plain","value":"'+message+'"}]}'
	};
	axios.request(options).then(function (response) {
		//console.log(response.data);
	}).catch(function (error) {
		//console.error(error);
	});
	//alert("Notification sent to "+guardianEmail);
	}, 1000);
	//send Email notification
	
	
  });
</script>

<script type="text/javascript" language="javascript" src="js/attendance_student.js"></script>  
<script type="text/javascript" > 
     $(function () {
         $(".select2").select2();
     });

function show2(){
    $("#StudentID").focus();
    if (!document.all&&!document.getElementById)
    return
    thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
    var Digital=new Date()
    var hours=Digital.getHours()
    var minutes=Digital.getMinutes()
    var seconds=Digital.getSeconds()
    var dn="PM"
    if (hours<12)
    dn="AM"
    if (hours>12)
    hours=hours-12
    if (hours==0)
    hours=12
    if (minutes<=9)
    minutes="0"+minutes
    if (seconds<=9)
    seconds="0"+seconds
    var ctime=hours+":"+minutes+":"+seconds+" "+dn
    thelement.innerHTML=ctime
    setTimeout("show2()",1000)
    }
  window.onload=show2
</script> 
<div id="faceio-modal"></div>
    <script src="https://cdn.faceio.net/fio.js"></script>
    <script type="text/javascript">
        // Instantiate fio.js with your application Public ID
        const faceio = new faceIO("fioa643b");
    </script>
<script src="https://cdn.faceio.net/fio.js"></script>
<script type="text/javascript">
	function playErrorSound(){
		const errorSound = new Audio("error_sound.mp3");
				errorSound.play();
	}
	// Initialize the library first with your application Public ID.
	// Grab your public ID from the Application Manager on the FACEIO console at: https://console.faceio.net/
	//const faceio = new faceIO("fioa643b"); // Replace with your application Public ID
	function authenticateUser() {
		// Start the facial authentication process (Identify a previously enrolled user)
		faceio.authenticate({
			"locale": "auto" // Default user locale
		}).then(userData => {
			//console.log("Success, user recognized")
			console.log("Linked facial Id: " + userData.facialId)
			// Get the input element
			var inputElement = document.getElementById("faceID");
			//var inputElement2 = document.getElementById("sendId");
			// Set the value of the input element to the facialId
			inputElement.value = userData.facialId;
			//inputElement2.value = userData.facialId;
			var buttonElement = document.getElementById("btn-face");
			//var buttonElement2 = document.getElementById("attsubmit");
			// Simulate a click on the button
			buttonElement.click();
			//buttonElement2.click();
				//console.log("Associated Payload: " + JSON.stringify(userData.payload))
				setTimeout(function() {
					window.location = "check_attendance.php";
					}, 9000);
			}).catch(errCode => {
				handleError(errCode);
				const errorSound = new Audio("error_sound.mp3");
				errorSound.play();
				document.getElementById("StudentID").value = '123';
				document.getElementById("attsubmit").click();
				setTimeout(function() {
					
				window.location = "check_attendance.php";
				//alert("Student is not found!");
				}, 5000);
			});
	}
	function handleError(errCode) {
		// Log all possible error codes during user interaction..
		// Refer to: https://faceio.net/integration-guide#error-codes
		// for a detailed overview when these errors are triggered.
		switch (errCode) {
			case fioErrCode.PERMISSION_REFUSED:
				console.log("Access to the Camera stream was denied by the end user");
				break;
			case fioErrCode.NO_FACES_DETECTED:
				console.log("No faces were detected during the enroll or authentication process");
				break;
			case fioErrCode.UNRECOGNIZED_FACE:
				console.log("Unrecognized face on this application's Facial Index");
				break;
			case fioErrCode.MANY_FACES:
				console.log("Two or more faces were detected during the scan process");
				break;
			case fioErrCode.FACE_DUPLICATION:
				console.log("User enrolled previously (facial features already recorded). Cannot enroll again!");
				break;
			case fioErrCode.PAD_ATTACK:
				console.log("Presentation (Spoof) Attack (PAD) detected during the scan process");
				break;
			case fioErrCode.FACE_MISMATCH:
				console.log("Calculated Facial Vectors of the user being enrolled do not matches");
				break;
			case fioErrCode.WRONG_PIN_CODE:
				console.log("Wrong PIN code supplied by the user being authenticated");
				break;
			case fioErrCode.PROCESSING_ERR:
				console.log("Server side error");
				break;
			case fioErrCode.UNAUTHORIZED:
				console.log("Your application is not allowed to perform the requested operation (eg. Invalid ID, Blocked, Paused, etc.). Refer to the FACEIO Console for additional information");
				break;
			case fioErrCode.TERMS_NOT_ACCEPTED:
				console.log("Terms & Conditions set out by FACEIO/host application rejected by the end user");
				break;
			case fioErrCode.UI_NOT_READY:
				console.log("The FACEIO Widget could not be (or is being) injected onto the client DOM");
				break;
			case fioErrCode.SESSION_EXPIRED:
				console.log("Client session expired. The first promise was already fulfilled but the host application failed to act accordingly");
				break;
			case fioErrCode.TIMEOUT:
				console.log("Ongoing operation timed out (eg, Camera access permission, ToS accept delay, Face not yet detected, Server Reply, etc.)");
				break;
			case fioErrCode.TOO_MANY_REQUESTS:
				console.log("Widget instantiation requests exceeded for freemium applications. Does not apply for upgraded applications");
				break;
			case fioErrCode.EMPTY_ORIGIN:
				console.log("Origin or Referer HTTP request header is empty or missing");
				break;
			case fioErrCode.FORBIDDDEN_ORIGIN:
				console.log("Domain origin is forbidden from instantiating fio.js");
				break;
			case fioErrCode.FORBIDDDEN_COUNTRY:
				console.log("Country ISO-3166-1 Code is forbidden from instantiating fio.js");
				break;
			case fioErrCode.SESSION_IN_PROGRESS:
				console.log("Another authentication or enrollment session is in progress");
				break;
			case fioErrCode.NETWORK_IO:
			default:
				console.log("Error while establishing network connection with the target FACEIO processing node");
				break;
		}
	}
</script>
</html>
