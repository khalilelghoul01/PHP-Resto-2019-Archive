<?php
include("includes/connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header("location: viewreservation.php");
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
//include("includes/connection.php");
$get_email ="SELECT email FROM reservation WHERE id='$id'";
$run_email = mysqli_query($con, $get_email);
while($row = mysqli_fetch_array($run_email)){
    $email=$row['email'];
}




$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'lezoomail@gmail.com';
$mail->Password = 'ht1234567890';
$mail->setFrom('lezoomail@gmail.com', 'Le Zoo');
$mail->Subject = 'Reservation Acceptee';
$mail->Body ="votre reservation est Acceptée";
$mail->AddAddress($email);








$query= "UPDATE reservation SET approved='yes' WHERE id='$id'";

if(mysqli_query($con,$query)){
    $mail->Send();
    header("location: viewreservation.php");
}
else{header("location: viewreservation.php");}



















?>