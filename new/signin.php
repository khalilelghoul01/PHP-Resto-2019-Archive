<?php
	session_start();
	if(isset($_SESSION['user_email'])){
		header("location: /main/home.php");
	}
	include("includes/DBconfig.php");

	if(isset($_POST['login'])){
		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['password']));

		$select_user = "SELECT * FROM users WHERE email='$email' AND user_pass='$pass' AND verification='verified'";

		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $email;

			echo "<script>window.open('main/home.php', '_self')</script>";
		}else{
			echo"<script>alert('Votre e-mail ou votre mot de passe est incorrect')</script>";
		}
	}
?>