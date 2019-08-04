<?php
	session_start();
	if(isset($_SESSION['user_email'])){
		header("location: dashboard.php");
	}
	include("includes/DBconfig.php");

	if(isset($_POST['login'])){
		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

		$select_user = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";

		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('dashboard.php', '_self')</script>";
		}else{
			echo"<script>alert('Votre e-mail ou votre mot de passe est incorrect')</script>";
		}
	}
?>