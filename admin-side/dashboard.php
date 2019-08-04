
<?php session_start();
if(!isset($_SESSION['user_email'])){
    header("location: login.php");
  }?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/style3.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
<section>
  <form method="post" action="">
  <?php if(isset($_SESSION['user_email'])){
          echo "<button class='btn btn-outline-warning my-2 my-sm-0' type='submit' name='logout'>Déconnexion</button>";
            if(isset($_POST['logout'])){
              echo "<script>window.open('logout.php','_self')</script>";
        }}
    ?></form>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-thumbs-up"></span> 
Tableau de bord administrateur</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                          <!-- grey -->
                          <a href="functions/functions.php?token=0" class="btn btn-grey btn-lg" role="button"><span class="glyphicon glyphicon-cog glyphsize red"></span> <br />PARAMETRE<br /> <span class="glyphicon glyphicon-cog black"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dblue -->
                          <a href="functions/functions.php?token=2" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />Ajouter <span class="glyphicon glyphicon-plus green"></span><br />un client</a>
                          <a href="functions/functions.php?token=3" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />gérer <span class="glyphicon glyphicon-edit yellow"></span><br />un client</a>
                          <a href="functions/functions.php?token=4" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />client<br />faire pub <span class="glyphicon glyphicon-envelope"></span></a>
                          <a href="functions/functions.php?token=5" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />clients<br />  rapports <span class="glyphicon glyphicon-signal"></span></a>
                          <a href="functions/functions.php?token=6" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />client <br />DB <span class="glyphicon glyphicon-book"></span></a>
                          <a href="functions/functions.php?token=7" class="btn btn-dblue btn-lg" role="button"><span class="glyphicon glyphicon-user glyphsize"></span> <br />cilent<br />Exporter CSV <span class="glyphicon glyphicon-export"></span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dred -->
                          <a href="functions/functions.php?token=8" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>Ajouter <span class="glyphicon glyphicon-plus green"></span><br /> un evennement</a>
                          <a href="functions/functions.php?token=9" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br />Gérer <span class="glyphicon glyphicon-edit yellow"></span><br />un evennement</a>
                          <a href="functions/functions.php?token=10" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>supprimer <span class="glyphicon glyphicon-minus red"></span><br /> un evennement</a>
                          <a href="functions/functions.php?token=11" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>montrer<span class="glyphicon glyphicon-eye-open"></span><br />calandrier</a>
                          <a href="functions/functions.php?token=12" class="btn btn-dred btn-lg" role="button"><span class="glyphicon glyphicon-calendar glyphsize"></span> <br/>Gérer <br /> calandrier</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dgreen -->
                          <a href="functions/functions.php?token=13" class="btn btn-dgreen btn-lg" role="button"><span class="glyphicon glyphicon-signal glyphsize green"></span> <br/>Chiffres<br />d'affaire </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- mred -->
                          <a href="functions/functions.php?token=14" class="btn btn-mred btn-lg" role="button"><span class="glyphicon glyphicon-envelope glyphsize"></span> <br/>Gestionnaire <br /> d'affranchissement</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- dpurple -->
                          <a href="functions/functions.php?token=15" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-gbp glyphsize lilac"></span> <br/>Payments<br />Manager</a>
                          <a href="functions/functions.php?token=16" class="btn btn-dpurple btn-lg" role="button"><span class="glyphicon glyphicon-piggy-bank glyphsize mblue"></span> <br/>Paypal<br />System</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <!-- lilac -->
                          <a href="functions/functions.php?token=17" class="btn btn-lilac btn-lg" role="button"><span class="glyphicon glyphicon-file glyphsize purple"></span> <br/>Product<br />Manager</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>