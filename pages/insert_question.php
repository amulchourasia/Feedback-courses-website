<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$question = $_POST['question'];
	
			$sql = "INSERT INTO questions (question) VALUES ('$question')";
			$result = mysqli_query($conn, $sql);
			echo "<script type='text/javascript'>location.href = 'insertion.php';</script>";
}


 ?>