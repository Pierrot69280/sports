<?php require_once "logique.php";
require_once "debugmode.php";

if(isset($_POST['name']) &&
    isset($_POST['team']) &&
    isset($_POST['position']) &&
    isset($_POST['image'])
){
    $name = $_POST['name'];
    $team = $_POST['team'];
    $position = $_POST['position'];
    $image = $_POST['image'];
    $id = $_POST['id'];

    $query = $pdoHockeyeur->prepare("UPDATE hockey SET name = :name, team = :team, position = :position, image = :image WHERE id = :id");

    $query->execute([
        "name" => $name,
        "team" => $team,
        "position" => $position,
        "image" => $image,
        "id" => $id,
    ]);

    header("Location: tousLesHockeyeurs.php");
}


$id = $_GET['id'];


$query = $pdoHockeyeur->prepare("SELECT * FROM hockey WHERE id = :id");

$query->execute([
    "id" => $id
]);

$hockey = $query->fetch();

afficher('hockey/edit', ["hockeyeur"=>$hockey,
    "pageTitle"=> $hockey['name'] ]);