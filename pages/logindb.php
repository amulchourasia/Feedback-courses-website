<?php 

include 'config.php';

session_start();

error_reporting(0);

/*if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}*/

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = ($_POST['password']);

  $sql = "SELECT * FROM student_info WHERE user_id='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['student_name'] = $row['student_name'];
    $_SESSION['username'] = $row['user_id'];
    $_SESSION['student_id']=$row['id'];
    
   
    echo "<script>alert('Login Successful')</script>";
    echo "<script type='text/javascript'>location.href = 'welcome.php';</script>";
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    echo "<script type='text/javascript'>location.href = 'logsin.php';</script>";
  }
}
?>