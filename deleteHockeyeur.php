<?php require_once "debugmode.php";
require_once "logique.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = $pdoHockeyeur->prepare("DELETE FROM hockey WHERE id = :id");
    $query->execute([
        "id"=>$id
    ]);

    header('Location: tousLesHockeyeurs.php');
}