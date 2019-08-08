<?php
include("includes/connection.php");
$get_admin ="SELECT * FROM admin ORDER BY 1";
$run_admin = mysqli_query($con, $get_admin);
$admin=0;
while($row = mysqli_fetch_array($run_admin)){
    $admin = $admin+1;}
echo "<p >Admins:</p>";
echo "<center><b><p >$admin</p></b></center>";


?>