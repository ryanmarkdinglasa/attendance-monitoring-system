<?php
  $conn = mysqli_connect("localhost", "root", "", "dbattendance");
  $faceID = $_POST["faceID"];
  $sql = "SELECT tblstudent.*, tblcourse.CourseCode
	FROM tblstudent
	JOIN tblcourse ON tblstudent.courseID = tblcourse.courseID
	WHERE tblstudent.faceID = '" . $faceID . "'";
  $query = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($query);

  echo json_encode($row);
?>