<?php 
include 'config.php';

session_start();

error_reporting(0);



if (isset($_POST['submit'])) {
	$coursename = $_POST['course_name'];
	$faculty = $_POST['faculty'];
	$courseid = "";
	$sql = "INSERT INTO course_info (course_name) VALUES ('$coursename')";
	$result = mysqli_query($conn, $sql);


		

	$sql2 = "SELECT course_id FROM course_info WHERE course_name='$coursename'";
	$result2 = mysqli_query($conn, $sql2);

if ($result2->num_rows > 0) {
    $row =  mysqli_fetch_assoc($result2);
    $courseid = $row['course_id'];
  } 


$sql3 = "INSERT INTO course_teacher (course_id,fac_id) VALUES ('$courseid','$faculty')";
	$result = mysqli_query($conn, $sql3);
}

echo "<script type='text/javascript'>location.href = 'insertion.php';</script>";
 ?>