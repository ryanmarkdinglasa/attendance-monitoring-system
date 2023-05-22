   <?php 
    //error_reporting(0);
	//check if the user is not  logged in
	if(!isset($_SESSION["ACCOUNT_ID"]))
	{
		//if logged in already, redirect to home.php
		header("location: login.php");
		exit;
	}
    ?> 

 <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Add New Student</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row content">
                <div class="features">

                        <form class="form-horizontal span6  wow fadeInDown" action="controller.php?action=add" method="POST"> 
                        <!-- <form class="form-horizontal span6  wow fadeInDown" action="#" method="POST">  -->
                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "StudentID">Student ID:</label>

                                <div class="col-md-8">
                                   <!-- <input type="text" id="mytextbox" onkeyup="javascript:capitalize(this.id, this.value);"> -->
                                   <input class="form-control input-sm" id="StudentID" name="StudentID" placeholder=
                                      "Student ID" type="number" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                                <div class="col-md-8" id="checkid_message" style="margin-left:250px;"></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Firstname">Firstname:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="Firstname" name="Firstname" placeholder=
                                      "Firstname" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);"  autocomplete="off">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Lastname">Lastname:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="Lastname" name="Lastname" placeholder=
                                      "Lastname" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Middlename">Middlename:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="Middlename" name="Middlename" placeholder=
                                      "Middlename" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div>

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Address">Address:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="Address" name="Address" placeholder=
                                      "Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Gender">Sex:</label>

                                <div class="col-md-8">
                                   <div class="col-lg-5">
                                      <div class="radio">
                                        <label><input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female</label>
                                      </div>
                                    </div>

                                    <div class="col-lg-4">
                                      <div class="radio">
                                        <label><input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male</label>
                                      </div>
                                    </div> 
                                   
                                </div>
                              </div>
                            </div> 

                             <!-- <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "BirthDate">Date of birth:</label>
           
                                <div class="col-md-8">
                                   <div class="input-group" id=""> 
                                        <div class="input-group-addon"> 
                                          <i class="fa fa-calendar"></i>
                                        </div>
                                        <input id="datemask2" name="BirthDate"  value="" type="text" class="form-control " size="7" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask required>
                                      </div>
                                </div>
                              </div>
                            </div>  -->
                             <div class="form-group">
                              <div class="rows">
                                <div class="col-md-8">
                                  <h4>
                                  <div class="col-md-4">
                                    <label class="col-lg-12 control-label">Birthday</label>
                                  </div>

                                  <div class="col-lg-3">
                                    <select class="form-control input-sm" name="month">
                                      <option>Month</option>
                                      <?php

                                         $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 12 );    
                                      
                                    
                                        foreach ($mon as $month => $value ) {
                                          
                                              # code...
                                               echo '<option value='.$value.'>'.$month.'</option>';
                                            }
                                      
                                           
                                      ?>
                                    </select>
                                  </div>

                                  <div class="col-lg-2">
                                    <select class="form-control input-sm" name="day">
                                      <option>Day</option>
                                    <?php 
                                      $d = range(31, 1);
                                      foreach ($d as $day) {
                                        echo '<option value='.$day.'>'.$day.'</option>';
                                      }
                                    
                                    ?>
                                      
                                    </select>
                                  </div>

                                  <div class="col-lg-3">
                                    <select class="form-control input-sm" name="year">
                                      <option>Year</option>
                                    <?php 
                                      $years = range(2010, 1900);
                                      foreach ($years as $yr) {
                                        echo '<option value='.$yr.'>'.$yr.'</option>';
                                      }
                                    
                                    ?>
                                    
                                    </select>
                                  </div>
                                  </h4>
                                </div>
                              </div>
                            </div>

                               

                             <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "ContactNo">Mobile No:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="ContactNo" name="ContactNo" placeholder=
                                      "Mobile Number" type="number" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
                                </div>
                              </div>
                            </div> 

                            <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "CourseID">Course:</label>

                                <div class="col-md-8">
                                 <select class="form-control input-sm" name="CourseID" id="CourseID">
                                 <option value="none" >Select</option>
                                    <?php 

                                      $mydb->setQuery("SELECT * FROM `tblcourse`");
                                      $cur = $mydb->loadResultList();

                                      foreach ($cur as $result) {
                                        echo '<option value='.$result->CourseID.' >'.$result->CourseCode.' </option>';

                                      }
                                    ?>


                                   
                                  </select> 
                                </div>
                              </div>
                            </div>
                           <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "YearLevel">Level:</label>

                                <div class="col-md-8">
                                  <select class="form-control input-sm" name="YearLevel" id="YearLevel">
                                      <option value="none" >Select</option>
                                      <option value="First">First</option>
                                      <option value="Second">Second</option>
                                      <option value="Third" >Third</option>
                                      <option value="Fourth" >Fourth</option>
                                  </select> 
                                </div>
                              </div>
                            </div>
						<div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Middlename">Guardian's E-mail:</label>

                                <div class="col-md-8">
                                  
                                   <input class="form-control input-sm" id="guardianEmail" name="guardianEmail" placeholder=
                                      "guardianEmail" type="email" value="" required  autocomplete="off">
                                </div>
                              </div>
                            </div>
							<div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "Middlename">Facial Recognition:</label>

                                <div class="col-md-8">
                                  <button onclick="enrollNewUser()" type="button" class="btn btn-primary" title="Facial Recognition">Add Face Data</button>
                                   <input class="form-control input-sm" type="hidden" id="faceID" name="faceID" placeholder="faceID">
                                </div>
								<div class="col-md-8" id="checkfaceID_message" style="margin-left:250px;"></div>
                              </div>
                            </div>
						
                       <div class="form-group">
                              <div class="col-md-8">
                                <label class="col-md-4 control-label" for=
                                "idno"></label>

                                <div class="col-md-8">
                                 <button class="btn btn-mod btn-sm studsave" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                                    <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                                 </div>
                              </div>
                            </div> 
                  </form>
       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
	<div id="faceio-modal"></div>

    <!-- <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        
        </div> 
  </section> --><!--/#bottom-->
  <script src="https://cdn.faceio.net/fio.js"></script>
