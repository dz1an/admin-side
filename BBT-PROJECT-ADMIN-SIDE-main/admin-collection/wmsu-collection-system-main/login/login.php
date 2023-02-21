<?php
	require_once '../classes/database.class.php';
	require_once '../classes/users.class.php';

	session_start();
	
		$users_obj = new Users();
		if(isset($_POST['username']) && isset($_POST['password'])){
		  //Sanitizing the inputs of the users. Mandatory to prevent injections!
		  $users_obj->username = htmlentities($_POST['username']);
		  $users_obj->password = htmlentities($_POST['password']);
		  if($users_obj->log_in()){
			  $users = $users_obj->get_users_info();
			  foreach($users as $row){
				  $_SESSION['logged_id'] = $row['user_id'];
				  $_SESSION['fullname'] = 'Pogi';
				  $_SESSION['user_type'] = $row['user_type'];
				  //display the appropriate dashboard page for user
				  if($row['type'] == 'admin'){
					  header('location: ../admin/dashboard.php'); // Change path if want to test a specific file
				  }else if($row['type'] == 'officer'){
					  header('location: ../public/logout.php');
				  }else if($row['type'] == 'collector'){
					  header('location: ../collector/collector.php');
				  }
			  }
		  }else{
			  //set the error message if account is invalid
			  $error = 'Invalid username/password. Try again.';
		  }
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="login.php" method="post">
					<span class="login100-form-title p-b-70">
					</span>
					<span class="login100-form-avatar">
						<img src="../images/logo.jpg" alt="logo">
					</span>
					<?php
                    if(isset($error)){
                         echo '<div id="error-message">'.$error.'</div>';
                    	}
                    ?>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
						<input style="color:white" class="button" type="submit" value="Login" name="login" tabindex="3">
						</button>
					</div>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

	<!--Backend for error time-->
	<script>
  setTimeout(function() {
    $("#error-message").hide();
 	 }, 3000); // 3 seconds
	</script>

	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../vendor/animsition/js/animsition.min.js"></script>
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../vendor/select2/select2.min.js"></script>
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
	<script src="../vendor/countdowntime/countdowntime.js"></script>
	<script src="../js/main.js"></script>

</body>
</html>
