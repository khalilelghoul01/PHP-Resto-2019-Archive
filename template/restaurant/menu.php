<style>
	#text-col{
		color: #e75b1e;
		border-bottom: 2px solid #e75b1e;
	}
	.header h1 {
	background: #ce2c38;
	border-radius: 100%;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
	height: 140px;
	margin: 60px auto 0;
	position: relative;
	text-align: center;
	width: 140px;
	z-index: 10;
	}

	.header h1 span {
	color: #fff;
	display: block;
	font-size: 40px;
	padding: 34px 0 0 0;
	}

	.header h1 span+span {
	color: #000;
	display: block;
	font-size: 28px;
	padding: 0;
	}

	.main .container {
	background: #fff;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
	margin: -70px auto 80px;
	padding: 80px;
	z-index: 0;
	}

	h1 {
	color: #444;
	font-family: 'Oswald', sans-serif;
	font-size: 40px;
	margin: 20px 0 0 0;
	text-align: center;
	text-transform: uppercase;
	}

	#text{
	border-bottom: 1px solid #444;
	color: #000;
	font-family: 'Oswald', sans-serif;
	margin: 20px 0 10px;
	padding: 0 0 10px 0;
	text-transform: uppercase;
	}

	h3 {
	color: #ce2c38;
	font-family: 'Oswald', sans-serif;
	margin: 10px 0 5px;
	text-transform: uppercase;
	}

	.price p {
	font-family: 'Oswald', sans-serif;
	font-size: 20px;
	font-style: normal;
	margin: 26px 0 5px;
	text-align: right;
	}
</style>

  
  



<br><br><br><br>
<?php
include("includes/connection.php");
echo"<div class='main' ng-controller='MainController'>
<div class='container'>
  <h1>MENU</h1>
  <h2 id='text'>ENTREEs</h2>
	  ";
$get_menu ="SELECT * FROM menu WHERE cat='1' ORDER BY 1";
$run_menu = mysqli_query($con, $get_menu);
$menu=0;
while($row = mysqli_fetch_array($run_menu)){
	$menu++;
	$title = $row['food_title'];
	$discription = $row['food_description'];
	$cat = $row['cat'];
	$img = $row['food_img'];
	$prix = $row['food_price'];
	echo" <div class='appetizers row' ng-repeat='appetizer in appetizers'>
	<div class='item col-md-9'>
	  <h3 class='name'>$title</h3>
	  <p class='description'>$discription</p>
	</div>
	<div class='price col-md-3'>
	  <p class='price'>$prix</p>
	</div>
  </div>";}






















echo"<h2 id='text'>PLATS PRINCIPAUX</h2>";

$get_menu ="SELECT * FROM menu WHERE cat='Plats' ORDER BY 1";
$run_menu = mysqli_query($con, $get_menu);
//$menu=0;
while($row = mysqli_fetch_array($run_menu)){
	//$menu++;
	$title = $row['food_title'];
	$discription = $row['food_description'];
	$cat = $row['cat'];
	$img = $row['food_img'];
	$prix = $row['food_price'];
	echo" <div class='appetizers row' ng-repeat='appetizer in appetizers'>
	<div class='item col-md-9'>
	  <h3 class='name'>$title</h3>
	  <p class='description'>$discription</p>
	</div>
	<div class='price col-md-3'>
	  <p class='price'>$prix</p>
	</div>
  </div>";}	  

		 



















echo"<h2 id='text'>DESERTS</h2>";

$get_menu ="SELECT * FROM menu WHERE cat='Deserts' ORDER BY 1";
$run_menu = mysqli_query($con, $get_menu);
//$menu=0;
while($row = mysqli_fetch_array($run_menu)){
	//$menu++;
	$title = $row['food_title'];
	$discription = $row['food_description'];
	$cat = $row['cat'];
	$img = $row['food_img'];
	$prix = $row['food_price'];
	echo" <div class='appetizers row' ng-repeat='appetizer in appetizers'>
	<div class='item col-md-9'>
	  <h3 class='name'>$title</h3>
	  <p class='description'>$discription</p>
	</div>
	<div class='price col-md-3'>
	  <p class='price'>$prix</p>
	</div>
  </div>";}	  


















  echo"<h2 id='text'>BOISSON</h2>";

$get_menu ="SELECT * FROM menu WHERE cat='Boissons' ORDER BY 1";
$run_menu = mysqli_query($con, $get_menu);
//$menu=0;
while($row = mysqli_fetch_array($run_menu)){
	//$menu++;
	$title = $row['food_title'];
	$discription = $row['food_description'];
	$cat = $row['cat'];
	$img = $row['food_img'];
	$prix = $row['food_price'];
	echo" <div class='appetizers row' ng-repeat='appetizer in appetizers'>
	<div class='item col-md-9'>
	  <h3 class='name'>$title</h3>
	  <p class='description'>$discription</p>
	</div>
	<div class='price col-md-3'>
	  <p class='price'>$prix</p>
	</div>
  </div>";}	  








echo"</div>";
echo"</div>";
echo"</div>";
?>



