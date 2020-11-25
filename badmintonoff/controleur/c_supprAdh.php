<?php

include "c_config.php";
include_once "c_fonctions.php";
if (isset($_GET['matriculeAdh'])) {
    $matriculeAdh = $_GET['matriculeAdh'];
    $fonctions = new Fonctions();
    $delete = $fonctions->deleteAdh($connexion, $matriculeAdh);
    if ($delete) {
        echo '<script>window.location.href="../vues/v_gestionAdh.php";</script>';
    }
}
?>