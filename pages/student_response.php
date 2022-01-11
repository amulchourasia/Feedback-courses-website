<?php
session_start();
include 'config.php'; 
?>
<!DOCTYPE html>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/pexels-adrien-olichon-2387793.jpg');"> 
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="../index.php">Feedback Courses
      </a></h1>
      <p>help to choose best</p>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +91 7415501028</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> chourasiaamul@gmail.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08.00am - 10.00pm</span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="navwrapper" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li><a href="../index.php">Home</a></li>
        <li><a href="gallery.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li class="active"><a href="welcome.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
          
        
        
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Enter search term&hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <h6 class="heading">Welcome!</h6> 
 	  <h6 style="margin-top: 10px;">
    <?php echo $_SESSION['student_name'];?></h6>
   

    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <?php 
            $i=0;
            $stu_id=$_SESSION['student_id']; 

            $sql="SELECT * FROM student_info JOIN feedback_status ON feedback_status.student_id=student_info.id JOIN course_info ON course_info.course_id=feedback_status.course_id JOIN feedback ON feedback.course_id=feedback_status.course_id JOIN questions ON questions.quest_id=feedback.quest_id WHERE feedback_status.feedback_status!=0 AND student_info.id='$stu_id'";
            $result=mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_array($result))
          { 
               
          if ($i%3==0) {

        echo'<div class="box-1" style="float: left; width: 33%; height: 200px; margin-top: 20px; background-color: #ddd; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify; overflow:auto;"><h3 style="font-size: 1em; overflow:auto;">';
        echo'Course ID &nbsp&nbsp:&nbsp';
        echo $row['course_id'];
        echo'</h3><p style="color: #000; font-size: 0.9em; margin-top: 10px;">';
        echo'Course Name &nbsp&nbsp:&nbsp';
        echo $row['course_name'];
        echo'<br>Student Name &nbsp&nbsp:&nbsp';
        echo $row['student_name'];
        echo'<br>Question &nbsp&nbsp:&nbsp';
        echo $row['question'];
        echo'<br>Feedback &nbsp&nbsp:&nbsp';
        echo $row['feedback_value'];
        echo'<br>Feedback Status &nbsp&nbsp:&nbsp';
        echo $row['feedback_status'];
        
        echo'</div>';
        $i=$i+1;
        }
        else if ($i%3==1) {
         echo'<div class="box-1" style="float: left; width: 33%; height: 200px; margin-top: 20px; background-color: #ddd; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify; overflow:auto;"><h3 style="font-size: 1em; overflow:auto;">';
        echo'Course ID &nbsp&nbsp:&nbsp';
        echo $row['course_id'];
        echo'</h3><p style="color: #000; font-size: 0.9em; margin-top: 10px;">';
        echo'Course Name &nbsp&nbsp:&nbsp';
        echo $row['course_name'];
        echo'<br>Student Name &nbsp&nbsp:&nbsp';
        echo $row['student_name'];
        echo'<br>Question &nbsp&nbsp:&nbsp';
        echo $row['question'];
        echo'<br>Feedback &nbsp&nbsp:&nbsp';
        echo $row['feedback_value'];
        echo'<br>Feedback Status &nbsp&nbsp:&nbsp';
        echo $row['feedback_status'];
        echo'</div>';
        $i=$i+1;
        }
        else
        {
         echo'<div class="box-1" style="float: left; width: 33%; height: 200px; margin-top: 20px; background-color: #ddd; box-shadow: 0 1px 1px #000; border-radius: 5px; padding: 5px; text-align: justify; overflow:auto;"><h3 style="font-size: 1em; overflow:auto;">';
        echo'Course ID &nbsp&nbsp:&nbsp';
        echo $row['course_id'];
        echo'</h3><p style="color: #000; font-size: 0.9em; margin-top: 10px;">';
        echo'Course Name &nbsp&nbsp:&nbsp';
        echo $row['course_name'];
        echo'<br>Student Name &nbsp&nbsp:&nbsp';
        echo $row['student_name'];
        echo'<br>Question &nbsp&nbsp:&nbsp';
        echo $row['question'];
        echo'<br>Feedback &nbsp&nbsp:&nbsp';
        echo $row['feedback_value'];
        echo'<br>Feedback Status &nbsp&nbsp:&nbsp';
        echo $row['feedback_status'];
        echo'</div>';
        $i=$i+1;
      }

   
  }
?>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('../images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h6 class="heading">Feedback courses </h6>
      <ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
      <p class="nospace">For contact</p>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">For contact</h6>
      <p class="nospace btmspace-15">mail for contact us....</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="heading">famous author</h6>
      <ul class="nospace linklist">
        <li><a href="#"> Stuart Russell and Peter Norvig</a></li>
        <li><a href="#">Silberschatz, Sudarshan, and Korth</a></li>
        <li><a href="#">Drew Conway and John Myles White</a></li>
        <li><a href="#">Andriy Burkov</a></li>
        <li><a href="#">Steven S.
        </a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">learn about languages</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="perl.php"><img src="../images/demo/perl.png" alt=""></a></li>
        <li><a class="imgover" href="jss.php"><img src="../images/demo/js.png" alt=""></a></li>
        <li><a class="imgover" href="java.php"><img src="../images/demo/download.png" alt=""></a></li>
        <li><a class="imgover" href="boots.php"><img src="../images/demo/boot.png" alt=""></a></li>
        <li><a class="imgover" href="c.php"><img src="../images/demo/c.png" alt=""></a></li>
        <li><a class="imgover" href="chash.php"><img src="../images/demo/download (1).png" alt=""></a></li>
        <li><a class="imgover" href="cplus.php"><img src="../images/demo/images.jfif" alt=""></a></li>
        <li><a class="imgover" href="csss.php"><img src="../images/demo/csss.jfif" alt=""></a></li>
        <li><a class="imgover" href="html1.php"><img src="../images/demo/htmllll.png" alt=""></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">Amul chourasia</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>