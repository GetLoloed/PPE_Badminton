<?php include 'v_header.html' ?>
<title>Badminton | Ajouter un adhérent</title>
<div class="container">
    <hr>
    <h1>Ajouter un adhérent</h1>
    <hr>
    <form action="../controleur/c_ajouterAdh.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Nom de famille</label>
                <input type="text" name="nomAdh" class="form-control" id="nomAdh" placeholder="Nom de famille" required>
            </div>
            <div class="form-group col-md-6">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenomAdh" id="prenomAdh" placeholder="Prénom" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="">Adresse</label>
                <input type="text" class="form-control" name="adresseAdh" id="adresseAdh" placeholder="Adresse" required>
            </div>
            <div class="col">
                <label for="">Ville</label>
                <input type="text" class="form-control" name="villeAdh" id="villeAdh" placeholder="Ville" required>
            </div>
            <div class="col">
                <label for="">Code postal</label>
                <input type="text" class="form-control" name="cpAdh" id="cpAdh" placeholder="Code postal" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="">Statut</label>
                <select class="form-control" name="typeAdh" id="typeAdh">
                    <option value="1">Etudiant</option>
                    <option value="2">Salarié</option>
                    <option value="3">Retraité</option>
                </select>
            </div>
            <div class="col">
                <label for="">Niveau</label>
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
    <button class="btn btn-outline-primary" type="submit" value="envoyer" name="envoyer" id="envoyer">Ajouter</button>
</div>
</form>
</div>
<?php include "v_footer.html"; ?>
