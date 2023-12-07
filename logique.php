<?php
require_once 'debugmode.php';


$dbHost = "localhost";
$dbName = "sports";
$username ="hockey";

$password = "zL!W1@5KyHk-umaM";



$pdoHockeyeur = new PDO ("mysql:host=$dbHost;dbname=$dbName",$username,$password,
    [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]
);


function afficher($nomDeTemplate, $donnees){

    ob_start();
    extract($donnees);

    require_once "templates/${nomDeTemplate}.html.php";

    $content = ob_get_clean();

    require_once "templates/base.html.php";


}
