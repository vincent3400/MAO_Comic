<link href="css/landing-page.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<?php
session_start();
require_once "../Model/function_DB.php";
insert_comic();
?>
<div id="signed_up_page">
    <a id="ReturnMainPage_congrats" href="index.php" >Return main page</a>
    <a id="Returnadd_comic_congrats" href="ajouter_comics.php" >Return add comic</a>
</div>