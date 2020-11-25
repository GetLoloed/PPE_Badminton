<?php
/*
 * Page modifiant la fiche de l'adhérent selectionné
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
        $typeAdh = $fiche->typeAdh;
        $libelleType = $fiche->libelleType;
        $montantLicence = $fiche->montantLicence;
    }
}
?>
<title>Badminton | Modifier fiche</title>
<div class="container">
    <hr>
    <h1>Modification de l'adhérent</h1>
    <hr>
    <form action="../controleur/c_modifierAdh.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Matricule</label>
                <input type="text" name="matriculeAdh" class="form-control" id="matriculeAdh" value="<?php echo $matriculeAdh?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Nom de famille</label>
                <input type="text" name="nomAdh" class="form-control" id="nomAdh" value="<?php echo $nomAdh?>">
            </div>
            <div class="form-group col-md-6">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenomAdh" id="prenomAdh" value="<?php echo $prenomAdh?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="">Adresse</label>
                <input type="text" class="form-control" name="adresseAdh" id="adresseAdh" value="<?php echo $adresseAdh ?>">
            </div>
            <div class="col">
                <label for="">Ville</label>
                <input type="text" class="form-control" name="villeAdh" id="villeAdh" value="<?php echo $villeAdh ?>">
            </div>
            <div class="col">
                <label for="">Code postal</label>
                <input type="text" class="form-control" name="cpAdh" id="cpAdh" value="<?php echo $cpAdh ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="">Statut (actuellement : <strong><?php echo $libelleType ?></strong>)</label>
                <select class="form-control" name="typeAdh" id="typeAdh">
                    <option value="1">Etudiant</option>
                    <option value="2">Salarié</option>
                    <option value="3">Retraité</option>
                </select>
            </div>
            <div class="col">
                <label for="">Niveau (actuellement : <strong><?php echo $niveauAdh ?></strong>)</label>
                <select class="form-control" name="niveauAdh" id="niveauAdh">
                    <option value=Débutant>Débutant</option>
                    <option value=Confirmé>Confirmé</option>
                    <option value=Expert>Expert</option>
                </select>
            </div>
        </div>
</div>
<div class="container text-center">
    <br>
    <button class="btn btn-outline-primary" type="submit" value="modifier" name="modifier" id="modifier">modifier</button>
    <a href="v_gestionAdh.php" class="btn btn-outline-secondary">Retour</a>
</div>
</form>
</div>
<?php include "v_footer.html"; ?>
