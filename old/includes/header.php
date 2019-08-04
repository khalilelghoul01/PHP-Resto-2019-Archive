<?php session_start();
  ?>
<form method="POST" action="">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="bigger">
  <a class="navbar-brand" href=""><strong>LE ZOO</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php" name="home">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#menu">Menu</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Autre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="commande.php" name="commande">Commande</a>
          <a class="dropdown-item" href="calendar.php" name="calendar">Calendrier</a>
        </div>
      </li>
    </ul>
    </form>
    <form class="form-inline my-2 my-lg-0" method="POST" action="">
    <?php
    if(!isset($_SESSION['user_email'])){
      echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit' name='signin'>S&apos;identifier</button>"; 
      echo "<h4>&nbsp;</h4>
      <button class='btn btn-outline-success my-2 my-sm-0' type='submit' name='signup'>S&apos;inscrire</button>";
      if(isset($_POST['signup'])){
        echo "<script>window.open('../register.php','_self')</script>";}
      if(isset($_POST['signin'])){
        echo "<script>window.open('../login.php','_self')</script>";
      }
    }
    else{
      echo "<button class='btn btn-outline-warning my-2 my-sm-0' type='submit' name='logout'>Déconnexion</button>"; 
      if(isset($_POST['logout'])){
        echo "<script>window.open('../logout.php','_self')</script>";
      }
    }
    

    ?>
      
    </form>
  </div>
</nav>
