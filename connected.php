
<!--<img src="img/congrats.jpg" class="img-fluid" alt="Congratulation image">-->
<link href="css/landing-page.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<?php
session_start();
require_once "../Model/function_DB.php";
connection();
if ($_SESSION==!null){
    echo ('Vous êtes connecté');

?>
<div id="signed_up_page">
<a id="ReturnMainPage_congrats" href="index.php" >Return main page</a>
</div>
<?php }else{

    ?>
    <span id="connected_message">The pseudo or password is wrong</span>
    <br><br>
    <div id="connected_page">
        <a id="ReturnMainPage_error" href="connection_page.php" >Return to connection page</a>
    </div>
    <?php
}

