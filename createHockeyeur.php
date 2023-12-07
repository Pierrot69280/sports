<?php
require_once "debugmode.php";
require_once "logique.php";

if(isset($_POST['name']) &&
    isset($_POST['team']) &&
    isset($_POST['position']) &&
    isset($_POST['image'])
){
    $name = $_POST['name'];
    $team = $_POST['team'];
    $position = $_POST['position'];
    $image = $_POST['image'];


    if (isset($_POST['name']) &&
        isset($_POST['team']) &&
        isset($_POST['position']) &&
        isset($_POST['image'])) {
        $query = $pdoHockeyeur->prepare("INSERT INTO hockey SET name = :name, team = :team, position = :position, image = :image");

        $query->execute([
            "name" => $name,
            "team" => $team,
            "position" => $position,
            "image" => $image,
        ]);

        header("Location: tousLesHockeyeurs.php");
    }else{
        echo "Veuillez remplir tous les champs avec du texte.";

    }

}

afficher("hockey/create", ["pageTitle"=> "nouveau Hockeyeur"]);