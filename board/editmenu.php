<?php
    include("includes/connection.php");
    include("includes/header.php");
    $id=$_GET['id'];
    if(!isset($_GET['id'])){
        header("location: menu.php");
    }
    $get_menu ="SELECT * FROM menu WHERE food_id='$id' ORDER BY 1";
    $run_menu = mysqli_query($con, $get_menu);
    while($row = mysqli_fetch_array($run_menu)){
        $title_n = $row['food_title'];
        $catig = $row['cat'];
        $descri = $row['food_description'];
        $price = $row['food_price'];
        $price = str_replace("€","",$price);
        //$price = str_replace(".",",",$price);
        //echo $catig;
        $price_int = strval($price);
        //$role = $row['role_user'];
        echo "<form method='post' action='' enctype='multipart/form-data'>
        <div style='width:50%;text-align: center;margin: 0 auto;'>
            <h1 class='h3 mb-3 font-weight-normal'>Ajouter un element au menu</h1>
            <small>Il faut tous les remplir</small>
            <label class='sr-only'>Titre</label>
            <input type='text' name='titre'class='form-control' placeholder='Titre' value='$title_n'><br>
            <label class='sr-only'>Catégorie</label>
            <select class='browser-default custom-select' name='catigo' >";
        if($catig == "1"){
            echo"<option disabled>Catégorie</option>
            <option selected value='1'>Entrées</option>
            <option value='Plats'>Plats Principaux</option>
            <option value='Deserts'>Deserts</option>
            <option value='Boissons'>Boissons</option>";}
        if($catig == "Plats"){
                echo"<option disabled>Catégorie</option>
                <option value='1'>Entrées</option>
                <option selected value='Plats'>Plats Principaux</option>
                <option value='Deserts'>Deserts</option>
                <option value='Boissons'>Boissons</option>";}
        if($catig == "Deserts"){
                    echo"<option disabled>Catégorie</option>
                    <option value='1'>Entrées</option>
                    <option value='Plats'>Plats Principaux</option>
                    <option selected value='Deserts'>Deserts</option>
                    <option value='Boissons'>Boissons</option>";}
        if($catig == "Boissons"){
            echo"<option disabled>Catégorie</option>
            <option value='1'>Entrées</option>
            <option value='Plats'>Plats Principaux</option>
            <option value='Deserts'>Deserts</option>
            <option selected value='Boissons'>Boissons</option>";}
        if($catig == ""){
            echo"<option selected disabled>Catégorie</option>
            <option value='1'>Entrées</option>
            <option value='Plats'>Plats Principaux</option>
            <option value='Deserts'>Deserts</option>
            <option value='Boissons'>Boissons</option>";
        }
            echo"</select><br><br>
            <label class='sr-only'>Discription</label>
            <input type='text' name='discription' class='form-control' placeholder='Discription' value='$descri' ><br>
            <label class='sr-only'>Le Prix</label>
            <input type='number' name='prix'class='form-control' placeholder='Le Prix' value='$price_int' step='0.01'><br>
            <div class='input-group'>
      <div class='input-group-prepend'>
        <span class='input-group-text' id='inputGroupFileAddon01'>fichier</span>
      </div>
      <div class='custom-file'>
        <input type='file' class='custom-file-input' id='inputGroupFile01'
          aria-describedby='inputGroupFileAddon01' name='image' accept='image/*'>
        <label class='custom-file-label' for='inputGroupFile01'>image</label>
      </div>
    </div><br>
            <button class='btn btn-lg btn-primary btn-block' name='submit' type='submit'>Ajouter</button>
            <p class='mt-5 mb-3 text-muted'>© LE ZOO</p>
        </div>
    ";
    }
    if(isset($_POST['submit'])){
        $title = htmlentities(mysqli_real_escape_string($con,$_POST['titre']));
        if (isset($_POST['catigo'])) {
            $cat = $_POST['catigo'];
        }else {
            $cat = "";
        }
        $discription = htmlentities(mysqli_real_escape_string($con,$_POST['discription']));
        $prix = $_POST['prix'];
        $prix = strval($prix);
        $token = md5($prix);
        $prix = $prix."€";
        if(isset($_FILES['image'])){
            $target_dir = "http://localhost/website/board/uploads/";
            $target_Path="uploads/";
            $target_Path = $target_Path.basename( $_FILES['image']['name'] );
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );
        }
        $query = "UPDATE menu SET food_img='$target_file', food_description='$discription', food_title='$title', food_price='$prix', cat='$cat' WHERE food_id = '$id'";
        $execute = mysqli_query($con,$query);
        if ($execute) {
            header("location: menu.php");    
        }
        else{
            echo"il y'a un probleme";
        }

    }
    echo "</form>";

?>
</form>