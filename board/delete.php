<?php
include("includes/connection.php");
$id=$_GET['id'];
$noid=$_GET['no-id'];
if(!isset($_GET['id'])){
    header("location: admins.php");
}

if($_GET['id'] == $_GET['no-id']){
    header("location: admins.php");
}

$query="DELETE FROM admin WHERE id = '$id' ";
$execute=mysqli_query($con, $query);
if ($execute) {
    header("location: admins.php?id=$noid");    
}
else{
    echo"il y'a un probleme";
}
































?>