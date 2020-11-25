<?php
include 'c_config.php';
include 'c_fonctions.php';
if (isset($_POST['envoyer'])) {
    $nomAdh = $_POST['nomAdh'];
    $prenomAdh = $_POST['prenomAdh'];
    $adresseAdh = $_POST['adresseAdh'];
    $villeAdh = $_POST['villeAdh'];
    $cpAdh = $_POST['cpAdh'];
    $niveauAdh = $_POST['niveauAdh'];
    $typeAdh = $_POST['typeAdh'];

    $common = new Fonctions();
    $add = $common->addAdh($connexion, $nomAdh, $prenomAdh, $adresseAdh, $villeAdh, $cpAdh, $niveauAdh, $typeAdh);
    $result = $connexion->query($add);
    if ($add) {
        echo '<script>window.location.href="../vues/v_ajouterAdh.php";</script>';
    }

}
?>