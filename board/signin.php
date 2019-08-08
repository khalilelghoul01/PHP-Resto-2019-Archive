<?php

    
    session_start();
    if(isset($_SESSION['user_email'])){
        header("location: Users.php");
    }
	include("includes/connection.php");

	if(isset($_POST['login'])){
		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

		$select_user = "SELECT * FROM admin WHERE email='$email' AND admin_pass='$pass'";

		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('Analytics.php', '_self')</script>";
		}else{
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		}
	}
?>