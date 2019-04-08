<?php
/**
 * Created by PhpStorm.
 * User: le boss
 * Date: 22/11/2018
 * Time: 12:44
 */
require "../Model/function_DB.php";
$bdd = GetDataBase();
$tableau=list_comics($bdd);
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/css/landing-page.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



</head>
<body>


<table class="table">
    <thead id="head_admin">
    <tr>
        <td>
            Title
        </td>
        <td>
            Editor
        </td>
        <td>
            Description
        </td>
        <td>
            Etat
        </td>


    </tr>
    </thead>
    <tbody>
    <?php while ($tab=$tableau->fetch()){ ?>
        <tr>
            <td>
                <?= $tab['titre'];?>
            </td>
            <td>
                <?= $tab['editeur'];?>
            </td>
            <td>
                <?= $tab['etat']; ?>
            </td>
            <td>
                <?= $tab['desciption'];?>
            </td>
        </tr>

    <?php }  ?>
    </tbody>
</table>


</body>
</html>

