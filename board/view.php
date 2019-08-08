<?php
$get_ip = "select * from ip ORDER by 1 ";
$run_ip = mysqli_query($con, $get_ip);
$visitor=0;
while($row = mysqli_fetch_array($run_ip)){
	$visitor=$visitor+1;
}
echo "<p >nombre visiteur total:</p>";
echo "<center><b><p >$visitor</p></b></center>";

$get_ip = "select * from ip where IP != 'localhost' ORDER by 1";
$run_ip = mysqli_query($con, $get_ip);
$visitor=0;
while($row = mysqli_fetch_array($run_ip)){
	$visitor=$visitor+1;
}
echo "<p >visiteur:</p>";
echo "<center><b><p >$visitor</p></b></center>";

$get_ip ="SELECT IP FROM ip WHERE cur='yes'";
$run_ip = mysqli_query($con, $get_ip);
$visitor=0;
while($row = mysqli_fetch_array($run_ip)){
	$visitor=1;
	$all_ip = $row['IP'];
	mysqli_query($con,"UPDATE ip SET cur='stored'");
	$insert = "INSERT INTO unique_ip (code) value('$all_ip')";
	mysqli_query($con, $insert);
}

//clear ip
$clear="DELETE t1 FROM unique_ip t1
INNER JOIN
unique_ip t2 
WHERE
t1.unique_ip < t2.unique_ip AND t1.code = t2.code;";
mysqli_query($con, $clear);

$get_unique = "select * from unique_ip ORDER by 1";
$run_unique = mysqli_query($con, $get_unique);
$unique = 0;
while($row_unique = mysqli_fetch_array($run_unique)){
	$unique = $unique + 1;
}
echo "<p >visiteur unique:</p>";
echo "<center><b><p >$unique</p></b></center>";


?>