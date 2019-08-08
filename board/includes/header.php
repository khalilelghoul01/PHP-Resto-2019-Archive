<?php 
include("includes/connection.php");
session_start();
if(!isset($_SESSION['user_email'])){
	header("location: login.php");
}
$email=$_SESSION['user_email'];
$get_admin ="SELECT * FROM admin WHERE email='$email' ORDER BY 1";
$run_admin = mysqli_query($con, $get_admin);
while($row = mysqli_fetch_array($run_admin)){
	$username = $row['username'];
}

?>
<!DOCTYPE html>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LE ZOO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="menu.php">Menu</a>
	  </li>
	  <li class="nav-item">
        <a class="nav-link" href="Analytics.php">Rapports</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $username ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">voir le site</a>
          <a class="dropdown-item" href="email.php">voir les emails des utilisateurs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Deconnection</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
