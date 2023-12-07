<?php require_once 'logique.php';

$idHockeyeur= $_GET['id'];

$query = $pdoHockeyeur->prepare("SELECT * FROM hockey WHERE id = :id");
$query->execute(["id"=>$idHockeyeur]);
$hockeyeur =$query->fetch();



afficher('hockey/show',["hockeyeur"=>$hockeyeur]);