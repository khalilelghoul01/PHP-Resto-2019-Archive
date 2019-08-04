<?php
$page_name = "S'identifier";
?>
<!DOCTYPE html>
<html>
<?php include("includes/head.php");?>
<body>


<form class="form-signin" method="post" action="">
	<center>
      <img class="mb-4" src="http://pizzasalvatore.com/images/pizzasalvatore.com/SALAV-Pizza-3D.png" alt="pizza" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">S'identifier</h1></center>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password" required>
      <div class="checkbox mb-3">
            <a class="underlineHover" href="register.php" style="text-decoration: none;color: #187FAB;">S'inscrire?</a>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Enregistrer</button>
      <center><p class="mt-5 mb-3 text-muted">© 2019-2020 Le Zoo</p></center>
      <?php include("signin.php");?>
    </form>
</body>
</html>