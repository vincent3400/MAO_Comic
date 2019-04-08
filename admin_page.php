<?php
/**
 * Created by PhpStorm.
 * User: le boss
 * Date: 22/11/2018
 * Time: 12:44
 */
require "../Model/function_admin.php";
$bdd = GetDataBase();
$tableau=list_user($bdd);
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Admin</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../View/css/admin_page.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">



</head>
<body>


<table class="table">
    <thead id="head_admin">
    <tr>
        <td>
            ID
        </td>
        <td>
            Nom
        </td>
        <td>
            Prénom
        </td>
        <td>
            Pseudo
        </td>


    </tr>
    </thead>
    <tbody>
    <?php while ($tab=$tableau->fetch()){ ?>
        <tr>
            <td>
                <?= $tab['ID']; ?>
                <a id="admin_modify" href="<?php echo("admin_modify_page.php?Modify_id=").$tab['ID']?>">modify</a>
                <a id="admin_delete" href="<?php echo("admin_delete_page.php?Delete_id=").$tab['ID']?>">Delete</a>
            </td>
            <td>
                <?= $tab['nom'];?>
            </td>
            <td>
                <?= $tab['prenom']; ?>
            </td>
            <td>
                <?= $tab['pseudo'];?>
            </td>
        </tr>

    <?php }  ?>
    </tbody>
</table>


</body>
</html>

