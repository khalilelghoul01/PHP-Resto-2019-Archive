<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
      <title>S'identifier  |  Admin</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link href="https://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
   </head>
   <body class="text-center">
      <form class="form-signin" method="post" action="">
         <h1 class="h3 mb-3 font-weight-normal">S'dentifier</h1>
         <label for="inputEmail" class="sr-only">Email</label>
         <input type="email" id="inputEmail" name="email"class="form-control" placeholder="Email address" required="" autofocus="">
         <label for="inputPassword" class="sr-only">Mot de passe</label>
         <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Mot de passe" required=""><br>
         <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">enregistrer</button>
         <p class="mt-5 mb-3 text-muted">© LE ZOO</p>
         <?php include("signin.php");?>
      </form>
   </body>
</html>