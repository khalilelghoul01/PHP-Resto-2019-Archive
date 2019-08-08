<?php 
include("includes/header.php");
include("includes/connection.php"); ?>

<form method='post' action='' enctype="multipart/form-data">
    <div style='width:50%;text-align: center;margin: 0 auto;'>
        <h1 class='h3 mb-3 font-weight-normal'>Ajouter un element au menu</h1>
        <small>Il faut tous les remplir</small>
        <label class='sr-only'>Titre</label>
        <input type='text' name='titre'class='form-control' placeholder='Titre' ><br>
        <label class='sr-only'>Catégorie</label>
        <select class="browser-default custom-select" name="catigo">
        <option selected disabled>Catégorie</option>
        <option value="1">Entrées</option>
        <option value="Plats">Plats Principaux</option>
        <option value="Deserts">Deserts</option>
        <option value="Boissons">Boissons</option>
        </select><br><br>
        <label class='sr-only'>Discription</label>
        <input type='text' name='discription' class='form-control' placeholder='Discription' ><br>
        <label class='sr-only'>Le Prix</label>
        <input type='number' name='prix'class='form-control' placeholder='Le Prix' ><br>
        <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">fichier</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="image" accept="image/*">
    <label class="custom-file-label" for="inputGroupFile01">image</label>
  </div>
</div><br>
        <button class='btn btn-lg btn-primary btn-block' name='submit' type='submit'>Ajouter</button>
        <p class='mt-5 mb-3 text-muted'>© LE ZOO</p>
    </div>
<?php
if(isset($_POST['submit'])){
    $title = htmlentities(mysqli_real_escape_string($con,$_POST['titre']));
    //echo $title."<br>";
    if (isset($_POST['catigo'])) {
        $cat = $_POST['catigo'];
    }else {
        $cat = "";
    }
    //echo $cat."<br>";

    $discription = htmlentities(mysqli_real_escape_string($con,$_POST['discription']));
    //echo $discription."<br>";
    $prix = $_POST['prix'];
    $prix = strval($prix);
    //echo $prix."<br>";
    $token = md5($prix);
    //echo $token."<br>";
    $prix = $prix."€";
    //echo $prix."<br>";
    if(isset($_FILES['image'])){
        $target_dir = "http://localhost/website/board/uploads/";
        $target_Path="uploads/";
        $target_Path = $target_Path.basename( $_FILES['image']['name'] );
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );
        //echo "$target_file";
    }
    //echo $target_file."<br>";
    $query = "INSERT INTO menu (cat, food_title, food_description, food_date, food_img, food_price, price_token) VALUES('$cat','$title','$discription',NOW(),'$target_file','$prix','$token')";
    if(mysqli_query($con,$query)){
        echo "<script>alert('trés bien')</script>";
    }else{echo "error";}
}
?>
</form>
