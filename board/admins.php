<?php include("includes/header.php") ?>
<?php
    if(!isset($_GET['id'])){
        header("location: Analytics.php");
    }
    $secure=$_SESSION['user_email'];
    $get_admin ="SELECT id FROM admin WHERE email='$secure'";
    $run_admin = mysqli_query($con, $get_admin);
    while($row = mysqli_fetch_array($run_admin)){
        $secure_id=$row['id'];
    }
    if($_GET['id']!=$secure_id){
        header("location: Analytics.php");
    }
    echo"<table class='table table-bordered table-dark'>
    <thead>
    <tr>
        <th scope='col'>#</th>
        <th scope='col'>USERNAME:</th>
        <th scope='col'>EMAIL:</th>
        <th scope='col'>MOT DE PASSE:</th>
        <th scope='col'>NOM:</th>
        <th scope='col'>PRENOM:</th>
        <th scope='col'>ROLE:</th>
        <th scope='col'></th>
        <th scope='col'></th>
    </tr>
    </thead>
    <tbody>";
    $get_admin ="SELECT * FROM admin ORDER BY 1";
    $run_admin = mysqli_query($con, $get_admin);
    $admin=0;
    while($row = mysqli_fetch_array($run_admin)){
        $admin = $admin +1;
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['admin_pass'];
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $role = $row['role_user'];
        $vpass= str_repeat("*",strlen($password));
        echo "
        <tr>
        <th scope='row'>$admin</th>
        <td>$username</td>
        <td>$email</td>
        <td>$vpass</td>
        <th>$l_name</th>
        <td>$f_name</td>
        <td>$role</td>";
        if($_GET['id'] == $id){
            echo"<td>change le avec un autre compte</td>";
            echo"<td>supprime le avec un autre compte</td>";
        }else{
            $noid=$_GET['id'];
            echo"<td><a href='edit.php?id=$id&&no-id=$noid' type='button' class='btn btn-primary'>modifier</a></td>";
            echo"<td><a href='delete.php?id=$id&&no-id=$noid' type='button' class='btn btn-danger'>supprimer</a></td>";
            
            }
            echo"</tr>";
        }








    echo "
    </tbody>
    </table>";


?>