
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  session_start();
  ?>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">
    <form action="connected.php" method="post">
      <div class="form-row">

          <div class="form-group col-md-4">
            <label for="inputPseudo">Pseudo</label>
            <input required type="text" class="form-control"name="pseudo" id="inputPseudo"  placeholder="Pseudo">
          </div>

        <div class="form-group col-md-2">
          <label for="inputPassword4">Password</label>
          <input  required type="password" class="form-control" name="motDePasse" id="inputPassword4" placeholder="Password">
        </div>

      </div>
      <div class="form-group">
      </div>
      <button type="submit"  class="btn btn-primary">Connection</button>
    </form>
  <?php
  require_once "../Model/function_DB.php";
  $_SESSION=null;
  print_r($_SESSION);
  if($_SESSION==null){
  ?>
      <br><br>
      <a href="signUp_from_link.php">Inscrivez vous si vous n'avez pas de compte </a> <?php }
  else{
  ?>
      <br><br>
      <span>Vous êtes déjà connecté</span> <br><br>
      <a href="index.php">Retrouner à la page principale </a>
      <?php
  }
  ?>

</body>
</html>
