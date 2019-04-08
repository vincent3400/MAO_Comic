<?php
/**
 * Created by PhpStorm.
 * User: le boss
 * Date: 22/11/2018
 * Time: 13:46
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


function list_user($bdd){
    $request=$bdd->prepare('SELECT * FROM users ');
    $request->execute();
    return $request;
}
function list_user_by_id($bdd){
    $request=$bdd->prepare('SELECT * FROM users WHERE :ID=ID');
    $request->bindValue (':ID',$_GET['Modify_id'],PDo::PARAM_INT);
    $request->execute();
    $res=$request->fetch();
    return $res;


}
function delete($bdd){
    $request=$bdd->prepare('DELETE FROM users WHERE :ID=ID');
    $request->bindValue (':ID',$_GET['Delete_id'],PDo::PARAM_STR);
    $request->execute();

}
function update($bdd){
    $req=$bdd->prepare('UPDATE users
    SET pseudo= :pseudo,
        nom=:nom,
        prenom=:prenom,
        email=:email,
        portable=:portable,
        adr=:adr,
        ville=:ville,
        codePostal=:codePostal,
        motDePasse=:motDePasse
     WHERE :ID=ID');
    $req->bindValue (':ID',$_POST['id'],PDo::PARAM_STR);
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