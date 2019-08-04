<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<title><?php echo "$page_name";echo " | Le Zoo"; ?></title>
	<?php if($page_name == "S'identifier"){
		echo "<link rel='stylesheet' type='text/css' href='style/style.css'>";
	}
	if ($page_name == "S'inscrire") {
		echo "<link rel='stylesheet' type='text/css' href='style/style2.css'>";
			}
	if ($page_name == "Accueil") {
		echo "<link rel='stylesheet' type='text/css' href='../style/home.css'>";
	}
	?>
</head>