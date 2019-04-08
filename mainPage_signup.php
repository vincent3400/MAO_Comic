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
    <form action="signed_up.php" method="post">
      <div class="form-row">

          <div class="form-group col-md-4">
            <label for="inputPseudo">Pseudo</label>
            <input required type="text" class="form-control"name="pseudo" id="inputPseudo"  placeholder="Pseudo">
          </div>
        <div class="form-group col-md-2">
          <label for="inputName">Name</label>
          <input required type="text" class="form-control"name="nom" id="inputName"  placeholder="Name">
        </div>
        <div class="form-group col-md-2">
          <label for="inputFirstname">Firstname</label>
          <input required type="text" class="form-control"name="pren" id="inputFirstname"  placeholder="Firstname">
        </div>
          <div class="form-group col-md-4">
            <label  for="inputEmail4">Email</label>
            <input type="email" class="form-control"name="email" id="inputEmail4" required value="<?php if ($_POST['mainPage_email']!==null)
            {print ($_POST['mainPage_email']);}
            else print ('bj');?>"  placeholder="Email">
          </div>
        <div class="form-group col-md-2">
          <label for="inputPassword4">Password</label>
          <input required type="password" class="form-control" name="motDePasse" id="inputPassword4" placeholder="Password">
        </div>
          <div class="form-group col-md-2">
              <label for="inputtel">Tel *</label>
              <input type="tel" class="form-control" name="tel" id="inputPhone" placeholder="tel">
          </div>
      </div>

        <div class="form-group col-md-2">
        <label for="inputAddress">Address *</label>
        <input type="text" class="form-control"name="adr" id="inputAddress" placeholder="1234 Main St">
        </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCity">City *</label>
          <input type="text" class="form-control" name="ville" id="inputCity">
        </div>

        <div class="form-group col-md-2">
          <label for="inputZip">ZIP *</label>
              <input type="text" class="form-control"  name="codePostal"id="inputZip">
        </div>
      </div>
      <div class="form-group">
      </div>
      <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
  <div id="facultativ"> * facultativ</div>
</body>
</html>
