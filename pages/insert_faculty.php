<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['fac_name'];
	$email = $_POST['userid'];
	$password = ($_POST['pass']);
	$cpassword = ($_POST['cpass']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM faculty WHERE userid='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO faculty (faculty_name, userid, password)
					VALUES ('$username', '$email', '$password')";
			$sql2 = "INSERT INTO faculty_info (fac_name) VALUES ('$username')";
			$result = mysqli_query($conn, $sql);
			$result2= mysqli_query($conn, $sql2);
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