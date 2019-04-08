<link href="css/landing-page.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<?php
session_start();
require_once "../Model/function_admin.php";
$bdd = GetDataBase();
update($bdd);
var_dump($_POST);
?>
<div id="signed_up_page">
<a id="ReturnMainPage_congrats" href="admin_page.php" >Return admin page</a>
</div>
