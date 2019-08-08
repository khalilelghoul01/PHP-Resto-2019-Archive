<?php include("includes/header.php") ?>
<?php

    echo"<table class='table table-bordered table-dark'>
    <thead>
    <tr>
        <th scope='col'>#</th>
        <th scope='col'>Image:</th>
        <th scope='col'>Titre:</th>
        <th scope='col'>Discription:</th>
        <th scope='col'>Catégorie:</th>
        <th scope='col'>Prix:</th>
        <th scope='col'>Date de creation:</th>
        <th scope='col'></th>
        <th scope='col'></th>
        
    </tr>
    </thead>
    <tbody>";
    $get_menu ="SELECT * FROM menu ORDER BY 1";
    $run_menu = mysqli_query($con, $get_menu);
    $menu=0;
    while($row = mysqli_fetch_array($run_menu)){
        $id=$row['food_id'];
        $menu = $menu +1;
        $titre = $row['food_title'];
        $discription = $row['food_description'];
        $cat = $row['cat'];
        $date = $row['food_date'];
        $img = $row['food_img'];
        $prix = $row['food_price'];
        if($cat=="1"){
            $cat="Entrées";
        }
        if($img =="http://localhost/website/board/uploads/"){
            echo "
        <tr>
        <th scope='row'>$menu</th>
        <td>Il y'a pas d'image</td>
        <td>$titre</td>
        <td>$discription</td>
        <th>$cat</th>
        <td>$prix</td>
        <td>$date</td>
        <td><a href='editmenu.php?id=$id' type='button' class='btn btn-primary'>modifier</a></td>
        <td><a href='deletemenu.php?id=$id' type='button' class='btn btn-danger'>supprimer</a></td>
        </tr>
        ";
        }else{
            echo "
        <tr>
        <th scope='row'>$menu</th>
        <td><img style='width:60px;height:60px;border-radius:50%;' src='$img'/></td>
        <td>$titre</td>
        <td>$discription</td>
        <th>$cat</th>
        <td>$prix</td>
        <td>$date</td>
        <td><a href='editmenu.php?id=$id' type='button' class='btn btn-primary'>modifier</a></td>
        <td><a href='deletemenu.php?id=$id' type='button' class='btn btn-danger'>supprimer</a></td>
        </tr>
        ";}}








    echo "
    </tbody>
    </table>";


?>