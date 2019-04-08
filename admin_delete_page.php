<?php
/**
 * Created by PhpStorm.
 * User: VIALLA Vincent
 * Date: 23/11/2018
 * Time: 11:36
 */ require "../Model/function_admin.php";
$bdd = GetDataBase();
$tableau=list_user($bdd);
delete($bdd);
var_dump($_GET);