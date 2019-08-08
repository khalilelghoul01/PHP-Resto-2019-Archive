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
	<body><center>
		<?php include("includes/header.php") ?>
		<br><br>
		<div class="container">
   <div class="row">
      <div class="col-sm">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://s3-eu-west-1.amazonaws.com/sc-files.pjms.fr/p/pjms/432/000/393/251/11560b4ada0d41048ec3a64294556b90.jpg" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Detail du menu</h5>
			   <br>
			   <form method="post" action="">
			   <a href="viewdetailmenu.php" class="btn btn-primary" name="detail">voir les details</a>
			   </form>
            </div>
         </div>
      </div>
      <div class="col-sm">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="http://mainstreetrestaurantventura.com/wp-content/uploads/2016/06/Menu-1.png" alt="Card image cap">
            <div class="card-body">
               <h5 class="card-title">Nouveau elements dans le menu</h5>
			   <a href='addmenu.php' class='btn btn-success'>ajouter un element</a>
            </div>
         </div>
      </div>
            </div>
         </div>
      </div>
   </div>
</div></center>
	</body>
</html>