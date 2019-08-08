<?php
    include("includes/connection.php");
    include("includes/header.php");
    $id=$_GET['id'];
    $noid=$_GET['no-id'];
    if(!isset($_GET['id'])){
        header("location: admins.php");
    }

    if($_GET['id'] == $_GET['no-id']){
        header("location: admins.php");
    }
    $get_admin ="SELECT * FROM admin WHERE id='$id' ORDER BY 1";
    $run_admin = mysqli_query($con, $get_admin);
    $admin=0;
    while($row = mysqli_fetch_array($run_admin)){
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['admin_pass'];
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $role = $row['role_user'];
        echo "  <form method='post' action=''>
    <div style='width:50%;text-align: center;margin: 0 auto;'>
        <h1 class='h3 mb-3 font-weight-normal'>Changer le données</h1>
        <label for='inputEmail' class='sr-only'>Email</label>
        <input type='email' id='inputEmail' name='email'class='form-control' placeholder='Email' value='$email'><br>
        <label for='inputEmail' class='sr-only'>Email</label>
        <input type='text' id='inputEmail' name='username'class='form-control' placeholder='username' value='$username'><br>
        <label for='inputPassword' class='sr-only'>Mot de passe</label>
        <input type='password' id='inputPassword' name='pass' class='form-control' placeholder='nouveau mot de passe' ><br>
        <label for='inputEmail' class='sr-only'>name</label>
        <input type='text' id='inputEmail' name='nom'class='form-control' placeholder='nom' value='$l_name'><br>
        <label for='inputPassword' class='sr-only'>Prenom</label>
        <input type='text' id='inputPassword' name='prenom' class='form-control' placeholder='prenom' value='$f_name' ><br>
        <label for='inputEmail' class='sr-only'>role</label>
        <input type='text' id='inputEmail' name='role'class='form-control' placeholder='role' value='$role'><br>
        <button class='btn btn-lg btn-primary btn-block' name='change' type='submit'>Enregistrer</button>
        <p class='mt-5 mb-3 text-muted'>© LE ZOO</p>
    </div>
    ";
    }
    if(isset($_POST['change'])){
        //echo "debug";
        $first_name = htmlentities(mysqli_real_escape_string($con,$_POST['nom']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['prenom']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
        $role = htmlentities(mysqli_real_escape_string($con,$_POST['role']));
        $username = htmlentities(mysqli_real_escape_string($con,$_POST['username']));
        if(strlen($pass) <9 ){
			echo"<script>alert('il faut un mot de passe > 9 carectere!')</script>";
			exit();
        }
        $query = "UPDATE admin SET username='$username', admin_pass='$pass', email='$email', f_name='$first_name', l_name='$last_name', role_user='$role' WHERE id = '$id'";
        $execute = mysqli_query($con,$query);
        if ($execute) {
            header("location: admins.php?id=$noid");    
        }
        else{
            echo"il y'a un probleme";
        }

    }
    echo "</form>";

?>