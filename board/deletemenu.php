<?php
include("includes/connection.php");
$id=$_GET['id'];
//$noid=$_GET['no-id'];
if(!isset($_GET['id'])){
    header("location: menu.php");
}


$query="DELETE FROM menu WHERE food_id = '$id' ";
$execute=mysqli_query($con, $query);
if ($execute) {
    echo "<script>window.open('viewdetailmenu.php', '_self')</script>";
}
else{
    echo"il y'a un probleme";
}
































?>