<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$c_id = $_POST['course'];
	$student_id=$_SESSION['student_id'];
	
			$sql = "INSERT INTO feedback_status (course_id,student_id,feedback_status) VALUES ('$c_id','$student_id','0')";
			$result = mysqli_query($conn, $sql);
			echo "<script type='text/javascript'>location.href = 'course_opt.php';</script>";
}


 ?>