<script type="text/javascript">
	// Initialize the library first with your application Public ID.
	// Grab your public ID from the Application Manager on the FACEIO console at: https://console.faceio.net/
	const faceio = new faceIO("fioa643b"); // Replace with your application Public ID
	function enrollNewUser() {
		// Start the facial enrollment process
		faceio.enroll({
			"locale": "auto", // Default user locale
			"userConsent": true, // Set to true if you have already collected user consent
			"payload": {
				/* The payload we want to associate with this particular user
				* which is forwarded back to us on each of his future authentication...
				*/
				//"whoami": 123456, // Example of dummy ID linked to this particular user
				//"email": "john.doe@example.com"
			}
		}).then(userInfo => {
			// User Successfully Enrolled!
			alert(
			`Student Successfully Enrolled! Details:
			Unique Facial ID: ${userInfo.facialId}
			Enrollment Date: ${userInfo.timestamp}
			Gender: ${userInfo.details.gender}
			Age Approximation: ${userInfo.details.age}`
			);
			//console.log(userInfo);
			var inputElement = document.getElementById("faceID");
			//var inputElement2 = document.getElementById("sendId");
			// Set the value of the input element to the facialId
			inputElement.value = userInfo.facialId;
			// handle success, save the facial ID, redirect to dashboard...
		}).catch(errCode => {
			// handle enrollment failure. Visit:
			// https://faceio.net/integration-guide#error-codes
			// for the list of all possible error codes
			// faceio.restartSession();
			handleError(errCode);
			windows.location="index.php?view=add";
			// If you want to restart the session again without refreshing the current TAB. Just call:
			//faceio.restartSession();
			//restartSession() let you enroll the same user again (in case of failure)
			// without refreshing the entire page.
			// restartSession() is available starting from the PRO plan and up, so think of upgrading your app
			// for user usability.
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
<script>

$(document).on("click", ".studsave",function(){
	var studentids=document.getElementById("StudentID").value;
	var studentid=studentids.trim();
if (studentid==''|| studentid.length >2) {
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
          $("#checkid_message").hide();
    }
	 if ($("#StudentID").val().length >3){
		 $("#checkid_message").hide();
         $("#checkid_message").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#checkid_message").fadeIn("slow");
        $("#checkid_message").html("*It should have 8 digits"); 
        $("#StudentID").focus();
       return false;
	}
	else{
          $("#checkid_message").hide();
    }
});
</script>