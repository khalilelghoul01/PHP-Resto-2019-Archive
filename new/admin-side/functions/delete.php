<?php
include("../includes/DBconfig.php");
$id = $_GET['id'];
$delete_user = "DELETE FROM users WHERE user_id='$id' ";

$run_delete = mysqli_query($con, $delete_user);
if($run_delete){
	echo "<script>window.open('functions.php?token=1', '_self')</script>";
}
?>