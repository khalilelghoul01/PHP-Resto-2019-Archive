<?php
include("includes/connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Emails</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <br>
    <br>
    <form method="post" action="">
    <center><div class="form-group"  style="width:30%;">
    <label for="exampleInputEmail1"></label>
    <input type="text" class="form-control" name="subject" placeholder="subject">
  </div></center><br><br>
    <center><div style="width:80%;"><textarea name="editor1"></textarea></div><br><br>
    <button style="width:60%;" name="send" class="btn btn-outline-success btn-lg btn-block">Envoyer</button></center>
    <?php 
if(isset($_POST['send'])){
    $data = $_POST['editor1'];
    $sub=  mysqli_real_escape_string($con,$_POST['subject']);
    $query = "INSERT INTO email(body, subject, date) VALUES ('$data','$sub',NOW())";
    if(mysqli_query($con,$query)){
        echo "<div class='alert alert-primary' role='alert'>
        email enregistré
      </div>";
    }
    $data = "<!DOCTYPE html><html><head></head><body>".$data." </body></html>";
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
    $mail->Subject = $sub;
    $mail->Body =$data;
    $i=0;
    $get_email ="SELECT email FROM reservation";
    $run_email = mysqli_query($con, $get_email);
    $emailer=array();
    while($row = mysqli_fetch_array($run_email)){
        $emailer[$i]=$row['email'];
        $i=$i+1;
        $emailer = array_unique($emailer);
    }
    for ($counter=0; $counter < count($emailer) ; $counter++) { 
        $mail->AddAddress($emailer[$counter]);
        $mail->Send();
    }
    $i = count($emailer);
    echo "<div class='alert alert-primary' role='alert'>
        $i emails envoyées
      </div>";



    










}


    ?>
    </form>















    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
</body>
</html>