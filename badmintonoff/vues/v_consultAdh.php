<?php
/*
 * Page affichant la fiche de l'adhérent selectionné
 */
include "v_header.html";
include '../controleur/c_config.php';
include '../controleur/c_fonctions.php';

if (isset($_GET['matriculeAdh'])) {

    $matriculeAdh = $_GET['matriculeAdh'];

    $fonctions = new Fonctions();
    $details = $fonctions->detailsAdh($connexion, $matriculeAdh);

    if ($fiche = $details->fetch_object()) {
        $nomAdh = $fiche->nomAdh;
        $prenomAdh = $fiche->prenomAdh;
        $adresseAdh = $fiche->adresseAdh;
        $villeAdh = $fiche->villeAdh;
        $cpAdh = $fiche->cpAdh;
        $niveauAdh = $fiche->niveauAdh;
        $libelleType = $fiche->libelleType;
        $montantLicence = $fiche->montantLicence;
    }
}
?>
<title>Badminton | Fiche adhérent</title>
<hr>
<h1>Fiche adhérent</h1>
<hr>
<div class="container">
    <div class="form-row border">
        <table>
            <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $matriculeAdh ?></th>
                <th><?php echo $nomAdh ?></th>
                <th><?php echo $prenomAdh ?></th>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-row border">
        <table>
            <thead>
            <tr>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $villeAdh ?></th>
                <th><?php echo $adresseAdh ?></th>
                <th><?php echo $cpAdh ?></th>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-row border">
        <table>
            <thead>
            <tr>
                <th>Niveau</th>
                <th>Statut</th>
                <th>Montant de la licence</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><?php echo $niveauAdh ?></th>
                <th><?php echo $libelleType ?></th>
                <th><?php echo $montantLicence . '€' ?></th>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="container text-center">
        <br>
        <a class="btn btn-outline-secondary" href="v_gestionAdh.php">Retour</a>
    </div>
</div>

<?php include "v_footer.html" ?>
