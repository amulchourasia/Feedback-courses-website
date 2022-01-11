
<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <h1><a href="../index ">Feedback Courses
      </a></h1>
      <p>help to choose best</p>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +91 (741)5501028</span></div>
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
        <li><a href="gallery.php">About us</a></li>
        <li><a  href="contact.php">Contact</a></li>
        
        <li><a  href="insertion.php">Data Insertion</a></li>
        <li><a  href="faculty_login.php">Faculty Login</a></li>
        <li class="active"><a href="logsin.php">Student Login</a></li>
          
        
        
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
    <h6 class="heading">Student Login</h6>
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="gallery.php">About us</a></li>
      <li><a href="contact.php">contact</a></li>
      <li><a href="logsin.php">Student Login</a></li>
    </ul>

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
    <style>
          input[type="button"] {
          width: 120px;
          height: 30px;
          display: inline;
          background: #fff;
          color: #41C379;
          border: none;
          cursor: pointer;
          padding: 1px;
          }
          input[type="button"]:hover{
            font-weight: 900;
            background: #17181A;
            color: #41C379;

          }
          input[type=email],input[type=password],input[type=text]{
            width: 30%;
            margin: 5px 0 10px 0;
            border-left: 1px solid #000; 
            border-radius: 7px; 
            outline: none;
            padding: 10px;
          }
          .login_btn{
              width: 8%;
              height: 35px;
              border: none;
              outline: none;
              cursor: pointer;
              color: #fff;     
              background: #41C379;         
              border-radius: 5px;
          }
          .reg_btn{
              width: 10%;
              height: 35px;
              border: none;
              outline: none;
              cursor: pointer;
              color: #fff;
              background: #41C379;              
              border-radius: 5px;
          }
          .reg_btn:hover,.login_btn:hover{
              color: #000;
            }

          </style>
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->

      <!-- ################################################################################################ -->
      <!-- Login content -------------------------------------------------->
      <div id="login"> 
      <form action="logindb.php" method="POST" class="login-email">
      <p class="login-text" style="font-size: 2rem; font-weight: 800;">Student Login</p>
      
      <input type="email" placeholder="Email" name="email" value="" required>
      <input type="password" placeholder="Password" name="password" value="" required>
      <button name="submit" class="login_btn">Login</button>
      </form>
      
      
      </div>
       <!-- ################################################################################################ -->
      <!-- Register content -------------------------------------------------->
      
      <!-- ################################################################################################ -->
      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
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
      <h6 class="heading">Feedback courses</h6>
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
      <p class="nospace btmspace-15">mail for contact us.....</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
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