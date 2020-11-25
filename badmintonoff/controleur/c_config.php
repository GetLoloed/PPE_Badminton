<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "badminton";

$connexion = new mysqli($host, $user, $pass, $dbname);

if (!$connexion) {
    die("Erreur dans la connexion à la base de données : " . $connexion->connect_error);
}
?>