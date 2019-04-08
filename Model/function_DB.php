<?php

/**
 * Created by PhpStorm.
 * User: VIALLA Vincent
 * Date: 09/11/2018
 * Time: 14:26
 */

function GetDataBase(){
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=comics_seller;charset=utf8', 'root', '');
	return $bdd;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
}

function check_unique_pseudo(){
    $bdd=getDataBase();
    $req=$bdd->prepare('SELECT pseudo FROM users WHERE :pseudo=pseudo');
    $req->bindValue (':pseudo',$_POST['pseudo'],PDo::PARAM_STR);
    $req->execute();
    $res=$req->fetch();
    if($res!==null){
        print ('Cet adresse email existe déjà');
    }
}

function connection(){
    $bdd=getDataBase();
    $req=$bdd->prepare('SELECT ID FROM users WHERE :pseudo=pseudo AND :motDePasse=motDePasse');
    $req->bindValue (':pseudo',$_POST['pseudo'],PDo::PARAM_STR);
    $req->bindValue (':motDePasse',$_POST['motDePasse'],PDo::PARAM_STR);
    $req->execute();
    $res=$req->fetch();
    if($res!==null){
    $_SESSION=$res;
    }
    else{
        echo('Le mote de passe ou le peseudo est incorrect ');
    }
}
function connection_admin(){
    if ($_POST['pseudo']=='root' and $_POST['motDePasse']=='password'){
        $admin=true;
        $_SESSION=102;
        return$admin;
    }
    else{
        $admin=false;
        return$admin;
    }
    }

function insert(){
    $bdd=getDataBase();
    $req=$bdd->prepare('INSERT INTO users(pseudo,nom,prenom,email,portable,adr,ville,codePostal,motDePasse)
    VALUES (:pseudo,:nom,:prenom,:email,:portable,:adr,:ville,:codePostal,:motDePasse)');
    $req->bindValue (':pseudo',$_POST['pseudo'],PDo::PARAM_STR);
    $req->bindValue (':nom',$_POST['nom'],PDo::PARAM_STR);
    $req->bindValue (':prenom',$_POST['pren'],PDo::PARAM_STR);
    $req->bindValue (':email',$_POST['email'],PDo::PARAM_STR);
    $req->bindValue (':portable',$_POST['tel'],PDo::PARAM_STR);
    $req->bindValue (':adr',$_POST['adr'],PDo::PARAM_STR);
    $req->bindValue (':ville',$_POST['ville'],PDo::PARAM_STR);
    $req->bindValue (':codePostal',$_POST['codePostal'],PDo::PARAM_STR);
    $req->bindValue (':motDePasse',$_POST['motDePasse'],PDo::PARAM_STR);
    $req->execute();
}

function test(){
    print_r($_POST['pseudo']);
    print_r(connection());
}

function insert_comic(){
    $bdd=getDataBase();
    $req=$bdd->prepare('INSERT INTO comics(titre,editeur,etat,desciption)
    VALUES (:titre,:editeur,:etat,:desciption)');
    $req->bindValue (':titre',$_POST['titre'],PDo::PARAM_STR);
    $req->bindValue (':editeur',$_POST['editeur'],PDo::PARAM_STR);
    $req->bindValue (':etat',$_POST['etat'],PDo::PARAM_STR);
    $req->bindValue (':desciption',$_POST['desciption'],PDo::PARAM_STR);
    $req->execute();
}
function list_comics($bdd){
    $request=$bdd->prepare('SELECT titre,editeur,etat,desciption FROM comics ');
    $request->execute();
    return $request;
}