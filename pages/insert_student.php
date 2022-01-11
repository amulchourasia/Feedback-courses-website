<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['stu_name'];
	$email = $_POST['userid'];
	$password = ($_POST['pass']);
	$cpassword = ($_POST['cpass']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM student_info WHERE user_id='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO student_info (student_name, user_id, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				echo "<script type='text/javascript'>location.href = 'insertion.php';</script>";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}


 ?>