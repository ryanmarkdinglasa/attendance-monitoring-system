                      <?php 
    error_reporting(0);
	//check if the user is not  logged in
	if(!isset($_SESSION["ACCOUNT_ID"]))
	{
		//if logged in already, redirect to home.php
		header("location: login.php");
		exit;
	}

                      // $autonum = New Autonumber();
                      // $res = $autonum->single_autonumber(2);

                       ?> 
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">Add New Course</h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
               
            <div class="row content">
                <div class="features">
 
                 <form class="form-horizontal span6 wow fadeInDown" action="controller.php?action=add" method="POST"> 
                           
                           <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "COURSE_NAME">Course:</label>

                              <div class="col-md-8">
                                <input name="deptid" type="hidden" value="">
                                 <input class="form-control input-sm" id="COURSE_NAME" name="COURSE_NAME" placeholder=
                                    "Course Code" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off" required>
								  <div class="" id="err_message" style=""></div>
							  </div>
                            </div>
                          </div> 

                          <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "COURSE_DESC">Description:</label>

                              <div class="col-md-8">
                                <input name="deptid" type="hidden" value="">
                                 <input class="form-control input-sm" id="COURSE_DESC" name="COURSE_DESC" placeholder=
                                    "Course Description" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" autocomplete="off">
								<div class="" id="desc_err" style=""></div>
							  </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "DEPT_ID">Department:</label>

                              <div class="col-md-8">
                               <select class="form-control input-sm" name="DEPT_ID" id="DEPT_ID" required>
                               <option value="none" >Select</option>
                                  <?php 

                                    $mydb->setQuery("SELECT * FROM `tbldepartment`");
                                    $cur = $mydb->loadResultList();

                                    foreach ($cur as $result) {
                                      echo '<option value='.$result->DepartmentID.' >'.$result->Department.' [ '.$result->Description .' ]</option>';

                                    }
                                  ?>


                                 
                                </select> 
                              </div>
                            </div>
                          </div>


                    
                     <div class="form-group">
                            <div class="col-md-8">
                              <label class="col-md-4 control-label" for=
                              "idno"></label>

                              <div class="col-md-8">
                               <button class="btn btn-primary btn-sm csave" name="save" type="submit" ><span class="fa fa-save fw-fa"></span>  Save</button> 
                                  <!-- <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-circle-left fw-fa"></span></span>&nbsp;<strong>List of Users</strong></a> -->
                               </div>
                            </div>
                          </div>


                  
                </form>

       
                
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->
 
 <script>
$(document).on("click", ".csave",function(){
	var coursename=document.getElementById("COURSE_NAME").value;
	
if (coursename=='') {
         $("#err_message").hide();
         $("#err_message").css({ 
            //"background" :"red",
            "color"      : "red"
        });
        $("#err_message").fadeIn("slow");
        $("#err_message").html("*This field is required"); 
        $("#StudentID").focus();
       return false;
    }
	else{
          $("#err_message").hide();
    }
	
});
</script>