<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Attendance Monitoring System</title>
	<link rel="shortcut icon" href="../images/ico/favicon.ico">
	<link rel="shortcut icon" href="images/ico/favicon.ico">
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
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head><!--/head--> 

<body class="homepage" >
 <style>
	body{
		background:rgb(240,242,245);
	}
 </style>
<div class="cssmenu">
	<?php $path='attendancemonitoring/';
	$user =$_SESSION['ACCOUNT_ID'];
	?>
	<div id='cssmenu' style="margin-bottom: 30px">
		<ul>
		   <li  class="<?php echo (currentpage_public() == 'index.php') ? "active" : false;?>"><a href='/<?php echo $path?>index.php'><i class="fa fa-home"></i> Home</a></li>
		   <li class="<?php echo (currentpage_public() == 'profile') ? "active" : false;?>"><a href='/<?php echo $path?>user/index.php?view=view&id=<?php echo $user?>'><i class="fa fa-user"></i> Profile</a></li>
		   <li  class="<?php echo (currentpage_public() == 'student') ? "active" :false;?>"><a href='/<?php echo $path?>student/'><i class="fa fa-users"></i> Students</a></li>
		   <li class="<?php echo (currentpage_public() == 'attendance') ? "active" : false;?>"><a href='/<?php echo $path?>attendance/'><i class="fa fa-clock-o"></i> Attendance</a></li>
		   <li  class="<?php echo (currentpage_public() == 'course') ? "active" : false;?>"><a href='/<?php echo $path?>course/'><i class="fa fa-graduation-cap"></i> Courses</a></li>
		   <li class="<?php echo (currentpage_public() == 'department') ? "active" : false;?>"><a href='/<?php echo $path?>department/'><i class="fa fa-building"></i>  Departments</a></li>
		   <li class="<?php echo (currentpage_public() == 'user') ? "active" : false;?>"><a href='/<?php echo $path?>user/'><i class="fa fa-user"></i> Users</a></li>
		   <li  class="<?php echo (currentpage_public() == 'report') ? "active" : false;?>"><a href='/<?php echo $path?>report/'><i class="fa fa-info"></i> Reports</a></li>
		   <li ><a href='/<?php echo $path?>logout.php'><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
		</ul>
	</div>
</div>
      

<div class="container"  style="min-height:500px;">
        <div class="w3-container">
            <?php  check_message();  ?>    
            <?php require_once $content; ?>  
        </div>
