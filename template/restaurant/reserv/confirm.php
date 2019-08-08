<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php
include("../includes/connection.php");
if(isset($_GET['link'])){
    $url=$_GET['link'];
    $get_confirm ="SELECT * FROM reservation WHERE auth_link='$url' ORDER BY 1";
    $run_confirm = mysqli_query($con, $get_confirm);
    $i=0;
	while($row = mysqli_fetch_array($run_confirm)){
        $i=$i+1;
        $link=$row['auth_link'];
        $reg=$row['save_date'];
    }
    if($i==0){
        $link="";
    }
    if($_GET['link']==$link){
        $code = str_repeat(md5(md5(md5('validated'))),3);
        $query="UPDATE reservation SET status='yes',auth_link='$code' Where auth_link='$link' AND save_date='$reg'";
        mysqli_query($con, $query);
        echo"<div class='alert alert-success' style='height:100vh;' role='alert'>
        <center>Email verifieé</center>
      </div>";
    }else{
        echo"<div class='alert alert-danger' style='height:100vh;' role='alert'>
        <center>Lien non valable</center>
      </div>";
    }
}else{
    header("location: reservation.php");
}
?>