<!DOCTYPE html>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/landing-page.css" rel="stylesheet">
<?php session_start();
if ($_SESSION!==null){
    var_dump($_SESSION) ?>


<html>
<head>
	<title></title>
</head>
<body>


<H1> Message Recu</H1>
<br>
<TABLE BORDER="1">
  <tr class="table table-dark">
 <th> id </th>
 <th> id expediteur </th>
 <th> id recepteur </th>
 <th> contenue </th>
  </tr>

<?php

include('../Model/messageFunction.php');

	$messageRecu = AfficherMessageRecuUser($_SESSION['ID']);
    foreach($messageRecu as $row) {
        echo "</tr>";
    	echo "<td> $row[0] </td>";
    	echo "<td> $row[1] </td>";
    	echo "<td> $row[2] </td>";
    	echo "<td> $row[3] </td>";
    	echo "</tr>";
    }

?>
</TABLE>

<H1> Message Envoye</H1>
<br>
<TABLE BORDER="1">
  <tr class="table table-dark">
 <th scope="col"> id </th>
 <th> id expediteur </th>
 <th> id recepteur </th>
 <th> contenue </th>
  </tr>


<?php 
	$messageEnvoye = AfficherMessageEnvoyeUser($_SESSION['ID']);
    foreach($messageEnvoye as $row) {
        echo "</tr>";
    	echo "<td> $row[0] </td>";
    	echo "<td> $row[1] </td>";
    	echo "<td> $row[2] </td>";
    	echo "<td> $row[3] </td>";
    	echo "</tr>";
    }

?>
</TABLE>

<h1>Envoyer message</h1>
<br>
<form method="POST">
    <label>Recepteur: <input type="text" name="recep"/></label><br/>
    <label>Contenue: <input type="text" name="contenue"/></label><br/>
    <input type='submit' name='envoiMessage' value='Envoyer'/>
</form>

<?php 

if(isset($_POST['envoiMessage'])){
	envoiMessage($_SESSION['ID'],$_POST['recep'],$_POST['contenue']);
}

 ?>



</body>
</html>
<?php }