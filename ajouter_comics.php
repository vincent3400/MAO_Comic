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
<form action="comic_addeed.php" method="post">
    <div class="form-row">

        <div class="form-group col-md-4">
            <label for="inputPseudo">Title</label>
            <input required type="text" class="form-control"name="titre" id="inputPseudo"  placeholder="Title">
        </div>
        <div class="form-group col-md-2">
            <label for="inputName">Editor</label>
            <input required type="text" class="form-control"name="editeur" id="inputName"  placeholder="Editor">
        </div>
        <div class="form-group col-md-2">
            <label for="inputFirstname">Description</label>
            <input required type="text" class="form-control"name="etat" id="inputFirstname"  placeholder="Description">
        </div>
        <div class="form-group col-md-4">
            <label  for="inputEmail4">Etat</label>
            <input type="text" class="form-control"name="desciption" id="inputEmail4" required value=""  placeholder="Etat">
        </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>
</body>
</html>
