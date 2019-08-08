<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>le zoo</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="main.css">
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>
	</head>
	<body>
		<?php include("includes/header.php") ?>
		<br><br>
		<div class="container">
   <div class="row">
      <div class="col-sm">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://png.pngtree.com/svg/20160707/3a68e50b8b.svg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Detail de visite du site</h5>
			   <p class="card-text"><?php include("view.php");?></p>
			   <form method="post" action="">
			   <a href="viewdetail.php" class="btn btn-primary" name="detail">voir les details</a>
			   </form>
            </div>
         </div>
      </div>
      <div class="col-sm">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/9/9463.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Nombre d'admins</h5>
			   <p class="card-text"><?php include("adminNum.php");?></p>
			   <?php
			   	$session = $_SESSION['user_email'];
			 	$get_id ="SELECT * FROM admin WHERE email='$session' ORDER BY 1";
				$run_id = mysqli_query($con, $get_id);
				$id = 0;
				while($row = mysqli_fetch_array($run_id)){
					$id = $row['id'];  
				}
			    echo "<a href='admins.php?id=$id' class='btn btn-primary'>voir les comptes admins</a><br><br>";
			   ?>
			   <a href='addadmins.php' class='btn btn-success'>ajouter un admin</a>
            </div>
         </div>
      </div>
      <div class="col-sm">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/45/45533.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Nombre de résevation</h5>
               <p class="card-text"><?php
				$get_res ="SELECT * FROM reservation ORDER BY 1";
				$run_res = mysqli_query($con, $get_res);
				$num = 0;
				while($row = mysqli_fetch_array($run_res)){
					$num = $num + 1;  
				}
				echo "<p>Reservations</p>";
				echo "<center><p><b>$num</b></p></center>";
				?></p>
               <a href="viewreservation.php" class="btn btn-primary">voir les reservations</a>
            </div>
         </div>
      </div>
   </div>
</div>
	</body>
</html>