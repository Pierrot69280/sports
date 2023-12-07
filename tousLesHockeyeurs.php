<?php require_once 'logique.php';
require_once "debugmode.php";

$query = $pdoHockeyeur->query("SELECT * FROM hockey");

$hockeyeurs = $query->fetchAll();


afficher("hockey/index", ["hockeyeurs"=>$hockeyeurs]);