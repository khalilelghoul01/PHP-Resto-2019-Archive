<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Responsive vertical menu navigation</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>
	</head>
	<body>
		<?php include("includes/header.php") ?>
		<div class="main-content">
			<div class="title">
				Analytique
			</div>
			<div class="main">
				<div class="widget">
					<div class="title">Nombre de vues</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Nombre de réservation</div>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title">Nombre d'abonnés à Newsletter</div>
					<div class="chart"></div>
				</div>
			</div>
		</div>
	</body>
</html>