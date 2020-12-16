<?php
include "c_config.php";
include "c_fonctions.php";

if (isset($_POST['modifier']))
{
    $matriculeAdh = $_POST['matriculeAdh'];
    $nomAdh = $_POST['nomAdh'];
    $prenomAdh = $_POST['prenomAdh'];
    $adresseAdh = $_POST['adresseAdh'];
    $villeAdh = $_POST['villeAdh'];
    $cpAdh = $_POST['cpAdh'];
    $niveauAdh = $_POST['niveauAdh'];
    $typeAdh = $_POST['typeAdh'];

    $fonction = new Fonctions();
    $modif = $fonction->modifierAdh($connexion, $matriculeAdh, $nomAdh, $prenomAdh, $adresseAdh, $villeAdh, $cpAdh, $niveauAdh, $typeAdh );
    $result = $connexion->query($modif);
    if ($modif)
    {
        echo '<script>window.location.href="../gestionAdh.php";</script>';
    }
}
?>