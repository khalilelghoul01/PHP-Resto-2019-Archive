<?php
session_start();
if(isset($_SESSION['user_email'])){
		header("location: main/home.php");
	}
include("includes/DBconfig.php");

	if(isset($_POST['sign_up'])){
		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['Last_name']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['password']));
		$pass1 = htmlentities(mysqli_real_escape_string($con,$_POST['password2']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
		$country = "france";
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
		//$status = "verified";
		$phone = htmlentities(mysqli_real_escape_string($con,$_POST['phone']));
		$newgid = sprintf('%05d', rand(0, 999999));
		$user_token = md5(md5($first_name));
		$username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
		$check_username_query = "select user_name from users where email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <9 ){
			echo"<script>alert('Le mot de passe doit comporter au moins 9 caractères!')</script>";
			exit();
		}

		$check_email = "select * from users where email='$email'";
		$run_email = mysqli_query($con, $check_email);

		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email existe déjà, S'il vous plaît essayez d'utiliser un autre email')</script>";
			echo "<script>window.open('login.php', '_self')</script>";
			exit();
		}
		if($pass == $pass1){
			$insert = "INSERT INTO users (f_name,l_name,username,user_pass,email,user_country,user_gender,birthdate,reg_date,user_token,phone,verification,user_status,user_image,password_reset) VALUES('$first_name','$last_name','$username','$pass','$email','$country','$gender','$birthday',NOW(),'$user_token','$phone','verified','default','../images/user.jpg','Iwanttoputading intheuniverse.')";
		}else{
			echo "<script>alert('les mots de passe ne sont pas egaux')</script>";
			echo "<script>window.open('register.php', '_self')</script>";
			exit();
		}
		$query = mysqli_query($con, $insert);

		if($query){
			echo "<script>alert('Bien fait $first_name, vous êtes prêt à partir.')</script>";
			echo "<script>window.open('login.php', '_self')</script>";
		}
		else{
			echo "<script>alert('L'enregistrement a échoué, veuillez réessayer!')</script>";
			echo "<script>window.open('register.php', '_self')</script>";
		}
	}
?>