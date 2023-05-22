<?php
error_reporting(0);
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
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->

<!-- datetime picker CSS -->
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="css/datepicker.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="select2/select2.min.css">

<link href="css/nav-button-custom.css" rel="stylesheet" media="screen">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">-->
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
	   /border:1px solid red;
	   width:350px;
	   float:left;
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
	 width:705px;
	 margin:0 auto;
 }
 .btn-white{
	 background:white;
	 color:rgb(25,49,83);
	 border-radius:20px;
	 width:100px;
 }
  </style>
	<div>
		<div class="nav">
			<div>
				<img class="" width="300px" height="75px" style="float:left;margin:0px 30px;" src="images/philsca-official-logo.png">
				<!--<h1 align=" "  style="font-size:40px;float:left;">Attendance Monitoring System</h1>-->
				<a href="login.php" class="btn btn-white" style="float:right;margin:20px 30px;"><b>Sign In</b></a>
			</div>
		</div>
    </div>
	<section id="feature" class="transparent-bg">
        <div class="container" style="margin-top:-60px;"> 
			<center>
							<h2 style="font-size:40px">Student Attendance</h2>
						</center>
            <div class=" content" style="margin:0 auto; height:350px;">
                <div class="features">
					<div class="con">
						
                      <div class="wow fadeInDown context">
                            <div class="panel" id="imgview" style="width:320px;height:320px;">            
                                <div id="img_profile" class="panel-body">
                                    <img title="profile image" id="imgprofile" class="img-hover"   src="images/user.jpg">
									</label>
                                 </div>   
                            </div>
                        </div>
                      <!--/col-3-->
						<div class="wow fadeInDown context "> 
							
								<div class=""> 
									<ul class="list-group">
										<li class="list-group-item text-right"><span class="pull-left">IDNO</span><input class="StudentID" type="text" id="StudentID" name='StudentID'></li>
										<li class="list-group-item text-right"><span class="pull-left">Name</span><label id="name" name='name'></label></li>
										<li class="list-group-item text-right"><span class="pull-left">Course</span><label id="course" name='course'></label></li>
										<li class="list-group-item text-right"><span class="pull-left">Year</span><label id="year" name='year'></label></li>
									</ul>  
									<div id="check_attendance" style="color:red"></div> 
								<!--<button type="submit" value="attendance" name="attendance" id="attendance" class="btn btn-primary"> Submit</button>-->
								</div>
						</div>
                    </div>
                </div><!--/.services-->
				
            </div><!--/.row-->  
			
        </div><!--/.container-->
    </section><!--/#feature-->
		<div class="wow fadeInDown " style="margin-top:-40px;"> 
			<center>
				<h6 style="text-align: center;"></h6><span id="tick2" class="pull-rigth" >
				</span>&nbsp;|   <?php echo $datenow; ?>
			</center>
		</div>
	</body>
    <footer id="footer" class="midnight-blue" style="background:rgb(25,49,83);margin-top:21px; ">
        <div class="container" >
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023 Attendance Monitoring System | PHILSCA
                </div> 

            </div>
        </div>
    </footer>

 <script src="jquery/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js/jquery.prettyPhoto.js"></script>
    <script src="js/js/jquery.isotope.min.js"></script>
    <script src="js/js/main.js"></script>
    <script src="js/js/wow.min.js"></script>
    <script src="select2/select2.full.min.js"></script> 

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

</html>
