<?php 

function AfficherMessageRecuUser($user){

	$bdd = new PDO('mysql:host=localhost;dbname=comics_seller', 'root', '');

	$requestVerif = $bdd->prepare('SELECT ID,IDexposition,IDrecepteur,contenue FROM message WHERE IDrecepteur = :array_recep');
	$requestVerif->execute(array(':array_recep' => $user));
	$result = $requestVerif;

	$bdd = null;

	return $result;
}

function AfficherMessageEnvoyeUser($user){

	$bdd = new PDO('mysql:host=localhost;dbname=comics_seller', 'root', '');

	$requestVerif = $bdd->prepare('SELECT ID,IDexposition,IDrecepteur,contenue FROM message WHERE IDexposition = :array_expe');
	$requestVerif->execute(array(':array_expe' => $user));
	$result = $requestVerif;

	$bdd = null;

	return $result;
}
/*
function TriMessageExpediteur($user , $expediteur){
	$bdd = new PDO('mysql:host=localhost;dbname=comics_seller', 'root', '');
	$requestVerif = $bdd->prepare('SELECT * FROM message WHERE id_recep = :array_recep and id_expe = :array_expe');
	$requestVerif->execute(array(':array_recep' => $user,
								 ':array_expe' => $expediteur));
	$result = $requestVerif;

	$bdd = null;

	return $result;
}

function TriMessageRecepteur($user , $recepteur){
	$bdd = new PDO('mysql:host=localhost;dbname=comics_seller', 'root', '');
	$requestVerif = $bdd->prepare('SELECT * FROM message WHERE id_recep = :array_recep and id_expe = :array_expe');
	$requestVerif->execute(array(':array_recep' => $recepteur,
								 ':array_expe' => $user));
	$result = $requestVerif;

	$bdd = null;

	return $result;
}*/

function envoiMessage($id_expe, $id_recep, $contenue){
	$bdd = new PDO('mysql:host=localhost;dbname=comics_seller', 'root', '');
	$requestEnvoi = $bdd->prepare('INSERT INTO message(IDexposition, IDrecepteur, contenue) VALUES(:array_expe, :array_recep, :array_contenue)');
	$requestEnvoi->execute(array(':array_expe' => $id_expe, ':array_recep' => $id_recep, ':array_contenue' => $contenue));
    return;
}
?>