<?php include("includes/header.php");

?>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    // Load Composer's autoloader
    require '../vendor/autoload.php';
    $per_max=22;
    echo"<table class='table table-bordered table-dark'>
    <thead>
    <tr>
        <th scope='col'>#</th>
        <th scope='col'>Nom:</th>
        <th scope='col'>Email:</th>
        <th scope='col'>Télephone:</th>
        <th scope='col'>numero de personne:</th>
        <th scope='col'>Date:</th>
        <th scope='col'>Temp:</th>
        <th scope='col'>Plat:</th>
        <th scope='col'>occation POSTALE:</th>
        <th scope='col'>Status:</th>
        <th scope='col'>Date de registration:</th>
        <th scope='col'></th>
        <th scope='col'></th>
    </tr>
    </thead>
    <tbody>";
    $get_ip ="SELECT * FROM reservation ORDER BY 1";
    $run_ip = mysqli_query($con, $get_ip);
    $reserv=0;
    $num_person_total=0;
    $last_one=array();
    $last_stat=array();
    $index= 0;
    while($row = mysqli_fetch_array($run_ip)){
        $reserv = $reserv +1;
        $id = $row['id'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $num_person = $row['num_person'];
        $date = $row['date'];
        $time = $row['time'];
        $food = $row['pref_food'];
        $occasion = $row['occasion'];
        $status = $row['status'];
        $save_date = $row['save_date'];
        $approv = $row['approved'];
        $num_person_total=$num_person_total+(int)$num_person;
        if($num_person_total>$per_max){
            $last_one[$index]=$id;
            $last_stat[$index]=$status;
            $index = $index+1;
        }else{
            $last_one[0]=0;
            $last_stat[0]=0;
        }
        if($status=="yes"){
            if($approv=="yes"){
                echo "
                <tr>
                <th scope='row' style='background-color: #32CD32;'>$reserv</th>
                <td style='background-color: #32CD32;'>$full_name</td>
                <td style='background-color: #32CD32;'>$email</td>
                <td style='background-color: #32CD32;'>$phone</td>
                <th style='background-color: #32CD32;'>$num_person</th>
                <td style='background-color: #32CD32;'>$date</td>
                <td style='background-color: #32CD32;'>$time</td>
                <td style='background-color: #32CD32;'>$food</td>
                <th style='background-color: #32CD32;'>$occasion</th>
                <td style='background-color: #32CD32;'>$status</td>
                <td style='background-color: #32CD32;'>$save_date</td>
                <td>Confirmé</td>
                <td><a type='button' href='annule.php?id=$id' class='btn btn-info'>Annuler</a></td>
                </tr>
        ";}else{
            echo "
                <tr>
                <th scope='row'>$reserv</th>
                <td>$full_name</td>
                <td>$email</td>
                <td>$phone</td>
                <th>$num_person</th>
                <td>$date</td>
                <td>$time</td>
                <td>$food</td>
                <th>$occasion</th>
                <td style='background-color: #32CD32;'>$status</td>
                <td>$save_date</td>
                <td><a type='button' href='accept.php?id=$id' class='btn btn-primary'>Accepter</a></td>
                <td><a type='button' href='refuse.php?id=$id' class='btn btn-danger'>refuser</a></td>
                </tr>
        ";
        }}else{
            echo "
            <tr>
            <th scope='row'>$reserv</th>
            <td>$full_name</td>
            <td>$email</td>
            <td>$phone</td>
            <th>$num_person</th>
            <td>$date</td>
            <td>$time</td>
            <td>$food</td>
            <th>$occasion</th>
            <td style='background-color: #B22222;'>$status</td>
            <td>$save_date</td>
            <td><a type='button' href='accept.php?id=$id' class='btn btn-primary'>Accepter</a></td>
            <td><a type='button' href='refuse.php?id=$id' class='btn btn-danger'>refuser</a></td>
            </tr>
        ";
        }
    }




    



    echo "
    </tbody>
    </table>";
    if($num_person_total>22){
        echo "
        <form method='post' action=''>
        <button name='VERF' class='btn btn-primary btn-lg btn-block'>Verifier les place</button><br><br>
        ";}
    if(isset($_POST['VERF'])){
        $cont = 0;
        if($last_one[0]>=1){
            $nom_person_annule=array();
            $emailer="";
            $id_array = 0;
            for ($arry_id=0; $arry_id < count($last_one) ; $arry_id++) { 
                echo "$last_one[$arry_id]<br>";
                echo "$last_stat[$arry_id]<br>";
                $id_array = $last_one[$arry_id];
                $get_email ="SELECT email FROM reservation WHERE id='$id_array'";
                $run_email = mysqli_query($con, $get_email);
                while($row = mysqli_fetch_array($run_email)){
                    $emailer=$row['email'];
                    $nom_person_annule[$cont]=$emailer;
                    $cont = $cont+1;
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
                $mail->Subject = 'Reservation annulee';
                $mail->Body ="votre reservation est annuler, il y'a pas assez de place pour au jourdui";
                $mail->AddAddress($emailer);
                $mail->Send();
                $query= "DELETE FROM reservation WHERE id='$id_array'";

                mysqli_query($con,$query);
                


            }
            echo "<script>window.open('viewreservation.php', '_self')</script>";
        }
        if($cont == 0){
            $nom_person_annule[$cont]="0 reservation annulée";
        }
        if($num_person_total<($per_max+1)){
            echo"
        <div class='alert alert-warning' role='alert'>
        LES RESERVATIONs ANNULE:<br>$nom_person_annule[0]<br>
        </div>";
        }
    }echo"</form>";







    echo"
    <div class='alert alert-primary' role='alert'>
    NOMBRE DE PERSONNE:<br>$num_person_total<br>NOMBRE DE PERSONNE MAXIMALE:<br>$per_max
    </div>";
    
?>