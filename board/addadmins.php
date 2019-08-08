<?php include("includes/header.php") ?>
<?php

echo "  <form method='post' action=''>
    <div style='width:50%;text-align: center;margin: 0 auto;'>
        <h1 class='h3 mb-3 font-weight-normal'>Ajouter un admin</h1>
        <label for='inputEmail' class='sr-only'>Email</label>
        <input type='email' id='inputEmail' name='email'class='form-control' placeholder='Email' ><br>
        <label for='inputEmail' class='sr-only'>Email</label>
        <input type='text' id='inputEmail' name='username'class='form-control' placeholder='username' ><br>
        <label for='inputPassword' class='sr-only'>Mot de passe</label>
        <input type='password' id='inputPassword' name='pass' class='form-control' placeholder='nouveau mot de passe' ><br>
        <label for='inputEmail' class='sr-only'>name</label>
        <input type='text' id='inputEmail' name='nom'class='form-control' placeholder='nom' ><br>
        <label for='inputPassword' class='sr-only'>Prenom</label>
        <input type='text' id='inputPassword' name='prenom' class='form-control' placeholder='prenom'  ><br>
        <label for='inputEmail' class='sr-only'>role</label>
        <input type='text' id='inputEmail' name='role'class='form-control' placeholder='role' ><br>
        <button class='btn btn-lg btn-primary btn-block' name='change' type='submit'>Enregistrer</button>
        <p class='mt-5 mb-3 text-muted'>© LE ZOO</p>
    </div>";
if (isset($_POST['change'])){
    $first_name = htmlentities(mysqli_real_escape_string($con,$_POST['nom']));
    $last_name = htmlentities(mysqli_real_escape_string($con,$_POST['prenom']));
    $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
    $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $role = htmlentities(mysqli_real_escape_string($con,$_POST['role']));
    $username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
    $check_email = "select * from admin where email='$email'";
	$run_email = mysqli_query($con, $check_email);

	$check = mysqli_num_rows($run_email);

	if($check == 1){
		echo "<script>alert('desole l'email existe déja)</script>";
        header("location: addadmins.php");
		exit();
	}
    $query="INSERT INTO admin(username, admin_pass, email, f_name, l_name, role_user) VALUES ('$username','$pass','$email','$first_name','$last_name','$role')";
    if(mysqli_query($con,$query)){
        header("location: Analytics.php");
    }else{echo "error";}


}
    echo"</form>";
    ?>