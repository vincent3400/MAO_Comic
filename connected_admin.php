<link href="css/landing-page.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
<?php
session_start();
require_once "../Model/function_DB.php";

    connection_admin();

    if (connection_admin()==true){ ?>
        <div id="signed_up_page">
<a id="ReturnMainPage_congrats" href="admin_page.php" >Go to the admin page</a>
</div> <?php
    }
    elseif (connection_admin()==false){
        ?>
        <span id="connected_message">The pseudo or password is wrong</span>
        <br><br>
        <div id="connected_page">
            <a id="ReturnMainPage_error" href="connection_admin_page.php" >Return to connection page</a>
        </div> <?php
    }

