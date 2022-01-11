<?php 
include 'config.php';

session_start();
error_reporting(0);

$stu_id=$_SESSION['student_id']; 
$c_id=$_SESSION['course_id']; 
$feedback1=$_POST["feedback2"];
$feedback2=$_POST["feedback3"];
$feedback3=$_POST["feedback"];


$sql1="INSERT INTO feedback values('$c_id','1','$stu_id',$feedback1)";
$sql2="INSERT INTO feedback values('$c_id','2','$stu_id',$feedback2)";
$sql3="INSERT INTO feedback values('$c_id','3','$stu_id',$feedback3)";
$sql4="UPDATE feedback_status SET feedback_status=1 WHERE course_id=$c_id";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);

echo "<script>alert('Updated')</script>";
    echo "<script type='text/javascript'>location.href = 'welcome.php';</script>";
 ?>