
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | School Event Management System</title>
	
    <!-- core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/css/animate.min.css" rel="stylesheet">
    <link href="../css/css/animate.min.css" rel="stylesheet">
    <link href="css/css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/css/prettyPhoto.css" rel="stylesheet">
    <link href="css/css/main.css" rel="stylesheet">
    <link href="../css/css/main.css" rel="stylesheet">
    <link href="css/css/responsive.css" rel="stylesheet">
    <link href="../css/css/responsive.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="../css/dataTables.bootstrap.css" rel="stylesheet">
<!-- // <script src="<?php echo web_root; ?>select2/select2.min.css"></script> ./ -->

<!-- datetime picker CSS -->
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="css/datepicker.css" rel="stylesheet" media="screen">
<link href="../css/datepicker.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="select2/select2.min.css">
<link rel="stylesheet" href="../select2/select2.min.css">
<link href="css/nav-button-custom.css" rel="stylesheet" media="screen">
<link href="../css/nav-button-custom.css" rel="stylesheet" media="screen">
<link href="css/menu.css" rel="stylesheet" media="screen">
<link href="../css/menu.css" rel="stylesheet" media="screen">
</head><!--/head--> 

<body class="homepage" >
 <style>
	body{
		background:rgb(240,242,245);
	}
 </style>
<div class="cssmenu">
	<div id='cssmenu' style="margin-bottom: 30px">
		<ul>
		   <li class="active"><a href='index.php'><i class="fa fa-home"></i> Home</a></li>
		   <li class=""><a href='students.php'><i class="fa fa-users"></i> Students</a></li>
		   <li class=""><a href='attendance/'><i class="fa fa-clock-o"></i> Attendance</a></li>
		   <li  class=""><a href='course/'><i class="fa fa-graduation-cap"></i> Courses</a></li>
		   <li class=""><a href='department/'><i class="fa fa-building"></i>  Departments</a></li>
		   <li class=""><a href='user/'><i class="fa fa-user"></i> Users</a></li>
		   <li  class=""><a href='report/'><i class="fa fa-info"></i> Reports</a></li>
		   <li ><a href='logout.php'><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
	</div>
</div>
      

<div class="container"  style="min-height:500px;">
        <div class="row">
            <?php  check_message();  ?>    
           <style type="text/css">
		.ssgmenu  > li > a {

		  font-size: 25px;
		  /*font-weight: bold;*/
		  padding: 15px;
		  color: #000;

		} 
		.ssgmenu > li > a:hover,
		.ssgmenu > li > a:focus{
		  background: #47c9af;
		  color: #fff;
		} 
		 
		.motto p {
		  font-size: 32px;
		  /*font-weight: bold;*/
		  margin-top: 5%;
		  line-height: 32px;

		}
		.motto{
		  text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
		  color: #000;
		  font-size:16px;
			
		}
		.timeh1{
		   text-shadow: 1px 1px 4px rgba(0, 0, 0, 1);
		  color: #000;
		 
		}
		.span10 img {
		  width: 100%;
		  height: 200px;
		}
		.primary-text-color{
			color:rgb(25,49,83);
		}
		.logo{
			margin:0 auto;
			width:60%;
			height:300px;
			/border:1px solid red;
			/margin:20px 0;
		}
		.logo-con{
			width:50%;
			/border:1px solid red;
			float:left;
		}
		.button{
			height:50px;
			width:200px;
			background:rgb(25,49,83);
			border-radius:5px;
			color:white;
			border:none;
		}
		.button:hover{
			/background:rgb(15,30,51);
			background:white;
			color:rgb(15,30,51);
			transition:0.7s;
			border:1px solid rgb(15,30,51);
		}
		</style> 
  
  <div class="w3-container"   >
        <div class="container bg">
          <div class="row">
            <div class="center wow fadeInDown "> 
			<div>
				<img class="" width="500px" height="150px" src="images/philsca-logo2.png">
			</div>
			<br>
			<br>
			<div class="logo">
				<div class="logo-con">
					<h1 class="primary-text-color" style="margin-top:-10px;font-size:60px;text-align:right;">Attendance Monitoring System</h1>
					<!--<img class="" width="250px" height="350px" src="images/philsca-logo.png">-->
				</div>
				<div class="logo-con ">
					<div class="w3-card-4">
					<div class="col-md-12 "> 
                          <h2 class="primary-text-color"id="tick2" class="" style="font-size:px;"> </h2>
                          <p>
						  <?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y'); 
                          ?> 
						  </p>
                    </div>
					
					<div class="col-md-12 ">
						<br>
						<button onclick="checkattendance();" type="submit"  class="button"  >Check Attendance</button>
					</div>
					</div>
				</div>
            </div> 
            
            </div> 
          </div>
        </div><!--/.container-->
    </div><!--/#feature--> 


        </div>
</div>
 
    <footer id="footer" class="midnight-blue" style="background:rgb(25,49,83);margin-top:-61px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2023 Attendance Monitoring System | PHILSCA
                </div> 

            </div>
        </div>
    </footer><!--/#footer-->

 
    <script src="../jquery/jquery.min.js"></script> 
    <script src="jquery/jquery.min.js"></script> 
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../js/js/jquery.prettyPhoto.js"></script>
    <script src="js/js/jquery.prettyPhoto.js"></script>
    <script src="../js/js/jquery.isotope.min.js"></script>
    <script src="js/js/jquery.isotope.min.js"></script>
    <script src="../js/js/main.js"></script>
    <script src="js/js/main.js"></script>
    <script src="../js/js/wow.min.js"></script>
    <script src="js/js/wow.min.js"></script>

    <!-- DataTables JavaScript -->
