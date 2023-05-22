<?php
	error_reporting(0);
	//check if the user is not  logged in
	if(!isset($_SESSION["ACCOUNT_ID"]))
	{
		//if logged in already, redirect to home.php
		header("location: login.php");
		exit;
	}

?>
	<script type="text/javascript" language="javascript" src="../input-mask/jquery.inputmask.js"></script> 
<script type="text/javascript" language="javascript" src="../input-mask/jquery.inputmask.date.extensions.js"></script> 
<script type="text/javascript" language="javascript" src="../input-mask/jquery.inputmask.extensions.js"></script> 
 

<script type="text/javascript" language="javascript" src="../input-mask/meiomask.min.js"></script> 
<script src="../js/ekko-lightbox.js"></script>


<!-- Custom Theme JavaScript --> 


<script type="text/javascript" language="javascript" src="../js/janobe.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                 <h2 class="page-header">List of Students </h2>
                <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
			
            <div class="row content">
				
                <div class="features">
								
				   			 <form class="wow fadeInDown" action="controller.php?action=delete" Method="POST">
								<table id="dash-table" class="table table-striped table-bordered table-hover " style="font-size:12px" cellspacing="0">
								  <thead>
								  	<tr>
										<th>ID Number</th>
								  		<th>Name</th>
								  		<th>Sex</th> 
								  		<th>Address</th>
								  		<th>Contact No.</th>
								  		<th>Course</th>
								  		<th>Guardian's E-mail</th>
								  		<th width="14%" >Action</th>
										<th> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Select All</th>
								  	</tr>	
								  </thead> 
								  <tbody>
								  	<?php  

								  		//$mydb->setQuery("SELECT * FROM `tblstudent` s,`tblcourse` c WHERE s.`CourseID`=c.`CourseID`");
										$mydb->setQuery("SELECT * FROM `tblstudent` s,`tblcourse` c WHERE s.`CourseID`=c.`CourseID` ORDER BY s.`LastName` ASC");
								  		$cur = $mydb->loadResultList();
										//$cur=sort($cur);
										foreach ($cur as $result) {
											 
								  		echo '<tr>';
								  		// echo '<td  ><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->IDNO. '"/>' .$result->IDNO .'</td>';
								  		//echo '<td width="5%" align="center"></td>';
								  		
								  		echo '<td>' . $result->StudentID.'</a></td>';
								  		echo '<td>'. $result->Lastname.', '.$result->Firstname.' '. $result->Middlename.'</td>';
								  		echo '<td>'. $result->Gender.'</td>';
								  		// echo '<td>' .$age.'</td>';
								  		echo '<td>'. $result->Address.'</td>';
								  		echo '<td>'. $result->ContactNo.'</td>';
								  		
								  		echo '<td>' . $result->CourseCode.'-' . $result->Description.'</a></td>';
								  		 echo '<td>'. $result->guardianEmail.'</td>';
								  		echo '<td align="center" > <a title="View Information" href="index.php?view=view&id='.$result->ID.'"  class="btn btn-info btn-xs  ">View <span class="fa fa-info-circle fw-fa"></span></a>
								  					 <a title="Update Students" href="index.php?view=edit&id='.$result->ID.'" class="btn btn-info btn-xs" >&#9998; Edit</a>
								  					 </td>';
										echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->StudentID. '"/> '.'Delete'.'</a></td>';
								  		echo '</tr>';
								  	} 
								  	?>
								  </tbody>
									
								</table>
								<div class="btn-group">
								  <a href="index.php?view=add" class="btn  btn-primary w3-left" style=""><i class="fas fa-user-plus"></i> New</a>
								</div>
								<div class="btn-group">
								   <button type="submit" class="btn btn-primary w3-right w3-red" name="delete"><span class="fa fa-trash"></span> Delete Selected</button> 
								</div>
						</form>
                </div><!--/.services-->
            </div><!--/.row-->  
        </div><!--/.container-->
    </section><!--/#feature-->