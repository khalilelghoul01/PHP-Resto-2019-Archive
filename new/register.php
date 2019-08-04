<?php
$page_name = "S'inscrire";
?>
<!DOCTYPE html>
<html>
<?php include("includes/head.php");?>
<style>
	#selection{
		height: 45px;
	}
</style>
<body>



<form class="form-signin" method="post" action="">
	<center>
            <br>

      <h1 class="h3 mb-3 font-weight-normal">S'inscrire</h1></center>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password" 
      required>
      <label for="inputPassword" class="sr-only">confirmer le mot de passe</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="confirmer le mot de passe" name="password2">
      <label for="inputPassword" class="sr-only">Nom</label>
      <input type="text" id="inputPassword" class="form-control" placeholder="Nom" name="first_name">
      <label for="inputPassword" class="sr-only">Prénom</label>
      <input type="text" id="inputPassword" class="form-control" placeholder="Prénom" name="Last_name">
      <select class="form-control" id="selection" name="gender" required="required">
								<option disabled>Sexe</option>
								<option value="hm">Homme</option>
								<option value="fm">Femme</option>
								<option value="au">Autre</option>
							</select>
	   <input type="text" class="form-control" name="phone" placeholder="   Ex: 06-01-00-33-10" required="required">
      <input type="date" class="form-control" placeholder="Email" name="u_birthday" required="required">
      <div class="checkbox mb-3">
            <a class="underlineHover" href="login.php" style="text-decoration: none;color: #187FAB;">Vous avez un compte?</a>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="sign_up">Enregistrer</button>
      <?php include("insert_user.php");?>
    </form>


</body>
</html>