<script src="../js/jquery.dataTables.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<script src="../select2/select2.full.min.js"></script>
<script src="select2/select2.full.min.js"></script>
<script src="../slimScroll/jquery.slimscroll.min.js"></script>
<script src="slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" src="../js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>




<script type="text/javascript" language="javascript" src="input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="input-mask/jquery.inputmask.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="input-mask/meiomask.min.js"></script> 
<script src="js/ekko-lightbox.js"></script>
<script type="text/javascript" language="javascript" src="../input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="../input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="../input-mask/jquery.inputmask.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="../input-mask/meiomask.min.js"></script> 
<script src="../js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript --> 


<script type="text/javascript" language="javascript" src="js/janobe.js"></script> 
<script type="text/javascript" language="javascript" src="../js/janobe.js"></script> 

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
	
    <script>
// <!--/. tells about the time  -->
function checkattendance(){
	location.href="attendance/check_attendance.php"
}
function show2(){
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
//-->

</script>    
<script> 
    
    $(function () {
         $(".select2").select2();
    })
  

     $('input[data-mask]').each(function() {
        var input = $(this);
        input.setMask(input.data('mask'));
      });

   //Datemask2 mm/dd/yyyy
    $("#datetime12").inputmask("hh:mm t", {"placeholder": "hh:mm t"});

       //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();
 
     
 $(document).ready(function() {
    $('#dash-table').DataTable({
                responsive: true ,
                  "sort": false
        });
 
    });
 
  function capitalize(textboxid, str) {
      // string with alteast one character
      // if (str && str.length >= 1)
      // {       
      //     var firstChar = str.charAt(0);
      //     var remainingStr = str.slice(1);
      //     str = firstChar.toUpperCase() + remainingStr;
      // }
    
      document.getElementById(textboxid).value =  str.toUpperCase();
  }


  $("#search_attendance").on("click", function(){

    var attenddate = $(".date_pickerfrom").val();
    var yearlevel = $(".YearLevel").val();
    var attendance = $(".Attendance").val();

    if(attenddate==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please enter the dates');

        return false;
    }
    if(yearlevel==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please select Year Level');

        return false;
    }
    if(attendance==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            "background" :"red",
            "color"      : "#fff",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('Please select Course');

        return false;
    }
  })

 
$('.date_pickerfrom').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0 

    });


$('.date_pickerto').datetimepicker({
  format: 'mm/dd/yyyy',
   startDate : '01/01/2000', 
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1, 
    startView: 2,
    minView: 2,
    forceParse: 0   

    });
 
 
$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
     changeMonth: true,
      changeYear: true,
      yearRange: '1945:'+(new Date).getFullYear() 
    });

</script>  
   
<script type="text/javascript" > 

$(document).on("click", ".save",function(){

    var pass1 = document.getElementById("U_PASS").value;
    var pass2 = document.getElementById("RU_PASS").value;
    var name  = document.getElementById("U_NAME").value;
    var username = document.getElementById("U_USERNAME").value;

    if (name=='') {
          $("#errormsg_uname").hide();
         $("#errormsg_uname").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_uname").fadeIn("slow");
        $("#errormsg_uname").html("This field is required"); 
        $("#U_NAME").focus();
       return false;
    }else{
          $("#errormsg_uname").hide();
    }

    if (username=='') {
          $("#errormsg_username").hide();
         $("#errormsg_username").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_username").fadeIn("slow");
        $("#errormsg_username").html("This field is required"); 
        $("#U_USERNAME").focus();
       return false;
    }else{
          $("#errormsg_username").hide();
    }
    if (pass1=='') {
          $("#errormsg_pass1").hide();
         $("#errormsg_pass1").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass1").fadeIn("slow");
        $("#errormsg_pass1").html("This field is required"); 
        $("#U_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass1").hide();
    }
    if (pass2=='') {
         $("#errormsg_pass2").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("This field is required"); 
        $("#RU_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass2").hide();
    }

    if (pass1 != pass2) {
       $("#errormsg_pass2").css({ 
            "background" :"red",
            "color"      : "#fff"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("Password does not match"); 
        $("#RU_PASS").focus();
       return false;
    } 

});
  

// $(document).on("click", ".studsave", function () {
//  /* load all variables */
   
//     var studentid =  document.getElementById('StudentID').value 
   
//     // $("#checkid_message").hide();

//    // alert(courseid);
//      $.ajax({    //create an ajax request to load_page.php
//         type:"POST",  
//         url: "controller.php?action=checkid",    
//         dataType: "text",   //expect html to be returned  
//         data:{check:'', IDNO:studentid},               
//         success: function(data){                    
//          $('#checkid_message').html(data); 
           
//            if (data=='Student ID already in use!') {
//             return false;
//            }else{
//             return true;
//            }

//         }

//     }); 
  
// }); 


$("#gosearch").click(function() {
    var instructor = document.getElementById("INST_ID").value;
    if (instructor == 'Select') {
        alert("Pls. Select Instructor.");
        return false;
    }else{
        return true;
    };
})
</script> 
</body>
</html>