<?php require_once("../includes/initialize.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Grading Information System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo WEB_ROOT; ?>/images/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo WEB_ROOT; ?>/images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo WEB_ROOT; ?>/images/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo WEB_ROOT; ?>/images/icons/site.webmanifest">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../plugins/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../plugins/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../plugins/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
 if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
<?php }  ?>

<?php
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['uname']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?>    <script type="text/javascript">
                alert("Invalid Username and Password!");
                </script>
            <?php
        
    } else {
		//it creates a new objects of member
        $user = new User();
		//make use of the static function, and we passed to parameters
		$res = $user::AuthenticateUser($uname, $h_upass);
		//then it check if the function return to true
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
<header>
<nav> 
<div class="site-navigation  ml-auto d-none d-lg-block " >
                    <a href="<?php echo WEB_ROOT; ?>./login.php" name="btnlogin" >Back</a>
                    </div>
</nav>
</header>
	<div class="limiter">
		
		<div class="container-login100" style="background-color: green;"><!--style="background-image: url('../plugins/login/images/bg-01.jpg');"-->
			
		<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Admin Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="login.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="uname" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<br>
					<center>
                    <div class="form-group">
                    <input type="submit" value="Login" style="background-color: green;" name="btnlogin" class="btn btn-primary px-5">
                   </div>
</center>
				<!--	<div class="container-login100-form-btn m-t-39" >
						<button class="login100-form-btn" name="btnlogin">
							Login
						</button>
					</div>-->

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../plugins/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../plugins/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../plugins/login/js/main.js"></script>

</body>
</html>