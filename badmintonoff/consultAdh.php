<?php
/*
 * Page affichant la fiche de l'adhérent selectionné
 */
include 'controleur/c_config.php';
include 'controleur/c_fonctions.php';

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
$title = 'Fiche de l\'adhérent n°' . $matriculeAdh;
$gest = 'active';
ob_start();
?>
<hr>
<h1>Fiche adhérent</h1>
<hr>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code postal</th>
            <th>Niveau</th>
            <th>Statut</th>
            <th>Montant licence</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $matriculeAdh ?></td>
            <td><?php echo $nomAdh ?></td>
            <td><?php echo $prenomAdh ?></td>
            <td><?php echo $adresseAdh ?></td>
            <td><?php echo $villeAdh ?></td>
            <td><?php echo $cpAdh ?></td>
            <td><?php echo $niveauAdh ?></td>
            <td><?php echo $libelleType ?></td>
            <td><?php echo $montantLicence ?></td>
        </tr>
        </tbody>
    </table>
</div>
<div class="container text-center">
    <br>
    <a class="btn btn-outline-secondary" href="gestionAdh.php">Retour</a>
</div>

<?php
$content = ob_get_clean();
include 'layouts/base.php';
?>
