<!DOCTYPE html>
<?php
include("includes/connection.php");
include("includes/header.php");

if(!isset($_GET['type'])){
  echo "<form method='' action=''><br><br><center><div class='btn-group'>
  <button style='background-color:#4D9AD4;border-color:#4D9AD4;' class='btn btn-secondary btn-lg dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    Il faut choisir le type d'email
  </button>
  <div class='dropdown-menu'>
    <a style='width:80%;' href='email.php?type=reserv'>email de reservation</a>
  </div>
  </div></center></form>";
}else{





if($_GET['type']=="reserv"){
  $get_email ="SELECT email FROM reservation";
  $run_email = mysqli_query($con, $get_email);
  echo "<center><table class='table table-dark' style='width:40%;'>
      <thead>
        <tr>
          <th scope='col'>#</th>
          <th scope='col'>Email</th>
        </tr>
        </thead>
        <tbody>";
  $email=array();    
  $counter =0;
  while($row = mysqli_fetch_array($run_email)){
      $email[$counter]=$row['email'];
      $counter =$counter+1;
      $email=array_unique($email);
  }
  $counter =0;
  for ($i=0; $i < count($email); $i++) { 
    $counter =$counter+1;
    echo "<tr>
    <th scope='row'>$counter</th>
    <td>$email[$i]</td>
  </tr>";
  }
  echo "</tbody>
  </table></center>
  <br><br><br>
  <center><div class='embed-responsive embed-responsive-21by9'>
  <iframe class='embed-responsive-item ' src='ckeditor.php'></iframe>
</div></center>
";
}

}

















?>