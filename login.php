<?php require_once("includes/initialize.php");
 if (studlogged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
 
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
     $h_upass = $upass;
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new Student();
		//make use of the static function, and we passed to parameters
		 $res = $user::Authenticatestudent($uname);
		//then it check if the function return to true
    	//$stud = new Student();
		//$res= $stud::Authenticatestudent($uname);
		if($res == true){
			?>   <script type="text/javascript">
					//then it will be redirected to home.php
					window.location = "index.php";
				</script>
			<?php
		
		
		} else {
?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = "";
    
}

?>
 
<!doctype html>
<html lang="en">

  <head>
    <title>Student Grading Information System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/icomoon/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo WEB_ROOT; ?>images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo WEB_ROOT; ?>images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo WEB_ROOT; ?>images/icons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo WEB_ROOT; ?>images/icons/site.webmanifest">

    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>plugins/homepage/css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner" >
      <nav  style="background-color:#00ff00; ">
 


            <h1 style="background-color:#00ff00; font-weight: bold; text-align: center; height: 50px;  color: black;" >STUDENT GRADING INFORMATION SYSTEM</h1>
    
</nav>
        

      </header> 
<div class="ftco-blocks-cover-1" >
      <div class="ftco-cover-1 overlay" style="background-color: green; "> <!--style="background-image: url('images/school.jpeg')"-->
       
      <div class="container">
          <div class="row align-items-center">
          
          <!--  <div class="col-lg-5" style="margin-top: -200px;">
              <h1>Student Grading Information System</h1>
            </div>
            -->
            <div class="col-lg-5 ml-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="site-section" style="margin-top: -450px; " >
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <p style=" color: white;">This area, you have to login using your id number in school in order access your account and view your profile and subject with grades</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white">
            
                <h2>Sign In</h2>
                <form action="login.php"  method="POST">
                  <div class="form-group">
                    <input type="number" class="form-control" name="uname" placeholder="Student ID no.">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                  </div> 
                  <div class="form-group">
                    <input type="submit" value="Login" style="background-color: green;" name="btnlogin" class="btn btn-primary px-5" >
                    <a href="<?php echo WEB_ROOT; ?>admin/index.php" name="btnlogin" class="btn btn-primary px-5 " style="background-color: green;   "  >Admin </a>
                  </div>
                
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
   
    </footer>

    </div>

    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/popper.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/owl.carousel.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.sticky.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/aos.js"></script>

    <script src="<?php echo WEB_ROOT; ?>plugins/homepage/js/main.js"></script>

  </body>

</html>

