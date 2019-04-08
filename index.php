<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>
  <head>
<?php print_r($_SESSION); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acceuil</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">

      <div class="container">
          <img  id="platform_title" src="img/platform.png" alt="title of the platform">
          <div class="d-flex">
              <div id="profile_index_dropdown" class="dropdown mr-1">
                  <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                      Menu
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="message.php">My messages</a>
                      <a class="dropdown-item" href="ajouter_comics.php">Add comic</a>
                      <a class="dropdown-item" href="Mycomics.php">My comics</a>
                  </div>
              </div>
              <a id="connection_index_button" class="btn btn-primary" href="connection_page.php">Se connecter</a>
              <a id="admin_index_button" class="btn btn-primary" href="connection_admin_page.php">Admin</a>
          <img src="img/Marvel-Comics-Logo.svg.png" width="150px" height="60px" alt="Marvel logo">
          <img src="img/comic.png" width="150px" height="60px" alt="comic logo">
          <img src="img/Dc-comics-logo.jpg" width="150px" height="60px" alt="title of the platform">

      </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Bienvenue sur le site de vente de comics de la MAO !</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="mainPage_signup.php" method="post">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg"  name="mainPage_email" placeholder="Enter your email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">S'inscrire!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