</div>
 
    <footer id="footer" class="midnight-blue" style="background:rgb(25,49,83);margin-top:-12px;">
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
            //"background" :"red",
            "color"      : "red",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('*Please enter the dates');

        return false;
    }
    if(yearlevel==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            //"background" :"red",
            "color"      : "red",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('*Please select Year Level');

        return false;
    }
    if(attendance==''){
        // alert('Please enter the dates');
         $("#error_msg").hide();
         $("#error_msg").css({ 
            //"background" :"red",
            "color"      : "red",
        });
        $("#error_msg").fadeIn("slow");
        $("#error_msg").html('*Please select Course');

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

$(document).on("click", ".dsave",function(){
	var deptname=document.getElementById("DEPARTMENT_NAME").value.trim();
	var deptdesc=document.getElementById("DEPARTMENT_DESC").value.trim();
	var desc=document.getElementById("DESCRIPTION").value.trim();
	
if (deptname=='') {
         $("#deptname_err").hide();
         $("#deptname_err").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#deptname_err").fadeIn("slow");
        $("#deptname_err").html("*This field is required"); 
        $("#DEPARTMENT_NAME").focus();
       return false;
    }
	else{
          $("#deptname_err").hide();
    }
	if (deptdesc=='') {
         $("#deptdesc_err").hide();
         $("#deptdesc_err").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#deptdesc_err").fadeIn("slow");
        $("#deptdesc_err").html("*This field is required"); 
        $("#DEPARTMENT_DESC").focus();
       return false;
    }
	else{
          $("#deptdesc_err").hide();
    }if (desc=='') {
         $("#deptdesc_err").hide();
         $("#deptdesc_err").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#deptdesc_err").fadeIn("slow");
        $("#deptdesc_err").html("*This field is required"); 
        $("#DEPARTMENT").focus();
       return false;
    }
	else{
          $("#deptdesc_err").hide();
    }
	
});
$(document).on("click", ".csave",function(){
	var coursename=document.getElementById("COURSE_NAME").value;
	var coursedesc=document.getElementById("COURSE_DESC").value;
	
if (coursename=='') {
         $("#err_message").hide();
         $("#err_message").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#err_message").fadeIn("slow");
        $("#err_message").html("*This field is required"); 
        $("#COURSE_NAME").focus();
       return false;
    }
	else{
          $("#err_message").hide();
    }
	if (coursedesc=='') {
         $("#desc_err").hide();
         $("#desc_err").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#desc_err").fadeIn("slow");
        $("#desc_err").html("*This field is required"); 
        $("#COURSE_DESC").focus();
       return false;
    }
	else{
          $("#desc_err").hide();
    }
	
});
$(document).on("click", ".studsave",function(){
	var studentids=document.getElementById("StudentID").value;
	var studentid=studentids.trim();
	if (studentid=='') {
         $("#checkid_message").hide();
         $("#checkid_message").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#checkid_message").fadeIn("slow");
        $("#checkid_message").html("*This field is required"); 
        $("#StudentID").focus();
       return false;
    }else if(studentid.length<8){
		 $("#checkid_message").hide();
         $("#checkid_message").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#checkid_message").fadeIn("slow");
        $("#checkid_message").html("*This field is required"); 
        $("#StudentID").focus();
       return false;
	}
	else{
          $("#errormsg_uname").hide();
    }
	
	var faceids=document.getElementById("faceID").value;
	var faceid=faceids.trim();
	if (faceid=='') {
         $("#checkfaceID_message").hide();
         $("#checkfaceID_message").css({ 
            "color"      : "red"
        });
        $("#checkfaceID_message").fadeIn("slow");
        $("#checkfaceID_message").html("*This field is required"); 
        //$("#StudentID").focus();
       return false;
    }
	else{
          $("#checkfaceID_message").hide();
    }
});
$(document).on("click", ".save",function(){

    var pass1 = document.getElementById("U_PASS").value;
    var pass2 = document.getElementById("RU_PASS").value;
    var name  = document.getElementById("U_NAME").value;
    var username = document.getElementById("U_USERNAME").value;

    if (name=='') {
          $("#errormsg_uname").hide();
         $("#errormsg_uname").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#errormsg_uname").fadeIn("slow");
        $("#errormsg_uname").html("*This field is required"); 
        $("#U_NAME").focus();
       return false;
    }else{
          $("#errormsg_uname").hide();
    }

    if (username=='') {
          $("#errormsg_username").hide();
         $("#errormsg_username").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#errormsg_username").fadeIn("slow");
        $("#errormsg_username").html("*This field is required"); 
        $("#U_USERNAME").focus();
       return false;
    }else{
          $("#errormsg_username").hide();
    }
    if (pass1=='') {
          $("#errormsg_pass1").hide();
         $("#errormsg_pass1").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#errormsg_pass1").fadeIn("slow");
        $("#errormsg_pass1").html("*This field is required"); 
        $("#U_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass1").hide();
    }
    if (pass2=='') {
         $("#errormsg_pass2").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("*This field is required"); 
        $("#RU_PASS").focus();
       return false;
    }else{
          $("#errormsg_pass2").hide();
    }

    if (pass1 != pass2) {
       $("#errormsg_pass2").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#errormsg_pass2").fadeIn("slow");
        $("#errormsg_pass2").html("*Password does not match"); 
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