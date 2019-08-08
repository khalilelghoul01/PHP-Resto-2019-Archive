<style>
.button {
  background-color: #e75b1e;
  border: none;
  color: white;
  padding-left: 60px;
  padding-right: 60px;
  padding-top: 15px;
  padding-bottom: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
<?php
echo "<div id='footer' class='footer-main'>
        <div class='footer-news pad-top-100 pad-bottom-70 parallax'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class='wow fadeIn' data-wow-duration='1s' data-wow-delay='0.1s'>
                            <h2 class='ft-title color-white text-center' id='text-col'> Lettres d'information </h2>
                            <br>
                        </div>
                        <form method='post' action=''>
                            <input type='email' name='email' placeholder='Entrez votre identifiant de messagerie'><br><br>
                            <button name='send' class='button'><i class='fa fa-paper-plane-o' aria-hidden='true'></i></button>";
if (isset($_POST['send'])) {
    $email = htmlentities(mysqli_real_escape_string($con,$_POST['email']));
    $query="INSERT INTO news (emails) VALUES ('$email')";
    if(mysqli_query($con,$query)){
        echo "<script>alert('trés bien')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
    }else{
        echo "<script>alert('il y a un problème')</script>";
    }

    
}

echo "</form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->";?>